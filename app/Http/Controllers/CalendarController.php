<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DatePeriod;
use DateTime;
use DateInterval;


class CalendarController extends Controller
{
  public function index()
  {
    $body = '';
    $period = new DatePeriod(
      new DateTime('first day of this month'),
      new DateInterval('P1D'),
      new DateTime('first day of next month')
    );
    foreach ($period as $day) {
      if ($day->format('w') % 7 === 0) {
        $body .= '</tr><tr>';
      }
      $body .= sprintf('<td class="week_%d">%d</td>', $day->format('w'), $day->format('d'));
    }
    return view('calendar.index', compact('body'));
  }
}
