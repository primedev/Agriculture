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
});