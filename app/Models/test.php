<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    //Create table schema for test (here they are Meme Categories)
    protected $fillable = ['cat', 'dog', 'movie', 'random'];
}
