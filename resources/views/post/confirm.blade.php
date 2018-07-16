@extends('layouts.common')

@section('title', 'Post')

@section('content')
<h2>オススメのお店投稿機能</h2>
<p>以下の通り 送信してよろしいですか？</p>
<form action="/post/store" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <input type="hidden" name ="name" value="{{ $data['name'] }}">
  <input type="hidden" name ="category" value="{{ $data['category'] }}">
  <input type="hidden" name ="discription" value="{{ $data['discription'] }}">
  <input type="hidden" name ="rating" value="{{ $data['rating'] }}">
  <input type="hidden" name ="date" value="{{ $data['date'] }}">
  <table>
    <tr>
      <td>お店の名前</td>
      <td class="table-content">{{ $data['name'] }}</td>
    </tr>
    <tr>
      <td>ジャンル</td>
      <td class="table-content">{{ $data['category'] }}</td>
    </tr>
    <tr>
      <td>オススメポイント</td>
      <td class="table-content">{{ $data['discription'] }}</td>
    </tr>
    <tr>
      <td>10段階評価</td>
      <td class="table-content">{{ $data['rating'] }}</td>
    </tr>
    <tr>
      <td>最近行った日</td>
      <td class="table-content">{{ $data['date'] }}</td>
    </tr>
  </table>
  <input type="submit" class="btn btn-laravel" value="投稿する">
  <a href="/post/create" class="btn btn-laravel" >戻る</a>
</form>
@endsection
