$(function(){
	// var $MarketingImg = $('div.img-marketing a.gall img.b');

	// $MarketingImg.hover(function(){
	// 	alert(12);
	// 	$(this).animate({
	// 		opacity : 0.5
	// 	},700);
	// },function(){
	// 	$(this).animate({
	//  		opacity : 0
	//  	},500);
	// });
	var $Nazar = $('a.nazar'),
		$CloseNazar = $('section.comment-article div.close-nazar');;
	if(!(jQuery.browser.msie && jQuery.browser.version == 7.0)){
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

	var $listli =$('ul.lavaLamp > li'),
		$articlesideright = $('ul.article-sideright >li a');

	$listli.click(function(){

		$(this).addClass('blabla');
		var url = $('ul.lavaLamp li.blabla a').attr('href');
		window.location.href = pageUrl + '#' + url;
		$(this).removeClass('blabla');
		return false;
	});

	$articlesideright.click(function(){
		var url = $(this).attr('href');
		window.location.href = pageUrl + '#' + url;
		return false;
	});


	window.onhashchange = function(){
		loadpage(window.location.hash);
	}

	// window.onload = function(){
	// 	$('div#loading').animate({
	// 		opacity:0
	// 	},700,null,function(){
	// 		$(this).css({display:'none'});
	// 	});
	// }
	//end ajax
	}
	// right menu
	$('#melements-acc-vertical').dcAccordion({
		eventType: 'click',
		autoClose: true,
		saveState: true,
		disableLink: true,
		speed: 'slow',
		showCount: false,
		autoExpand: true,
		cookie	: 'dcjq-accordion-1',
		classExpand	 : 'dcjq-current-parent'
	});
	// right menu

	// NAZAR
	$Nazar.click(function(){
	$('section.comment-article').css({
		'display':'block',
		}).animate({
			opacity : 1,
		},1000);
		$('html, body').animate({
			scrollTop: $("section.comment-article").offset().top
		}, 1500);
		return false;
	});

	$CloseNazar.click(function(){
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 1000);
		$('section.comment-article').animate({
			opacity : 0,
		},1000,'',function(){
			$(this).css({
				'display':'none',
			});
		});	
	});
});
window.onload = function(){
	$('div#loading').animate({
		opacity:0
	},700,null,function(){
		$(this).css({display:'none'});
	});
};