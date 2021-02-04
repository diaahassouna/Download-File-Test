<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class test extends Controller
{
    public function index() {
        //Specifying the file 'text.txt' URL
        $url = storage::url('test.txt');

        $path = public_path('test.txt');
        $name = time().'.txt';

        return response()->download($path, $name);
    }
}
