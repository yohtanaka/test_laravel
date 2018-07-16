<?php $user = Auth::user(); ?>
<header class="clearfix">
  <a href="/">
    <img class="left" src="/images/logo.png" alt="">
    <h1 class="left">Laravel<span> でららべる？</span></h1>
  </a>
  @if($user)
    <a class="menu" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
    <a href="" class="menu">
      @if($user)
        こんにちは！{{$user->name}}さん
      @endif
    </a>
  @else
    <a href="{{ route('login') }}" class="menu">ログイン</a>
    <a href="{{ route('register') }}" class="menu">新規登録</a>
  @endif
</header>
