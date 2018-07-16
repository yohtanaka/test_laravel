@extends('layouts.common')

@section('title', 'Laravel')

@section('content')
<h2>機能のテスト実装</h2>
<ul>
  <li><a href="/mail">メールの送信機能</a></li>
  <li><a href="/post">投稿機能 (DBへの保存)</a></li>
  <li><a href="/csv">CSV機能</a></li>
</ul>
@endsection
