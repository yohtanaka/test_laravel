@extends('layouts.common')

@section('title', 'Quiz')

@section('content')
<h2>クイズ機能</h2>
<div id="container">
  <h3>Q. What is A?</h3>
  <ul>
    <li class="answer">A0</li>
    <li class="answer">A1</li>
    <li class="answer">A2</li>
    <li class="answer">A3</li>
  </ul>
  <div id="btn" class="btn btn-laravel disabled">Next Question</div>
</div>
@endsection
