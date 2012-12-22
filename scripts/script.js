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
		// var $lia = $('nav.main-menu a');
		// $res = "article.php";
		// $lia.click(function(){

		// 	$.ajax({
		// 		url : $res,
		// 		success : function(data){
		// 			$(".ajaxcontent").html(data);
		// 		}
		// 	});
		// });
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

	var lia = $('ul.lavaLamp li a') , $listli =$('ul.lavaLamp li');

	$listli.click(function(){
		$(this).addClass('blabla');
		var url = $('ul.lavaLamp li.blabla a').attr('href');
		window.location.href = pageUrl + '#' + url;
		$(this).removeClass('blabla');
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
 	// 	});
	}
	//end ajax
});