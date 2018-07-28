@extends('layouts.common')

@section('title', 'Photo')

@section('content')
<h2>写真投稿機能</h2>
<a href="/photo/create">新規投稿</a>
<hr>
<p>投稿写真一覧</p>
<div class="photo__wrapper">
  @foreach($photos as $photo)
  <img src="{{ $photo['image'] }}" class="photo">
  @endforeach
</div>
@endsection
