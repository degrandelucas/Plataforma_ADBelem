<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    //The attributes that are mass assignable.
    protected $fillable = [
        'course_id',
        'name',
        'description',
        'order',
        'is_published',
        'video_url',
        'link_prova',
    ];

    //Get the course that owns the module.
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
