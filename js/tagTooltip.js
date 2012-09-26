$(document).ready(function(){
	$('.tipCont').prepend('<div class="tipTop"></div>').append('<div class="tipBot"></div>');
	$('.tipCont a:last-child').css("background","none");
	
	$(".tooltip").hover(function(){
		var tinyTip = $(this).children(".tipCont");
		var yOffset = tinyTip.height();
		var xOffset = tinyTip.width();
		var xTipOffset = $(this).width();
		var pos = $(this).offset();
		var nPos = pos;
		nPos.top = pos.top - yOffset + 1;
		nPos.left = pos.left - (xOffset/2) + (xTipOffset/2) ;
		tinyTip.css('position', 'absolute').css('z-index', '1000').toggleClass("hover");
		tinyTip.css(nPos);		
	});	

});