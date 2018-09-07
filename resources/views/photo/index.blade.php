@extends('layouts.common')

@section('title', 'Photo')

@section('content')
<h2>写真投稿機能</h2>
<a href="/photo/create">新規投稿</a>
<hr>
<p>投稿写真一覧</p>
<div class="text-center">
  @foreach($photos as $photo)
  <a href="/photo/{{ $photo['id'] }}">
    <img src="{{ $photo['image'] }}" class="photo">
  </a>
  @endforeach
</div>
<div>
  {{ $photos->links() }}
</div>
@endsection
