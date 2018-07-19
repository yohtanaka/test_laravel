@extends('layouts.common')

@section('title', 'CSV')

@section('content')
<h2>CSV機能</h2>
<p>CSVファイルのインポートが完了しました</p>
<div class="post-table">
  <br>
  @foreach($records as $stores)
    @foreach($stores as $store)
    {{ $store }}
    @endforeach
    <br>
  @endforeach
</div>
<br>
<a href="/csv">CSV機能トップに戻る</a>
@endsection
