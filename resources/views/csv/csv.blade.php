@extends('layouts.common')

@section('title', 'CSV')

@section('content')
<h2>CSV機能</h2>
<ul>
  <li><a href="/csv/import">CSVファイルをインポート</a></li>
  <li><a href="/csv/export">CSVファイルをエクスポート</a></li>
</ul>
@endsection
