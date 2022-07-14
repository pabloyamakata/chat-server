<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category'];

    // Use in case there are many elements in $fillable array. Read the docs for more info
    protected $guarded = [];
}
