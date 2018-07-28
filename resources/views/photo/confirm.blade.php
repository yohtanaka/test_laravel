@extends('layouts.common')

@section('title', 'Photo')

@section('content')
<h2>写真投稿機能</h2>
<p>投稿する写真はこちらでよろしいですか？</p>
@if ($hash['title'])
  タイトル: {{ $hash['title'] }}
@endif
<br>
@if ($hash['comment'])
  コメント: {{ $hash['comment'] }}
@endif
<br>
<img src="{{ $hash['image'] }}">
<br>
<br>
<form action="/photo/store" method="post" enctype="multipart/form-data" accept-charset="utf-8">
  {{ csrf_field() }}
  <input type="hidden" name="title" value="{{ $hash['title'] }}">
  <input type="hidden" name="comment" value="{{ $hash['comment'] }}">
  <input type="hidden" name="image" value="{{ $hash['image'] }}">
  <input type="submit" value="OK">
</form>

<a href="/photo">投稿一覧にもどる</a>
@endsection
