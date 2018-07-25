<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;

class TimerController extends Controller
{
  public function timer()
  {
    $date = [
      'year'  => '2020',
      'month' => '7',
      'day'   => '24'
    ];
    return view('timer.timer', compact('date'));
  }

  public function birthday(Request $request)
  {
    $this->validate($request, Date::$rules);
    $date = [
      'year'  => date('Y'),
      'month' => sprintf('%02d', $request->input('month')),
      'day'   => sprintf('%02d', $request->input('day'))
    ];
    $today = date('Ymd');
    $birthday = $date['year'].$date['month'].$date['day'];
    if ( $birthday < $today ) {
      $date['year'] = intval($date['year']) +1;
    }
    return view('timer.birthday', compact('date'));
  }
}
