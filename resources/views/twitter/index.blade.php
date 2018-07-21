@extends('layouts.common')

@section('title', 'Twitter')

@section('content')
<h2>Twitterにメッセージ送信機能</h2>
<ul>
  <li><a href="/twitter/create">ツイートを新規投稿</a></li>
  <hr>
  <li>タイムラインに表示されている直近20ツイート</li>
  <a class="btn btn-laravel" href="/twitter">リロード</a>
  <div class="post-table">
    @foreach ($contents as $content)
      <div class="tweet">
        @if ($content->user->name != null && $content->text != null)
          <strong>{{ $content->user->name }}さんの投稿</strong>
          <p>{{ $content->text }}</p>
        @endif
      </div>
    @endforeach
  </div>
</ul>
<a href="/twitter">tweetトップにもどる</a>
@endsection
