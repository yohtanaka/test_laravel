@extends('layouts.common')

@section('title', 'Timer')

@section('content')
<div id="year" data-date="{{ $date['year'] }}"></div>
<div id="month" data-date="{{ $date['month'] }}"></div>
<div id="day" data-date="{{ $date['day'] }}"></div>
<h2>カウントダウンタイマー機能</h2>
<p>
  東京オリンピックの開催日は
    <strong>
      {{ $date['year'] . '年' . $date['month'] . '月' . $date['day'] . '日' }}
    </strong>
  です！
</p>
<p id="timertext">オリンピックまでの時間は・・・</p>
<div id="timer" class="post-table post-table__short"></div>
<hr>
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
