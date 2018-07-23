<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpQuery;

class BirthdayController extends Controller
{
  public function birthday()
  {
    return view('birthday.birthday');
  }

  public function search(Request $request)
  {
    return view('birthday.search');
  }
}
