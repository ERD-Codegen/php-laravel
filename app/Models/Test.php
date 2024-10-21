<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'test',
    ];

    protected $casts = [
        'test' => 'string',
    ];

    // Assuming relationships to be defined later
}