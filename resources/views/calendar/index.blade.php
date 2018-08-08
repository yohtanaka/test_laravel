@extends('layouts.common')

@section('title', 'Calendar')

@section('content')
<h2>カレンダー機能</h2>
<table>
  <thead>
    <tr>
      <th><a href="">&laquo;</a></th>
      <th colspan="5">month 20**</th>
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
    <tr>
      <td class="week_0">1</td>
      <td class="week_1">2</td>
      <td class="week_2">3</td>
      <td class="week_3">4</td>
      <td class="week_4">5</td>
      <td class="week_5" class="week_6">6</td>
      <td class="week_6">7</td>
    </tr>
    <tr>
      <td class="week_0">30</td>
      <td class="week_1">31</td>
      <td class="gray">1</td>
      <td class="gray">2</td>
      <td class="gray">3</td>
      <td class="gray">4</td>
      <td class="gray">5</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th colspan="7"><a href="">Today</a></th>
    </tr>
  </tfoot>
</table>

@endsection
