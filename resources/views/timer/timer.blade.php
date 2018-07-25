@extends('layouts.common')

@section('title', 'Timer')

@section('content')
<h2>カウントダウンタイマー機能</h2>
<p>あなたの誕生日までの時間をカウントします</p>
<p>誕生日を入力してください</p>
<form action="/timer/birthday" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <div class="post-table" style="width: 190px;">
    <input type="number" name="month" min="1" max="12"> 月
    <input type="number" name="day" min="1" max="31"> 日
  </div>
  <div>
    <span class="error-message">{{ $errors->first('month') }}</span>
    <span class="error-message">{{ $errors->first('day') }}</span>
  </div>
  <input class="btn btn-laravel" type="submit" value="送信">
  <input class="btn btn-laravel" type="reset" value="リセット">
</form>
@endsection
