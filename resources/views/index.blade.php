@extends('layouts.common')

@section('title', 'Laravel')

@section('content')
<h2>機能のテスト実装</h2>
<ul>
  <li><a href="/mail">メールの送信機能</a></li>
  <li><a href="/post">コメント投稿機能</a></li>
  <li><a href="/photo">写真投稿機能</a></li>
  <li><a href="/csv">CSV機能</a></li>
  <li><a href="/slack">Slackにメッセージ送信機能</a></li>
  <li><a href="/twitter">Twitterにメッセージ送信機能</a></li>
  <li><a href="/birthday">同じ誕生日の有名人検索機能</a></li>
  <li><a href="/timer">カウントダウンタイマー機能</a></li>
  <li><a href="/calendar">カレンダー機能</a></li>
</ul>
@endsection
