@extends('layouts.common')

@section('title', 'Post')

@section('content')
<h2>オススメのお店投稿機能</h2>
<ul>
  <li><a href="/post/create">新規投稿</a></li>
  <hr>
  <li>投稿一覧</li>
</ul>
<table class="post-table line_laravel">
  <tr>
    <th>名前</th>
    <th>カテゴリ</th>
    <th>投稿者</th>
    <th>オススメポイント</th>
    <th>10段階評価</th>
    <th>最近行った日</th>
  </tr>
  @foreach($stores as $store)
  <tr>
    <td>{{ $store['name'] }}</td>
    <td>{{ $categories[$store['category']] }}</td>
    <td>{{ $store->user['name'] }}</td>
    <td>{{ $store['description'] }}</td>
    <td>{{ $store['rating'] }}</td>
    <td>{{ $store['date'] }}</td>
  </tr>
  @endforeach
</table>
@endsection
