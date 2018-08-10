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
    $t         = '2015-09';
    $thisMonth = new DateTime($t);
    $yearMonth = $thisMonth->format('F Y');

    $tail   = '';
    $lastDayOfPreviousMonth = new DateTime('last day of' . $yearMonth . '-1 month');
    while ($lastDayOfPreviousMonth->format('w') < 6) {
      $tail = sprintf('<td class="gray">%d</td>', $lastDayOfPreviousMonth->format('d')) . $tail;
      $lastDayOfPreviousMonth->sub(new DateInterval('P1D'));
    }

    $body   = '';
    $period = new DatePeriod(
      new DateTime('first day of' . $yearMonth),
      new DateInterval('P1D'),
      new DateTime('first day of' . $yearMonth . '+1 month')
    );
    foreach ($period as $day) {
      if ($day->format('w') % 7 === 0) {
        $body .= '</tr><tr>';
      }
      $body .= sprintf('<td class="week_%d">%d</td>', $day->format('w'), $day->format('d'));
    }

    $head                = '';
    $firstDayOfNextMonth = new DateTime('first day of' . $yearMonth . '+1 month');
    while ($firstDayOfNextMonth->format('w') > 0) {
      $head .= sprintf('<td class="gray">%d</td>', $firstDayOfNextMonth->format('d'));
      $firstDayOfNextMonth->add(new DateInterval('P1D'));
    }

    $days = '<tr>' . $tail . $body . $head . '</tr>';
    return view('calendar.index', compact('days', 'yearMonth'));
  }
}
