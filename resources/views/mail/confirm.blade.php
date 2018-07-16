@extends('layouts.common')

@section('title', 'Mail')

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
      <td class="table-content">{{ $data['mailto'] }}</td>
    </tr>
  </table>
  <hr>
  <table>
    <tr>
      <td>あなたのメールアドレス</td>
      <td class="table-content">{{ $data['mailfrom'] }}</td>
    </tr>
    <tr>
      <td>お名前</td>
      <td class="table-content">{{ $data['name'] }}</td>
    </tr>
    <tr>
      <td>題名</td>
      <td class="table-content">{{ $data['subject'] }}</td>
    </tr>
    <tr>
      <td>メール本文</td>
      <td class="table-content">{{ $data['body'] }}</td>
    </tr>
  </table>
  <input type="submit" class="btn btn-laravel" value="送信する">
  <a href="/mail" class="btn btn-laravel" >戻る</a>
</form>
@endsection
