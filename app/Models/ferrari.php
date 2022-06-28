<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ferrari extends Model
{
    use HasFactory;

    protected $table = 'ferrari';
    protected $fillable = [
        'car',
        'team',
        'driver'
    ];
}
