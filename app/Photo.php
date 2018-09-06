<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = [
    'user_id', 'image', 'title', 'comment'
  ];

  public function rules()
  {
    return ['image' => 'required|image',];
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
