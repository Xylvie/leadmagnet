<x-app-layout>

    

    @if (session('success'))
        <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        
    @endif

    <div class="py-5">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div id="leads-dashboard" class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h3 class="text-sm font-medium text-gray-500">Total Leads</h3>
                        <p class="text-2xl font-semibold text-gray-900">{{ $totalleads }}</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h3 class="text-sm font-medium text-gray-500">Leads This Month</h3>
                        <p class="text-2xl font-semibold text-gray-900">{{ $monthlyleads }}</p>
                    </div>
                </div>

                <form action="{{ route('leads.search') }}" method="GET">
                    <div id="seach-bar" class="flex items-center w-full px-4 py-3 mb-4 space-x-2 bg-white rounded-md shadow-sm">

                        <input type="text" id="searchInput" name="search" placeholder="Search leads..." class="w-full px-4 py-2 border-none rounded-md outline-none focus:outline-none">
                        <div class="flex content-center">
                            <button class="hover:text-gray-500">Search</button>
                        </div>
                    </div>
                </form>

                <table class="min-w-full bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <thead class="bg-gray-200 dark:bg-gray-700">
                        <tr class="px-10 text-lg text-center text-gray-200">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Registered</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($leads as $lead)
                            <tr class="px-5 py-5 text-gray-900 text-start dark:text-gray-100">
                                <td class="px-5 py-2">{{ $lead->name }}</td>
                                <td class="px-5 py-2">{{ $lead->email }}</td>
                                <td class="px-5 py-2">{{ $lead->phone }}</td>
                                <td class="px-5 py-2">{{ $lead->address }}</td>
                                <td class="px-5 py-2">{{ $lead->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lead?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
