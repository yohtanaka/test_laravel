@extends('layouts.common')

@section('title', 'Photo')

@section('content')
<h2>写真投稿機能</h2>
<p>写真情報</p>
<img src="{{ $photo['image'] }}">
<ul>
  @if ($photo['title'])
    <li>タイトル: {{ $photo['title'] }}</li>
  @endif
  @if ($photo['comment'])
    <li>コメント: {{ $photo['comment'] }}</li>
  @endif
</ul>
<a href="/photo">投稿一覧にもどる</a>
@endsection
