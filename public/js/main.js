$(document).ready(function(){
	/*avto active*/
	$(".sortCatService").click(function(e){
		e.preventDefault();
		$(".sortCatService").removeClass("avto_active");
		$(this).addClass("avto_active");
	})
	/*avto active the end *//
	/*full read*/
    $(".slidefull").click(function(e){
        e.preventDefault();
        $(".full__read").slideDown(500);
    });
    $(".exit__read").click(function(e){
        e.preventDefault();
        $(".full__read").slideUp(500);
    });
    /*full read the end*/
	$(".exit2").click(function(){
		$(".otprovlen_head").hide(100);
		$(".otprovlen_head_comment").hide(100);
		$(".otprovlen_head2").css('display', 'none');
	});

	$(".our_service").click(function(e){
		e.preventDefault();
	});
	$( ".datepicker" ).datepicker({
		showOtherMonths: true,
		selectOtherMonths: true
	  });
	$( ".datepicker" ).datepicker( "option", "dateFormat", "yy/mm/dd" );
	$(".car-link").click(function(e){
		e.preventDefault();
		$(this).addClass("js-car-link-active",1500);
		$(this).siblings(".car-link").removeClass("js-car-link-active");
	});
	$(".double").click(function(e){
		e.preventDefault();
		$(this).addClass("link-active",1500);
		$(this).siblings(".double").removeClass("link-active");
	});
	$(".bronlink").click(function(){
		$("#open1").show();
	});
	$(".bronlink2").click(function(){
		$("#open2").show();
	});
	/*	.whayMy__inner-left .body-acordion
	==============*/
	$(".js-acordion-head").on("click", function(e) {

		e.preventDefault();
		var $this = $(this);

		if( !$this.hasClass("acordion-active") ) {
			$(".js-acordion-info").slideUp();
			$(".js-acordion-head").removeClass("acordion-active");
		}
		$this.toggleClass("acordion-active");
		$this.next().slideToggle();
	});
	$(".link1").click(function(e){
		e.preventDefault();
		$(".link1").addClass("link-active");
		$(".link2").removeClass("link-active");   
	});
	$(".link2").click(function(e){
		e.preventDefault();
		$(".link2").addClass("link-active");
		$(".link1").removeClass("link-active");   
	});
});

$(document).ready(function(){
	$(".slider").slick({
		slidesToShow:1,
		SlidesToScroll:1,
		dots: true,
		arrows: false,
		speed: 1000,
	    autoplay: true,
	    autoplaySpeed: 3000


	}) 	
});