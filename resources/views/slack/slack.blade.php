@extends('layouts.common')

@section('title', 'Slack')

@section('content')
<h2>Slackにメッセージ送信機能</h2>
<ul>
  <li>workspace: postチャンネルに通知を送信</li>
  <form action="/slack" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <table>
      <tr>
        <td>通知範囲</td>
        <td class="table-content">
          <select name="mention">
            <option value=""></option>
            <option value="<!here>">アクティブなメンバー</option>
            <option value="<!channel>">すべてのメンバー</option>
          </select>
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
  <hr>
  <li>yohei_tanakaとしてコメント送信</li>
  <form action="/slack" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <table>
      <tr>
        <td>メッセージ</td>
        <td class="table-content">
          <textarea class="form-control" name="message" placeholder="必須"></textarea>
          <span class="error-message">{{ $errors->first('message') }}</span>
        </td>
      </tr>
    </table>
    <input type="hidden" name="user" value="1">
    <input type="submit" class="btn btn-laravel" value="投稿する">
    <input type="reset" class="btn btn-laravel" value="リセット">
  </form>
</ul>
@endsection
