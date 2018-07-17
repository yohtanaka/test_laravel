<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class CsvController extends Controller
{
  public function csv()
  {
    return view('csv.csv');
  }

  public function import()
  {
    return view('csv.import');
  }

  public function export()
  {
    return view('csv.export');
  }
}
