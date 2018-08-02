<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlackController extends Controller
{
  public function slack()
  {
    return view('slack.slack');
  }

  public function post(Request $request)
  {
    $rules = [
      'message' => 'required',
    ];
    $this->validate($request, $rules);

    $slackApiKey = env('SLACK_API_KEY');
    $channel     = $request->input('channel');
    $mention     = $request->input('mention');
    $message     = $request->input('message');
    $text        = urlencode($mention.$message);
    if ($request->input('user') == "1"){
      $user      = "&as_user=true";
    } else {
      $user      = "";
    }
    $url         = "https://slack.com/api/chat.postMessage?token=${slackApiKey}&channel=%23${channel}&text=${text}${user}";
    file_get_contents($url);
    return view('slack.slack');
  }
}
