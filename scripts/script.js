$(function(){
	var $MarketingImg = $('div.img-marketing a.gall img.b');

	$MarketingImg.hover(function(){
		$(this).animate({
			opacity : 0.5
		},700);
	},function(){
		$(this).animate({
	 		opacity : 0
	 	},500);
	});

		//  AJAX

	var loadpage = function(url){
		url = url.length > 2 ? url.substr(1) : 'index.php';

		$('.ajaxcontent').load(url+' .ajaxcontent');
	}

	$('div#loading').css({
		opacity:1,
		display:'block'
	});

	var pageUrl = window.location.href;
	sharPos = pageUrl.indexOf('#');
	if(sharPos){
		loadpage(pageUrl.substr(sharPos));
		pageUrl = pageUrl.substr(0,sharPos);
	}

	var lia = $('nav.main-menu a');

	lia.click(function(){
		var url = $(this).attr('href');
		window.location.href = pageUrl + '#' + url;

		return false;
	});

	window.onhashchange = function(){
		loadpage(window.location.hash);
	}

	window.onload = function(){
		$('div#loading').animate({
			opacity:0
		},700,null,function(){
			$(this).css({display:'none'});
		});
		// $('a.more').click(function(){
		// 	var url = $(this).attr('title');
		// 	window.location.href = pageUrl + '#' + url;	
 	// 	});dorost kar nemikonad!!!!
	}
	//end ajax
});