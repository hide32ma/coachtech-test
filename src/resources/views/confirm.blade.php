<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')




<div class="confirm-form__list">
    <div class="confirm-form__title">
        <h2>Confirm</h2>
    </div>


<form class="form" action="/thanks" method="post">

@csrf


    <table class="confirm-table">
        <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前
            </th>
                <td class="confirm-table-date">{{ $contact['first_name'] }} {{ $contact['last_name'] }}
                </td>
                    <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
        </tr>

        <tr class="table-row">
            <th class="table-header">性別
            </th>
                <td class="table-data">
                    @if ($contact['gender'] == 'male')
                    男性
                    @elseif ($contact['gender'] == 'female')
                    女性
                    @else
                    その他
                    @endif
                </td>



                <
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
        </tr>

        <tr class="table-row">
            <th class="table-header">メールアドレス
            </th>
                <td class="table-data">{{ $contact['email'] }}
                </td>
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
        </tr>

        <tr class="table-row">
            <th class="table-header">電話番号
            </th>
                <td class="table-data">{{ $contact['tel'] }}
                </td>
                    <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
        </tr>

        <tr class="table-row">
            <th class="table-header">住所
            </th>
                <td class="table-data">{{ $contact['address'] }}
                </td>
                <input type="hidden" name="address" value="{{ $contact['address'] }}">
        </tr>



        <tr class="table-row">
            <th class="table-header">建物名
            </th>
                <td class="table-data">{{ $contact['building'] }}
                </td>
                <input type="hidden" name="building" value="{{ $contact['building'] }}">
        </tr>



        <tr class="table-row">
            <th class="table-header">お問い合わせの種類
            </th>
                <td class="table-data">{{ $contact['details'] }}
                </td>
                
        </tr>



        <tr class="table-row">
            <th class="table-header">お問い合わせ内容
            </th>
                <td class="table-data">{{ $contact['detail'] }}</td>
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
        </tr>


    </table>

    <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
    </div>



</form>


</div>





@endsection




