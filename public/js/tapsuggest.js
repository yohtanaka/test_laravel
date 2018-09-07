/*--------------------------------------------------------------------------*
 *
 *  TapSuggest.js
 *
 *  MIT-style license.
 *
 *  2016 nocho
 *  http://kinocolog.com
 *
 *--------------------------------------------------------------------------*/

(function($){
	$.fn.TapSuggest = function(options){
		$this = $(this);
		$this.css('width', '100%');
		var defaults = {
			tsArrayList : [],
			tsInputElement : $this.closest('input:text'),
			tsListCount : 10,
			tsFormAutoSubmit : false,
			tsUlClass : 'TapSuggest',
			tsAjaxUrl : '',
			tsAjaxParam : 'str',
			tsRegExpAll : false,
			tsSpScroll : false
		};

		var setting = $.extend(defaults, options);
		var elm_list;
		var elm_active = -1;
		var key_last_time = 0;
		var key_down_flg = false;
		var key_down_text;
		var click_flg = false;
		if(!$(setting.tsInputElement)) return;
		$tsInput = $(setting.tsInputElement);
		$tsResult = $('<ul class="' + setting.tsUlClass + '">');
		var tsArrayListConvert = [];
		if(setting.tsArrayList){
			$.each(setting.tsArrayList, function(i, value){
				if($.isArray(value)){
					var sub_array = [];
					$.each(value, function(i2, value2){
						sub_array.push(value2.toKatakanaCase().toHankakuCase());
					});
					tsArrayListConvert.push(sub_array);
				}else{
					tsArrayListConvert.push(value.toKatakanaCase().toHankakuCase());
				}
			});
		}
		$tsInput.on('click', function(){
			if(!setting.tsSpScroll) return false;
			if(_ua.Mobile){
				var position = $tsInput.offset().top;
				$('body,html').animate({scrollTop: (position - 10)}, 300);
			}
		});
		$tsResult.on('touchstart', function(e){
			$(e.target).addClass('totch');
		});
		$tsResult.on('touchend', function(e){
			$(e.target).removeClass('totch');
		});
		$tsInput.on('input', function(){
			if(click_flg) return false;
			key_down_flg = false;

			if($tsInput.val() == ""){
				$tsResult.empty();
				elm_active = -1;
				return;
			}
			if(setting.tsArrayList.length > 0){
				var list = [];
				var regCheck;
				var now_word = $tsInput.val().toKatakanaCase().toHankakuCase();

				if(setting.tsRegExpAll){
					regCheck = new RegExp("(" + now_word + ")", "i");
				}else{
					regCheck = new RegExp("^(" + now_word + ")", "i");
				}
				$.each(tsArrayListConvert, function(i, value){
					if($.isArray(value)){
						$.each(value, function(i2, value2){
							if(value2.match(regCheck)){
								list.push(setting.tsArrayList[i][0]);
								return false;
							}
						});
					}else{
						if(value.match(regCheck)){
							list.push(setting.tsArrayList[i]);
						}
					}
					if(list.length >= setting.tsListCount) return false;
				});
				$tsResult.empty();
				$.each(list, function(i, value){
					$tsResult.append('<li>' + value + '</li>');
				});
				$this.append($tsResult);

			}else if(setting.tsAjaxUrl && setting.tsAjaxParam){
				var param = {};
				param[setting.tsAjaxParam] = $tsInput.val();
				$.ajax({
					url : setting.tsAjaxUrl,
					type : "POST",
					cache : false,
					dataType : "json",
					data : param,
					success : function(list){
						$tsResult.empty();
						$.each(list, function(i, value){
							if(i >= setting.tsListCount) return false;
							$tsResult.append('<li>' + value + '</li>');
						});
						$this.append($tsResult);
					}
				});
			}
			elm_list = $('ul.' + setting.tsUlClass + ' > li');
		});
		$tsResult.on('mousedown', function(e){
			click_flg = true;
			$tsInput.blur();
			var $form = $($tsInput.closest('form'));
			if($(e.target).html().indexOf("<li>") == -1 && $(e.target).html().indexOf("</li>") == -1){
				$tsInput.val($(e.target).text());
				if(setting.tsFormAutoSubmit) $form.submit();
			}
			elm_active = -1;
			$tsResult.empty();
			return false;
		});
		$tsInput.on('blur', function(){
			setTimeout(function(){
				elm_active = -1;
				click_flg = false;
				$tsResult.empty();
			}, 200);
		});
		$tsInput.on('keydown', function(evnt){
			if(!$tsResult) return false;
			if(!key_down_flg){
				key_down_flg = true;
				key_down_text = $tsInput.val();
			}
			if(evnt.keyCode == 40 || evnt.keyCode == 38){
				if(!$('ul.' + setting.tsUlClass + ' > li').length) return false;
				var elm_cnt = $('ul.' + setting.tsUlClass + ' > li').length;
				if(evnt.keyCode == 40){
					if((elm_cnt-1) > elm_active){
						elm_active++;
					}
				}
				if(evnt.keyCode == 38){
					if(elm_active >= 0){
						elm_active--;
					}
				}
				$('ul.' + setting.tsUlClass + ' > li').removeClass('totch');
				if(elm_active >= 0){
					$('ul.' + setting.tsUlClass + ' > li').eq(elm_active).addClass('totch');
				}
				var text = $('ul.' + setting.tsUlClass + ' > li').eq(elm_active).text();
				if(evnt.keyCode == 38 && elm_active == -1)  text = key_down_text;
				$tsInput.val(text);
			}
			if(evnt.keyCode == 13){
				if(elm_active >= 0){
					var $form = $($tsInput.closest('form'));
					$tsResult.empty();
					elm_active = -1;
					if(setting.tsFormAutoSubmit) $form.submit();
				}
			}
		});
	}
	var _ua = (function(u){
		return {
			Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
				|| u.indexOf("ipad") != -1
				|| (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
				|| (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
				|| u.indexOf("kindle") != -1
				|| u.indexOf("silk") != -1
				|| u.indexOf("playbook") != -1,
			Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
				|| u.indexOf("iphone") != -1
				|| u.indexOf("ipod") != -1
				|| (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
				|| (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
				|| u.indexOf("blackberry") != -1
		}
	})(window.navigator.userAgent.toLowerCase());
	// kanaXs
	// https://github.com/shogo4405/KanaXS.git
	String.prototype.toKatakanaCase=function(){for(var a,b=this.length,c=[];b--;)a=this.charCodeAt(b),c[b]=12353<=a&&12438>=a?a+96:a;return String.fromCharCode.apply(null,c)};String.prototype.toHankakuCase=function(){for(var a,b=this.length,c=[];b--;)switch(a=c[b]=this.charCodeAt(b),!0){case 65281<=a&&65374>=a:c[b]-=65248;break;case 12288==a:c[b]=32}return String.fromCharCode.apply(null,c)};
})(jQuery);
