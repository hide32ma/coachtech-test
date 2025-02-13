<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ContactRequestを使用
use App\Http\Requests\ContactRequest;

use App\Models\Contact;



class ContactController extends Controller
{
    // index.blade.phpを表示
    public function index()
    {
        return view('index');
    }



    public function confirm(ContactRequest $request)
    {
            $contact = $request->all();

        //$contact = $request->only(['category_id','first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'detail', 'details', 'building']);


        return view('confirm', compact('contact'));
    }


    public function thanks(ContactRequest $request)
    {
        $contact = $request->all();


        // データベースに保存しようとするとエラー
        // 性別が悪さしている

        //Contact::create($contact);
        return view('thanks', compact('contact'));
    }







    // public function store(ContactRequest $request)
    // {
        // $contact = $request->only(['name', 'email', 'tel', 'content']);

        //データの保存処理のコード
        // Contact::create($contact);

        // return view('thanks');
    //}




}
