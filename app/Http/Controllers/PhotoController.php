<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function index()
    {
      $photos = Photo::latest()->paginate(9);
      return view('photo.index', compact('photos'));
    }

    public function show($id)
    {
      $photo = Photo::find($id);
      return view('photo.show', compact('photo'));
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
      $photo          = new Photo;
      $photo->title   = $request->title;
      $photo->comment = $request->comment;
      if (\Auth::user()) {
        $photo->user_id = \Auth::user()->id;
      }
      $photo->save();

      $lastInsertedId = $photo->id;

      if (!file_exists(public_path() . "/images/" . $lastInsertedId)) {
      mkdir(public_path() . "/images/" . $lastInsertedId, 0777);
      }
      $image_path = "/images/" . $lastInsertedId . "/image." . pathinfo($request->image, PATHINFO_EXTENSION);
      rename(public_path() . $request->image, public_path() . $image_path);

      $photo->image = $image_path;
      $photo->update();
      return view('photo.store');
    }
}
