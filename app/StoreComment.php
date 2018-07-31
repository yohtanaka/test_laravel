<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreComment extends Model
{
  static $categories = ["食事", "デザート", "飲み", "テイクアウト", "その他"];
  static $rules      = [
    'name'        => 'required',
    'category'    => 'required',
    'description' => 'required',
    'rating'      => 'required',
  ];
}
