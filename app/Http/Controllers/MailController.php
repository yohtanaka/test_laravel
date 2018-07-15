<?php

namespace App\Http\Controllers;

use Mail;
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

  public function sent(Request $request)
  {
    $data=[];
    Mail::send(['text' => 'mail.temp'], $data, function($message){ $message->to(env('USER_EMAIL'))->subject("テスト送信"); });
    return view('mail.sent');
  }
}
