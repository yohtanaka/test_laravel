@extends('layouts.common')

@section('title', 'Calendar')

@section('content')
<h2>カレンダー機能</h2>
<form class="center shortest" action="/calendar" method="get" accept-charset="utf-8">
  <input class="form-control" type="month" name="month">
  <input class="btn btn-laravel" type="submit" value="送信する">
</form>
<table class="post-table calendar">
  <thead>
    <tr>
      <th><a href="/calendar/?month={{ $prev }}">&laquo;</a></th>
      <th colspan="5">{{ $yearMonth }}</th>
      <th><a href="/calendar/?month={{ $next }}">&raquo;</a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sun</td>
      <td>Mon</td>
      <td>Tue</td>
      <td>Wed</td>
      <td>Thu</td>
      <td>Fri</td>
      <td>Sat</td>
    </tr>
    {!! $days !!}
  </tbody>
  <tfoot>
    <tr>
      <th colspan="7"><a href="/calendar">Today</a></th>
    </tr>
  </tfoot>
</table>
@endsection
