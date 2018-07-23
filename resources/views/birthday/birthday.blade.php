@extends('layouts.common')

@section('title', 'Birthday')

@section('content')
<h2>同じ誕生日の有名人検索機能</h2>
<p>誕生日を入力してください</p>
<form action="/birthday/search" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <div class="post-table" style="width: 190px;">
    <input type="number" name="month" min="1" max="12"> 月
    <input type="number" name="day" min="1" max="31"> 日 生まれ
  </div>
  <input class="btn btn-laravel" type="submit" value="送信">
  <input class="btn btn-laravel" type="reset" value="リセット">
</form>
@endsection
