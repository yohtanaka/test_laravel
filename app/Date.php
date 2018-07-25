<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
  static $rules = [
    'month' => 'required',
    'day'   => 'required',
  ];
}
