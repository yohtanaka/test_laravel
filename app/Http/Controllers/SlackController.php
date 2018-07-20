<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlackController extends Controller
{
  public function slack(Request $request)
  {
    return view('slack.slack');
  }

  public function postMessage(Request $request)
  {
    $rules = [
      'name'    => 'required',
      'message' => 'required',
    ];
    $this->validate($request, $rules);

    $slackApiKey = env('SLACK_API_KEY');
    $name        = $request->input('name');
    $message     = $request->input('message');
    $text        = urlencode($name.': '.$message);
    $url         = "https://slack.com/api/chat.postMessage?token=${slackApiKey}&channel=%23post&text=${text}";
    file_get_contents($url);
    return view('slack.post');
  }
}
