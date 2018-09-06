@extends('layouts.common')

@section('title', 'Quiz')

@section('content')
<h2>クイズ機能</h2>
<div id="container">
  <h3>Q. {{ $data['q'] }}</h3>
  <ul>
    @foreach ($data['a'] as $a)
      <li class="answer">{{ $a }}</li>
    @endforeach
  </ul>
  <div id="btn" class="btn btn-laravel disabled">Next Question</div>
</div>
@endsection
