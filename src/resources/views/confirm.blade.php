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


    <div class="confirm-table"></div>
        <div class="confirm-table__row">
            <div class="confirm-table__header-name">お名前
            </div>
        </div>
                <div class="confirm-table-date-name">{{ $contact['first_name'] }} {{ $contact['last_name'] }}
                </div>
                    <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">

                    <div class="name-border-bottom"></div>
        </div>
        
    <div class="confirm-table-gender"></div>
        <div class="gender-table-row">
            <div class="gender-table-header">性別</div>
        </dev>
                <div class="gender-table-data">
                    @if ($contact['gender'] == 'male')
                    男性
                    @elseif ($contact['gender'] == 'female')
                    女性
                    @else
                    その他
                    @endif
                </div>



                
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
        </div>

    <div class="confirm-table-email"></div>
        <div class="email-table-row">
            <div class="email-table-header">メールアドレス
            </div>
                <div class="email-table-data">{{ $contact['email'] }}
                </div>
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
        </div>

    <div class="confirm-table-tel"></div>
        <div class="tel-table-row">
            <div class="tel-table-header">電話番号
            </div>
                <div class="tel-table-data">{{ $contact['tel'] }}
                </div>
                    <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
        </div>

    <div class="confirm-table-address"></div>
        <div class="address-table-row">
            <div class="address-table-header">住所
            </div>
                <div class="address-table-data">{{ $contact['address'] }}
                </div>
                <input type="hidden" name="address" value="{{ $contact['address'] }}">
        </div>


    <div class="confirm-table-building"></div>
        <div class="building-table-row">
            <div class="building-table-header">建物名
            </div>
                <div class="building-table-data">{{ $contact['building'] }}
                </div>
                <input type="hidden" name="building" value="{{ $contact['building'] }}">
        </div>


    <div class="confirm-table-details"></div>
        <div class="details-table-row">
            <div class="details-table-header">お問い合わせの種類
            </div>
                <div class="details-table-data">{{ $contact['details'] }}
                </div>
                
        </div>


    <div class="confirm-table-detail"></div>
        <div class="detail-table-row">
            <div class="detail-table-header">お問い合わせ内容
            </div>
                <div class="detail-table-data">{{ $contact['detail'] }}</div>
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
        </div>


    

    <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
    </div>



    </form>

    
        <a class="form__button-return-set" href="javascript:history.back()">修正</a>
    


</div>





@endsection




