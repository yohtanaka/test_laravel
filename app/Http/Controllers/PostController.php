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
      'discription' => 'required',
      'rating'      => 'required',
    ];
    $this->validate($request, $rules);

    $data = $request->all();
    $request->session()->put($data);
    return view('post.confirm', compact('data'));
  }

  public function store(Request $request)
  {
    $store = new Store();
    $store->name        = $request->input('name');
    $store->category    = $request->input('category');
    $store->discription = $request->input('discription');
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
