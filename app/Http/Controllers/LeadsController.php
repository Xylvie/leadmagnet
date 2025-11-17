<?php

namespace App\Http\Controllers;

use App\Models\leads;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = leads::all();

        $totalleads = $leads->count();
        $monthlyleads = $leads->where('created_at', '>=', now()->subMonth())->count();

        return view('dashboard', compact('leads', 'totalleads', 'monthlyleads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'required|string|max:500',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');  
        leads::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        ]);

        return redirect()->back()->with('success', 'You have Successfully Subscribed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(leads $leads)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(leads $leads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, leads $leads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leads $leads)
    {
        $leads->delete();
        return redirect()->back()->with('success', 'Lead deleted successfully.');
    }

    public function export()
    {
        $leads = leads::all();
        $filename = 'leads_export_' . date('Ymd_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $columns = ['ID', 'Name', 'Email', 'Phone', 'Address', 'Created At', 'Updated At'];
        $callback = function() use ($leads, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($leads as $lead) {
                fputcsv($file, [
                    $lead->id,
                    $lead->name,
                    $lead->email,
                    $lead->phone,
                    $lead->address,
                    $lead->created_at->format('Y-m-d H:i'),
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $leads = leads::where('name', 'like', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%")
            ->orWhere('phone', 'like', "%{$search}%")
            ->orWhere('address', 'like', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->get();

        $totalleads = leads::count();
        $monthlyleads = leads::where('created_at', '>=', now()->subMonth())->count();

        return view('dashboard', compact('leads', 'totalleads', 'monthlyleads'));
    }
}
