@extends('layouts.common')

@section('title', 'CSV')

@section('content')
<h2>CSV機能</h2>
<ul>
  <li>SCVファイルインポート</li>
  <form action="/csv/import" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <label for="csvFile">
      <p class="btn btn-laravel">インポートするファイルを選択</p>
      <input type="file" id="csvFile" class="file" name="csvFile">
    </label>
    <input class="btn btn-laravel" type="submit" value="インポートし表示">
    <div id="filename"></div>
  </form>
  <hr>
  <li>CSVファイルエクスポート</li>
  <a class="btn btn-laravel" href="/csv/export">オススメのお店情報をCSVファイルとしてエクスポート</a>
</ul>
@endsection
