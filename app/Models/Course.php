<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Add this line to allow filling these columns
    protected $fillable = ['course_code', 'course_name']; 
}