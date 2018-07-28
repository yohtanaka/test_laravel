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
  <input class="btn btn-laravel" type="submit" value="確認画面へ">
  <div id="filename"></div>
</form>
<a href="/photo">投稿一覧にもどる</a>
@endsection
