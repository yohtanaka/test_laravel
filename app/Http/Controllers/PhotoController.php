<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
      return view('photo.index');
    }

    public function create()
    {
      return view('photo.create');
    }

    public function confirm(Request $request)
    {
      return view('photo.confirm');
    }

    public function store(Request $request)
    {
      return view('photo.store');
    }
}
