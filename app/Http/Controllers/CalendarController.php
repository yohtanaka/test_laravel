<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DatePeriod;
use DateTime;
use DateInterval;
use Exception;


class CalendarController extends Controller
{
  public function index()
  {
    try {
      if (!isset($_GET['month']) || !preg_match('/\A\d{4}-\d{2}\z/', $_GET['month'])) {
        throw new Exception();
      }
      $thisMonth = new DateTime($_GET['month']);
    } catch (Exception $e) {
      $thisMonth = new DateTime('first day of this month');
    }

    $dt        = clone $thisMonth;
    $prev      = $dt->modify('-1 month')->format('Y-m');
    $dt        = clone $thisMonth;
    $next      = $dt->modify('+1 month')->format('Y-m');
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
    $today  = new DateTime('today');
    foreach ($period as $day) {
      if ($day->format('w') % 7 === 0) {
        $body .= '</tr><tr>';
      }
      $todayClass = ($day->format('Y-m-d') === $today->format('Y-m-d')) ? 'today' : '';
      $body      .= sprintf('<td class="week_%d %s">%d</td>', $day->format('w'), $todayClass, $day->format('d'));
    }

    $head                = '';
    $firstDayOfNextMonth = new DateTime('first day of' . $yearMonth . '+1 month');
    while ($firstDayOfNextMonth->format('w') > 0) {
      $head .= sprintf('<td class="gray">%d</td>', $firstDayOfNextMonth->format('d'));
      $firstDayOfNextMonth->add(new DateInterval('P1D'));
    }

    $days = '<tr>' . $tail . $body . $head . '</tr>';
    return view('calendar.index', compact('days', 'prev', 'yearMonth', 'next'));
  }
}
