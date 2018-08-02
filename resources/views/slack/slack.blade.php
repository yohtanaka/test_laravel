@extends('layouts.common')

@section('title', 'Slack')

@section('content')
<h2>Slackにメッセージ送信機能</h2>
<p>Enterで送信できます！改行はEnter+Shift</p>
<hr>
<ul id="slack">
  <li>workspace: チャンネルに通知を送信</li>
  <form id="slackform1" action="/slack" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <table>
      <tr>
        <td>投稿者</td>
        <td class="table-content">
          <select name="user">
            <option value=""></option>
            <option value="1">yohei_tanaka</option>
            <option value="">API Tester</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>チャンネル</td>
        <td class="table-content">
          <select name="channel">
            <option value=""></option>
            <option value="general">general</option>
            <option value="random">random</option>
            <option value="post">post</option>
            <option value="test">test</option>
          </select>
        </td>
      </tr>
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
          <textarea id="slacktext2" class="form-control" name="message" placeholder="必須"></textarea>
          <span class="error-message">{{ $errors->first('message') }}</span>
        </td>
      </tr>
    </table>
    <input type="submit" class="btn btn-laravel" value="投稿する">
    <input type="reset" class="btn btn-laravel" value="リセット">
  </form>
</ul>
@endsection
