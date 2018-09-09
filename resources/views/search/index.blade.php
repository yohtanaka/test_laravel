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
	<p>都道府県検索</p>
    <div class="formArea">
        <form method="post" action="">
			<div class="inputArea">
				<input type="text" id="name" class="tsInput form-control">
                <div class="tsArea"></div>
                <input type="text" id="name_kana" class="form-control">
			</div>
			<div class="submitArea">
				<input type="submit" value="送信する" class="btn btn-laravel">
			</div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(
        function() {
            $.fn.autoKana('#name', '#name_kana', {
                katakana : true
        });
    });
</script>
@endsection
