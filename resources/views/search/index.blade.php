@extends('layouts.common')

@section('title', 'Search')

@section('content')
<script type="text/javascript">
$(function(){
    var prefs = @json($prefs);
    $('.tsArea').TapSuggest({
        tsInputElement : '.tsInput',
        tsArrayList : prefs,
        tsRegExpAll : true
    });
});
</script>
<h2>オートコンプリート検索機能</h2>
<div class="container">
	<h2>スポーツ検索</h2>
    <div class="formArea">
        <form method="post" action="">
			<div class="inputArea">
				<input type="text" class="tsInput">
			</div>
			<div class="submitArea">
				<input type="submit" value="送信する">
			</div>
        </form>
    </div>
    <div class="tsArea"></div>
</div>
@endsection
