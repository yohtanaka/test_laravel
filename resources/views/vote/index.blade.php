@extends('layouts.common')

@section('title', 'Vote')

@section('content')
<h2>投票機能</h2>
<p>Which do you like?</p>
<form action="" method="post">
	@csrf
	<div class="row">
		<div class="box" id="box_0" data-id="0"></div>
		<div class="box" id="box_1" data-id="1"></div>
		<div class="box" id="box_2" data-id="2"></div>
		<input type="hidden" id="answer" name="answer" value="">
	</div>
	<div id="btn" class="btn btn-laravel">Vote and See Results</div>
</form>
<div class="alert">error message</div>
@endsection
