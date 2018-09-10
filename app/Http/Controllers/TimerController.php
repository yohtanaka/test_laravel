<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DateRequest;

class TimerController extends Controller
{
  public function index()
  {
    $date = [
      'year'  => '2020',
      'month' => '07',
      'day'   => '24'
    ];
    return view('timer.index', compact('date'));
  }

  public function birthday(DateRequest $request)
  {
    $date = [
      'year'  => date('Y'),
      'month' => sprintf('%02d', $request->input('month')),
      'day'   => sprintf('%02d', $request->input('day'))
    ];
    $today    = date('Ymd');
    $birthday = $date['year'].$date['month'].$date['day'];
    if ( $birthday < $today ) {
      $date['year'] = intval($date['year']) +1;
    }
    return view('timer.birthday', compact('date'));
  }
}
