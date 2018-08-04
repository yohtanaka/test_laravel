<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
  public function index()
  {
    return view('mail.index');
  }

  public function confirm(Request $request)
  {
    $rules = [
      'name'    => 'required',
      'mailto'  => 'required',
      'subject' => 'required',
      'body'    => 'required',
    ];
    $this->validate($request, $rules);

    $data = $request->all();
    $request->session()->put($data);
    return view('mail.confirm', compact('data'));
  }

  public function sent(Request $request)
  {
    $data = session()->all();
    Mail::send(['text' => 'mail.temp'], $data, function($message) use($data){ $message->to($data['mailto'])->subject($data['subject']); });
    return view('mail.sent');
  }
}
