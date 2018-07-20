@extends('layouts.common')

@section('title', 'Post')

@section('content')
<h2>オススメのお店投稿機能</h2>
<p>下記のフォームより 必要項目を入力してださい</p>
<form action="/post/confirm" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <table>
    <tr>
      <td>オススメのお店の名前</td>
      <td class="table-content">
        <input class="form-control" type="text" name="name" placeholder="必須">
        <span class="error-message">{{ $errors->first('name') }}</span>
      </td>
    </tr>
    <tr>
      <td>ジャンルは？</td>
      <td class="table-content">
        <select name="category">
          <option value="0">食事</option>
          <option value="1">デザート</option>
          <option value="2">飲み</option>
          <option value="3">テイクアウト</option>
          <option value="4">その他</option>
        </select>
        <span class="error-message">{{ $errors->first('category') }}</span>
      </td>
    </tr>
    <tr>
      <td>オススメポイント</td>
      <td class="table-content">
        <textarea class="form-control" name="discription" placeholder="必須"></textarea>
        <span class="error-message">{{ $errors->first('discription') }}</span>
      </td>
    </tr>
    <tr>
      <td>10段階評価</td>
      <td class="table-content">
        <input class="form-control" type="number" max="10" min="0" name="rating" placeholder="必須">
        <span class="error-message">{{ $errors->first('rating') }}</span>
      </td>
    </tr>
    <tr>
      <td>最近行った日は？</td>
      <td class="table-content">
        <input class="form-control" type="date" name="date">
      </td>
    </tr>
  </table>
  <input type="submit" class="btn btn-laravel" value="投稿する">
  <input type="reset" class="btn btn-laravel" value="リセット">
</form>
@endsection
