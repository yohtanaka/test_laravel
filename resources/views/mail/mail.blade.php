@extends('layouts.common')

@section('title', 'Post')

@section('content')
<h2>メールの送信機能</h2>
<p>下記のフォームより 必要項目を入力し 送信してください</p>
<form action="/mail/confirm" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <table>
    <tr>
      <td><input id="mailoff" type="radio" name="mailto" value="{{ env('USER_EMAIL') }}" checked>田中にメール</td>
      <td></td>
    </tr>
    <tr>
      <td><input id="mailon" type="radio" name="mailto">送信先アドレスを入力</td>
      <td id="mailto" class="table-content">
        <span class="error-message">{{ $errors->first('mailto') }}</span>
      </td>
    </tr>
  </table>
  <hr>
  <table>
    <tr>
      <td>あなたのメールアドレス</td>
      <td class="table-content">
        <input class="form-control" type="email" name="mailfrom">
      </td>
    </tr>
    <tr>
      <td>お名前</td>
      <td class="table-content">
        <input class="form-control" type="text" name="name" placeholder="必須">
        <span class="error-message">{{ $errors->first('name') }}</span>
      </td>
    </tr>
    <tr>
      <td>題名</td>
      <td class="table-content">
        <input class="form-control" type="text" name="subject" placeholder="必須">
        <span class="error-message">{{ $errors->first('subject') }}</span>
      </td>
    </tr>
    <tr>
      <td>メール本文</td>
      <td class="table-content">
        <textarea class="form-control" name="body" placeholder="必須"></textarea>
        <span class="error-message">{{ $errors->first('body') }}</span>
      </td>
    </tr>
  </table>
  <input type="submit" class="btn btn-laravel" value="確認画面へ">
  <input type="reset" class="btn btn-laravel" value="リセット">
</form>
@endsection
