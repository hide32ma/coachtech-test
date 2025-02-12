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

    <table class="confirm-table">
        <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前
            </th>
                <td class="confirm-table-date">{{ $contact['first_name'] }} {{ $contact['last_name'] }}
                </td>
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
        </tr>
        <tr class="table-row">
            <th class="table-header">メールアドレス
            </th>
                <td class="table-data">{{ $contact['email'] }}
                </td>
        </tr>
        <tr class="table-row">
            <th class="table-header">電話番号
            </th>
                <td class="table-data">{{ $contact['tel'] }}
                </td>
        </tr>
        <tr class="table-row">
            <th class="table-header">住所
            </th>
                <td class="table-data">{{ $contact['address'] }}
                </td>
        </tr>



        <tr class="table-row">
            <th class="table-header">建物名
            </th>
                <td class="table-data">{{ $contact['building'] }}
                </td>
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
        </tr>




    </table>

</div>





@endsection




