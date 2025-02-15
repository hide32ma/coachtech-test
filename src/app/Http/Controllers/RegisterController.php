<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//  RegisterRequestを使用
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    // register.blade.phpを表示
    public function register()
    {
        return view('register');
    }

    public function login(RegisterRequest $request)
    {
        $contact = $request->all();
        return view('login', compact('contact'));
    }





}
