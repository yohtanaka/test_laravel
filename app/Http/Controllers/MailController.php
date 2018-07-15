<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
  public function index()
  {
    return view('mail.index');
  }

  public function confirm(Request $request)
  {
    return view('mail.confirm');
  }

  public function send(Request $request)
  {
    return view('mail.send');
  }
}
