@extends('layouts.common')

@section('title', 'Calendar')

@section('content')
<h2>カレンダー機能</h2>
<table class="post-table calendar">
  <thead>
    <tr>
      <th><a href="">&laquo;</a></th>
      <th colspan="5">{{ $yearMonth }}</th>
      <th><a href="">&raquo;</a></th>
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
      <th colspan="7"><a href="">Today</a></th>
    </tr>
  </tfoot>
</table>

@endsection
