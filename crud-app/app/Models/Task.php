<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Permitir apenas estes campos para mass assignment
    protected $fillable = [
        'title',
        'description',
    ];
}
