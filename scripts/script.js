$(function(){
	var $MarketingImg = $('div.img-marketing a.gall img.b');

	$MarketingImg.mouseover(function(){
		$(this).animate({
			opacity : 0.5
		},700);
	});

	$MarketingImg.mouseout(function(){
		$(this).animate({
			opacity : 0
		},500);
	});
});