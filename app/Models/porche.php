<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class porche extends Model
{
    use HasFactory;

    protected $table = 'porsche';
    protected $fillable = [
        'car',
        'team',
        'driver'
    ];
}
