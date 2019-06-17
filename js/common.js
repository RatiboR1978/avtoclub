$(document).ready(function() {

	//РџРѕРїР°Рї РјРµРЅРµРґР¶РµСЂ FancyBox

	//Р”РѕРєСѓРјРµРЅС‚Р°С†РёСЏ: http://fancybox.net/howto

	//<a class="fancybox"><img src="image.jpg" /></a>

	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>

	//$(".fancybox").fancybox();

});






/*
$(function() {



	//SVG Fallback

	if(!Modernizr.svg) {

		$("img[src*='svg']").attr("src", function() {

			return $(this).attr("src").replace(".svg", ".png");

		});

	};





	//Chrome Smooth Scroll

	try {

		$.browserSelector();

		if($("html").hasClass("chrome")) {

			$.smoothScroll();

		}

	} catch(err) {



	};



	$("img, a").on("dragstart", function(event) { event.preventDefault(); });



});

*/

// Scroll to top


$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
 
$('body,html').animate({scrollTop:0},800);
 
});
 
});


// Scroll to table
/*
$("#js-get-offer").on("click", function(e){  // РїСЂРё РЅР°Р¶Р°С‚РёРё РЅР° СЃСЃС‹Р»РєСѓ СЃ id js-get-started

	 e.preventDefault();

	 var plansOffset = $("#js-offer").offset().top; // РІС‹С‡РёСЃР»СЏРµС‚СЃСЏ РІС‹СЃРѕС‚Р° РѕС‚ РІРІРµСЂС…Р° Р±СЂР°СѓР·РµСЂР° РґРѕ РЅСѓР¶РЅРѕРіРѕ СЌР»РµРјРµРЅС‚Р° СЃ id js-plans

	 $("html, body").animate({ // СЂРµР°Р»РёР·Р°С†РёСЏ СЃР°РјРѕР№ РїСЂРѕРєСЂСѓС‚РєРё РЅР° РІС‹СЃС‡РёС‚Р°РЅРЅРѕРµ СЂР°РЅРµРµ СЂР°СЃС‚РѕСЏРЅРёРµ plansOffset Р·Р° 500 РјРёР»Р»РёСЃРµРєСѓРЅРґ

		scrollTop: plansOffset

	}, 3000);

	});*/
