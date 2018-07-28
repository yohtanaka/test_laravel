@extends('layouts.common')

@section('title', 'Photo')

@section('content')
<h2>写真投稿機能</h2>
<p>写真を選択</p>
<form action="/photo/confirm" method="post" enctype="multipart/form-data" accept-charset="utf-8">
  {{ csrf_field() }}
  <label for="imageFile">
    <p class="btn btn-laravel">投稿する写真を選択</p>
    <input type="file" id="imageFile" class="file" name="photo">
  </label>
  <div id="filename"></div>
  <div id="fileimage"></div>
  <div id="title"></div>
  <div id="comment"></div>
  <div id="send"></div>
</form>
<a href="/photo">投稿一覧にもどる</a>
@endsection
