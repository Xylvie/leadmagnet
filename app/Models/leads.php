<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class leads extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}
