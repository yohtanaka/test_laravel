<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
      return view('photo.create');
    }

    public function confirm(Request $request)
    {
      $image_name = uniqid("image_") . "." . $request->file('photo')->guessExtension();
      $request->file('photo')->move(public_path() . "/images/tmp", $image_name);
      $hash = array(
        'image'   => "/images/tmp/".$image_name,
        'title'   => $request->title,
        'comment' => $request->comment,
      );
      return view('photo.confirm', compact('hash'));
    }

    public function store(Request $request)
    {
    }
}
