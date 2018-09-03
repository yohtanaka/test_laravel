@extends('layouts.common')

@section('title', 'Search')

@section('content')
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
<script type="text/javascript">
$(function(){
    $('.tsArea').TapSuggest({
        tsInputElement : '.tsInput',
        tsArrayList : ['サッカー', ['野球', 'やきゅう'], 'アメフト', 'スキー', 'バレーボール', 'ラクロス', 'ラグビー', 'バスケットボール', 'ゴルフ', 'テニス', 'バドミントン', 'ソフトボール', 'ビリヤード', 'ボウリング', ['競泳', 'きょうえい'], 'カーリング', ['卓球', 'たっきゅう'],
                        'ドッジボール', 'ダーツ', 'フットサル', 'クリケット', 'ラケットボール', 'ロードレース', 'ハンマー投', 'アーチェリー', 'オートレース', ['競馬', 'けいば']],
        tsRegExpAll : true
    });
});
</script>
@endsection
