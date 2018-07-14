@extends('layouts.common')

@section('title', 'Post')

@section('content')
この内容で投稿してもよろしいですか？
<form action="/post/store" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
  <input type="hidden" name="name" value="<?php echo $name ?>
">
  <?php echo $name ?>
  <input type="submit"value="投稿する">
</form>
@endsection
