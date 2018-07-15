@extends('layouts.common')

@section('title', 'Post')

@section('content')
<h2>メールの送信機能</h2>
<p>下記のフォームより 必要項目を入力し 送信してください</p>
<form action="/mail/confirm" method="get" accept-charset="utf-8">
  <table>
    <tr>
      <td>お名前</td>
      <td><input type="text" name="name" placeholder="必須"></td>
    </tr>
    <tr>
      <td>あなたのメールアドレス</td>
      <td><input type="email" name="mailfrom" placeholder="必須"></td>
    </tr>
    <tr>
      <td>送信先メールアドレス</td>
      <td><input type="email" name="mailto" placeholder="必須"></td>
    </tr>
    <tr>
      <td>メール本文</td>
      <td><input type="textarea" name="body" placeholder="必須"></td>
    </tr>
  </table>
  <input type="submit" class="btn btn-laravel" value="送信する">
  <input type="reset" class="btn btn-laravel" value="リセット">
</form>
@endsection
