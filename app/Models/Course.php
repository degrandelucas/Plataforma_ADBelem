<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // The attributes that are mass assignable $fillable
    protected $fillable = [
        'name',
        'description',
        'slug',
        'thumbnail',
        'is_published',
    ];

     //Get the modules for the course.
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
