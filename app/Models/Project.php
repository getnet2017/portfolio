<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'projects';

    // The attributes that are mass assignable
    protected $fillable = [
        'title',
        'description',
        'image',
        'link'
    ];

    // Optionally define relationships, etc.
}