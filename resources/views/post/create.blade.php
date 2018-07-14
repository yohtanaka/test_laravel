@extends('layouts.common')

@section('title', 'Post')

@section('content')
<form action="/post/confirm" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <table>
    <thead>
      <tr>
        <th>項目</th>
        <th></th>
        <th>入力</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>好きなアイス</td>
        <td>what do you love?</td>
        <td><input type="text" name="name"></td></td>
      </tr>
      <tr>
        <td>なぜ好きか</td>
        <td>why do you love it?</td>
        <td><input type="textarea" name="discription"></td>
      </tr>
      <tr>
        <td>どのくらい好きか</td>
        <td>how much do you love it?</td>
        <td><input type="number" name="percentage"> %</td>
      </tr>
      <tr>
        <td>いつ食べた？</td>
        <td>when did you have it?</td>
        <td><input type="date" name="date"></td>
      </tr>
      <tr>
        <td>どの種類？</td>
        <td>which category does it belong to?</td>
        <td>
          <select name="category">
            <option value="0">氷菓</option>
            <option value="1">アイスクリーム</option>
            <option value="2">アイスミルク</option>
            <option value="3">ラクトアイス</option>
            <option value="4">シャーベット</option>
          </select>
        </td>
      </tr>
    </tbody>
  </table>
  <input type="submit" value="投稿する">
</form>
@endsection
