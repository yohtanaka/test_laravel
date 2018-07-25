@extends('layouts.common')

@section('title', 'Timer')

@section('content')
<div id="year" data-date="{{ $date['year'] }}"></div>
<div id="month" data-date="{{ $date['month'] }}"></div>
<div id="day" data-date="{{ $date['day'] }}"></div>
<div id="bd" data-id="happyBirthday"></div>
<h2>カウントダウンタイマー機能</h2>
<p>
  あなたの次の誕生日は
  <strong>
    {{ $date['year'] . '年' . $date['month'] . '月' . $date['day'] . '日' }}
  </strong>
  ですね？
</p>
<p id="timertext">あなたの誕生日までの時間は・・・</p>
<div id="timer" class="post-table" style="width: 400px;"></div>
<br>
<a href="/timer">オリンピックまでのタイマーにもどる</a>
@endsection
