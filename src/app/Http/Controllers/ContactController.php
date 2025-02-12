<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ContactRequestを使用
use App\Http\Requests\ContactRequest;



class ContactController extends Controller
{
    // index.blade.phpを表示
    public function index()
    {
        return view('index');
    }



    public function confirm(ContactRequest $request)
    {

        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'detail']);


        return view('confirm', compact('contact'));


    }




    // public function store(ContactRequest $request)
    // {
        // $contact = $request->only(['name', 'email', 'tel', 'content']);

        //データの保存処理のコード
        // Contact::create($contact);

        // return view('thanks');
    //}




}
