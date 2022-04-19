$(function(){
	$('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		autoplaySpeed: 4500,
		arrows: false,
		dots: true,
		speed: 800,
	})
})
$(function(){
	$('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		$('.slider__slide_'+nextSlide+'').addClass('zoomIn');
		$('.slider__slide_'+currentSlide+'').removeClass('zoomIn');
	});
});

var top_show = 450; 
  var delay = 1000; 
  $(document).ready(function() {
    $(window).scroll(function () { 
      if ($(this).scrollTop() > top_show) $('#top').fadeIn();
      else $('#top').fadeOut();
    });
    $('#top').click(function () {
    	$('body, html').animate({
    		scrollTop: 0
    	}, delay);
    });
});

new WOW().init();

$('.toggle-mnu').on('click', function(){
	$(this).toggleClass("on");
	if ($(this).hasClass('on'))
	{
		$('.respond-menu').slideDown();
	}
	else
	{
		$('.respond-menu').slideUp();
	}
});

$(function(){
	$('.langselect__selected').on('mouseover', function(){
		$('.langselect__list').slideDown();
	})
	$(document).on('mouseover', function(event) {
	    if ($(event.target).closest(".langselect__selected").length) return;
	    if ($(event.target).closest(".langselect__list").length) return;
		$('.langselect__list').slideUp();
	    event.stopPropagation();
	});
})

function accordion(){
	$('.acc_container').hide();
	$('.acc_trigger').click(function(){
		if( $(this).next().is(':hidden') ) { 
			$('.acc_trigger').removeClass('active').next().slideUp(); 
			$(this).toggleClass('active').next().slideDown(); 
		}
		return false;
	});
};
accordion();

$("a[href='#faq']").magnificPopup({
	mainClass: 'my-mfp-zoom-in',
	removalDelay: 300,
	type: 'inline',
});

$(window).load(function() {
	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
});

jQuery.cookie=function(name,value,options){if(typeof value!='undefined'){options=options||{};if(value===null){value='';options.expires=-1;}var expires='';if(options.expires&&(typeof options.expires=='number'||options.expires.toUTCString)){var date;if(typeof options.expires=='number'){date=new Date();date.setTime(date.getTime()+(options.expires*24*60*60*1000));}else{date=options.expires;}expires='; expires='+date.toUTCString();}var path=options.path?'; path='+(options.path):'';var domain=options.domain?'; domain='+(options.domain):'';var secure=options.secure?'; secure':'';document.cookie=[name,'=',encodeURIComponent(value),expires,path,domain,secure].join('');}else{var cookieValue=null;if(document.cookie&&document.cookie!=''){var cookies=document.cookie.split(';');for(var i=0;i<cookies.length;i++){var cookie=jQuery.trim(cookies[i]);if(cookie.substring(0,name.length+1)==(name+'=')){cookieValue=decodeURIComponent(cookie.substring(name.length+1));break;}}}return cookieValue;}};
$(function(){
if($.cookie('uCookie')=='uRhide') { $('#uReg').hide(); };
});