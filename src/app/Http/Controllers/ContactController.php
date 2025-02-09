<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // どこからでもアクセスできるindexアクション
    // index.blade.phpを表示
    public function index()
    {
        return view('index');
    }
}
