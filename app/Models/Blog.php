<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     "blogtitle",
    //     "blogsummary",
    //     "blogpost"
    // ];
    protected $table = "blogs";
    protected $fillable = [
        'blogtitle',
        'blogsummary',
        'blogpost',


    ]
}
