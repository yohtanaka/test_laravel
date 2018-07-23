@extends('layouts.common')

@section('title', 'Birthday')

@section('content')
<h2>同じ誕生日の有名人検索機能</h2>
<p>
  {{ $birthday }}
  生まれの有名人一覧
</p>
<pre class="post-table">
{{ $celebrities }}
</pre>
<p>出典: Wikipedia</p>
<a href="/birthday">誕生日入力画面にもどる</a>
@endsection
