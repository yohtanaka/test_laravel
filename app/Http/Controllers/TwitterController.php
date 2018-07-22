<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
  public function index()
  {
    $tck = env("TWITTER_CONSUMER_KEY");
    $tcs = env("TWITTER_CONSUMER_SECRET");
    $tat = env("TWITTER_ACCESS_TOKEN");
    $tac = env("TWITTER_ACCESS_TOKEN_SECRET");

    $connection = new TwitterOAuth($tck, $tcs, $tat, $tac);
    $contents = $connection->get(
      "statuses/home_timeline",
      array("count" => 20)
    );
    return view('twitter.index', compact('contents'));
  }

  public function create()
  {
    return view('twitter.create');
  }

  public function store(Request $request)
  {
    $result =  $connection->post(

    );
  }
}
