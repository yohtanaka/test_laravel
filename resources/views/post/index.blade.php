@extends('layouts.common')

@section('title', 'Post')

@section('content')
<h2>オススメのお店投稿機能</h2>
<a href="/post/create">新規投稿</a>
<table class="post-table">
  <tr>
    <th>名前</th>
    <th>カテゴリ</th>
    <th>オススメポイント</th>
    <th>10段階評価</th>
    <th>最近行った日</th>
  </tr>
  @foreach($stores as $store)
  <tr>
    <td>{{ $store['name'] }}</td>
    <td>{{ $categories[$store['category']] }}</td>
    <td>{{ $store['discription'] }}</td>
    <td>{{ $store['rating'] }}</td>
    <td>{{ $store['date'] }}</td>
  </tr>
  @endforeach
</table>
@endsection
