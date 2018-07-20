@extends('layouts.common')

@section('title', 'Slack')

@section('content')
<h2>Slackにメッセージ送信機能</h2>
<form action="/slack/post" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <table>
    <tr>
      <td>あなたのお名前</td>
      <td class="table-content">
        <input class="form-control" type="text" name="name" placeholder="必須">
        <span class="error-message">{{ $errors->first('name') }}</span>
      </td>
    </tr>
    <tr>
      <td>メッセージ</td>
      <td class="table-content">
        <textarea class="form-control" name="message" placeholder="必須"></textarea>
        <span class="error-message">{{ $errors->first('message') }}</span>
      </td>
    </tr>
  </table>
  <input type="submit" class="btn btn-laravel" value="投稿する">
  <input type="reset" class="btn btn-laravel" value="リセット">
</form>
@endsection
