<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class PostController extends Controller
{
  public function index()
  {
    $stores = Store::latest()->get();
    $categories = ["食事", "デザート", "飲み", "テイクアウト", "その他"];
    return view('post.index', compact('stores', 'categories'));
  }

  public function create()
  {
    return view('post.create');
  }

  public function confirm(Request $request)
  {
    $rules = [
      'name'        => 'required',
      'category'    => 'required',
      'description' => 'required',
      'rating'      => 'required',
    ];
    $this->validate($request, $rules);

    $data = $request->all();
    $categories = ["食事", "デザート", "飲み", "テイクアウト", "その他"];
    $request->session()->put($data);
    return view('post.confirm', compact('data', 'categories'));
  }

  public function store(Request $request)
  {
    $store = new Store();
    $store->name        = $request->input('name');
    $store->category    = $request->input('category');
    $store->description = $request->input('description');
    $store->rating      = $request->input('rating');
    $store->date        = $request->input('date');
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
