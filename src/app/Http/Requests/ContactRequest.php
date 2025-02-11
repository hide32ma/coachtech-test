<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    

    //  バリデーション設定
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required',
            'email' => 'required|email',
            'tel' => 'required|numeric',
            'address' => 'required',
            'detail' => 'required|max120',
        ];
    }

    // バリデーションのエラー文
    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',

            // 電話番号5桁に出来ていない
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',

            // お問い合わせの種類　出来ていない

            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max120' => 'お問合せ内容は120文字以内で入力してください',

        ];
    }

}
