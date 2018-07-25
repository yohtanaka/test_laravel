<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimerController extends Controller
{
  public function timer()
  {
    return view('timer.timer');
  }

  public function birthday(Request $request)
  {
    return view('timer.birthday');
  }
}
