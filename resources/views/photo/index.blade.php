@extends('layouts.common')

@section('title', 'Photo')

@section('content')
<h2>写真投稿機能</h2>
<a href="/photo/create">新規投稿</a>
<hr>
<p>投稿写真一覧</p>
@foreach($photos as $photo)
{{ $photo['title'] }}
<br>
{{ $photo['comment'] }}
<br>
<img src="{{ $photo['image'] }}">
<br>
@endforeach
@endsection
