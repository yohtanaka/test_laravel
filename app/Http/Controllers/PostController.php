<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreComment;

class PostController extends Controller
{
  public function index()
  {
    $stores     = StoreComment::latest()->get();
    $categories = StoreComment::$categories;
    return view('post.index', compact('stores', 'categories'));
  }

  public function create()
  {
    return view('post.create');
  }

  public function confirm(Request $request)
  {
    $this->validate($request, StoreComment::$rules);
    $data       = $request->all();
    $categories = StoreComment::$categories;
    $request->session()->put($data);
    return view('post.confirm', compact('data', 'categories'));
  }

  public function store(Request $request)
  {
    $store = new StoreComment();
    $store->name        = $request->input('name');
    $store->category    = $request->input('category');
    $store->description = $request->input('description');
    $store->rating      = $request->input('rating');
    $store->date        = $request->input('date');
    if (\Auth::user()) {
      $store->user_id = \Auth::user()->id;
    }
    $store->save();
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
