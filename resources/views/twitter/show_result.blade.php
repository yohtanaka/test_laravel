@extends('layouts.common')

@section('title', 'Twitter')

@section('content')
<h2>Twitterにメッセージ送信機能</h2>
<ul>
  <li>検索結果</li>
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
<a href="/twitter/search">検索画面にもどる</a>
@endsection
