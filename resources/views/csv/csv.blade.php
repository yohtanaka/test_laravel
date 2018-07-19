@extends('layouts.common')

@section('title', 'CSV')

@section('content')
<h2>CSV機能</h2>
<ul>
  <li>
  <form action="/csv/import" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <input type="file" name="csvFile">
    <input type="submit" name="" value="インポート">
  </form>
  </li>
  <li><a href="/csv/export">CSVファイルをエクスポート</a></li>
</ul>
@endsection
