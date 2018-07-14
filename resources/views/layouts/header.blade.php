<header class="clearfix">
  <a href="/">
    <img class="left" src="/images/logo.png" alt="">
    <h1 class="left">Laravel</h1>
  </a>
  <a href="/login" class="menu">ログイン</a>
  <a href="/register" class="menu">新規登録</a>
  <a href="" class="menu">
    <?php
    $user = \Auth::user();
    if ($user) {
      echo "Hello $user->name";
    }?>
  </a>
</header>
