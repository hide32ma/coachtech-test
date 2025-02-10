<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // index.blade.phpを表示
    public function index()
    {
        return view('index');
    }

    public function confirm()
    {
        return view('confirm');
    }


}
