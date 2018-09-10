<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pref;

class SearchController extends Controller
{
	public function index() {
		$prefs = [];
		$data  = Pref::all();
		foreach ($data as $d) {
			$prefs[] = [
				$d['name'],
				$d['name_kana']
			];
		};
    	return view('search.index', compact('prefs'));
    }
}
