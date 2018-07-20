<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlackController extends Controller
{
  public function slack(Request $request) {
    return view('slack.slack');
  }

  public function postMessage(Request $request) {
    $slackApiKey = 'xoxp-403549603110-403549603910-401681038289-9de1dc63996f64cb52618a273a35544c';
    $message = $_POST['message'];
    $name = $_POST['name']
    $text = urlencode($text);
    $url = "https://slack.com/api/chat.postMessage?token=${slackApiKey}&channel=%23post&text=${name}:${message}&as_user=true";
    file_get_contents($url);
    return view('slack.post');
  }
}
