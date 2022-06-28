<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aston_martin extends Model
{
    use HasFactory;

    protected $table = 'aston_martin';
    protected $fillable = [
        'car',
        'team',
        'driver'
    ];
}
