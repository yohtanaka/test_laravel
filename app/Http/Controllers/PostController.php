<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    return view('post.index');
  }

  public function create()
  {
    return view('post.create');
  }

  public function confirm(Request $request)
  {
    $name = $_POST['name'];

    return view('post.confirm', compact('name'));
  }

  public function store(Request $request)
  {
    return view('post.store');
  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
}
