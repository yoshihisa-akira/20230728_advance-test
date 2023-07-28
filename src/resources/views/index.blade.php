@extends('layouts.app')

@section('title')
お問い合わせ
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="inquiry">
    <div class="inquiry__content">
        <h2 class="inquiry__title">
            お問い合わせ
        </h2>
        <form action="" class="inquiry__form">
            <div class="inquiry__form__group">
                <div class="inquiry__form__title">
                    <span class="form__title-text">
                        お名前
                    </span>
                    <span class="form__title-text--required">
                        ※
                    </span>
                </div>
                <div class="inquiry__form__item">
                    <div class="form__fullName--flex">
                        <input class="familyName" type="text" name="">
                        <input class="givenName" type="text" name="">
                    </div>
                    <!-- 
                    <span class="form-error--familyName">
                        苗字バリデーション
                    </span>
                    <span class="form-error--givenName">
                        名前バリデーション
                    </span>
                    -->
                    <div class="nameExample">
                        <span class="familyName-example-text">例）山田</span>
                        <span class="givenName-example-text">例）太郎</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection