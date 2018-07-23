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
    $birthday    = $request->input('month')."月".$request->input('day')."日";
    $html        = file_get_contents("https://ja.wikipedia.org/wiki/${birthday}");
    $doc         = phpQuery::newDocument($html);
    $celebrities = $doc["#誕生日"]->parent()->nextAll('ul')->find('li')->text();
    return view('birthday.search', compact('birthday', 'celebrities'));
  }
}
