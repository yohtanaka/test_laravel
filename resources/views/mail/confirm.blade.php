@extends('layouts.common')

@section('title', 'Post')

@section('content')
<h2>メールの送信機能</h2>
<p>以下の通り 送信してよろしいですか？</p>
<form action="/mail/sent" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <input type="hidden" value="{{ $data['mailto'] }}">
  <input type="hidden" value="{{ $data['mailfrom'] }}">
  <input type="hidden" value="{{ $data['name'] }}">
  <input type="hidden" value="{{ $data['subject'] }}">
  <input type="hidden" value="{{ $data['body'] }}">
  <table>
    <tr>
      <td>送信先メールアドレス</td>
      <td>{{ $data['mailto'] }}</td>
    </tr>
  </table>
  <hr>
  <table>
    <tr>
      <td>あなたのメールアドレス</td>
      <td>{{ $data['mailfrom'] }}</td>
    </tr>
    <tr>
      <td>お名前</td>
      <td>{{ $data['name'] }}</td>
    </tr>
    <tr>
      <td>題名</td>
      <td>{{ $data['subject'] }}</td>
    </tr>
    <tr>
      <td>メール本文</td>
      <td>{{ $data['body'] }}</td>
    </tr>
  </table>
  <input type="submit" class="btn btn-laravel" value="送信する">
@endsection
