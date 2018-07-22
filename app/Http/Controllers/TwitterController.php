<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
  public function index()
  {
    $connection = new TwitterOAuth(
      env("TWITTER_CONSUMER_KEY"),
      env("TWITTER_CONSUMER_SECRET"),
      env("TWITTER_ACCESS_TOKEN"),
      env("TWITTER_ACCESS_TOKEN_SECRET")
    );
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
    $connection = new TwitterOAuth(
      env("TWITTER_CONSUMER_KEY"),
      env("TWITTER_CONSUMER_SECRET"),
      env("TWITTER_ACCESS_TOKEN"),
      env("TWITTER_ACCESS_TOKEN_SECRET")
    );
    $result =  $connection->post(
      "statuses/update",
      array("status" => $request->input('body'))
    );

    if($connection->getLastHttpCode() == 200) {
      return view('twitter.store');
    } else {
      return view('twitter.create');
    }
  }

  public function search()
  {
    return view('twitter.search');
  }

  public function showResult(Request $request)
  {
    $connection = new TwitterOAuth(
      env("TWITTER_CONSUMER_KEY"),
      env("TWITTER_CONSUMER_SECRET"),
      env("TWITTER_ACCESS_TOKEN"),
      env("TWITTER_ACCESS_TOKEN_SECRET")
    );

    $result = $connection->get(
      "search/tweets",
      array("q" => $request->input('search'))
    );
    $contents = $result->statuses;
    return view('twitter.show_result', compact('contents'));
  }
}
