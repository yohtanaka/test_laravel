@extends('layouts.common')

@section('title', 'Photo')

@section('content')
<h2>写真投稿機能</h2>
<p>写真情報</p>
<img class="photo__large" src="{{ $photo['image'] }}">
<ul>
  @if ($photo['user_id'])
    <li>投稿者: {{ $photo->user['name'] }}</li>
  @endif
  @if ($photo['title'])
    <li>タイトル: {{ $photo['title'] }}</li>
  @endif
  @if ($photo['comment'])
    <li>コメント: {{ $photo['comment'] }}</li>
  @endif
</ul>
<hr>
<a href="/photo">投稿一覧にもどる</a>
@endsection
