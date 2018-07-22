@extends('layouts.common')

@section('title', 'Twitter')

@section('content')
<h2>Twitterにメッセージ送信機能</h2>
<p>下記のフォームより 必要項目を入力してださい</p>
<form action="/twitter/store" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <table>
    <tr>
      <td>投稿内容</td>
      <td class="table-content">
        <textarea class="form-control" name="body" placeholder="必須"></textarea>
        <span class="error-message">{{ $errors->first('body') }}</span>
      </td>
    </tr>
  </table>
  <input type="submit" class="btn btn-laravel" value="投稿する">
  <input type="reset" class="btn btn-laravel" value="リセット">
</form>
@endsection
