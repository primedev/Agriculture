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

	var $listli =$('ul.lavaLamp > li');

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
	}
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

});