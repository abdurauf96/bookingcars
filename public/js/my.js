var sum;


$(function() {
  $(".bronlink").on("click", function(e) {
    e.preventDefault();
    var plansOffset = $(".section_wrapper").offset().top-200;

    $("html, body").animate({
      scrollTop: plansOffset
    }, 200)
  });
});

$(function() {
  $(".bronlink2").on("click", function(e) {
    e.preventDefault();
    var plansOffset = $(".section4").offset().top-200;

    $("html, body").animate({
      scrollTop: plansOffset
    }, 200)
  });
});


$('.sortCat').click(function(e){
	e.preventDefault();
    var id=$(this).data('id');
	$.ajax({
		headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	},
    	type: 'POST',
    	url: '/sortCat',
    	data: {id:id},
    	success: function(data){
    		$('#avtopark').html(data);
    	},
	});
})

$('.sortCatService').click(function(e){
    e.preventDefault();
    var id=$(this).data('id');
    var service_id=$(this).data('service_id');
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/sortCatService',
        data: {id:id, service_id:service_id},
        success: function(data){
            $('#avtopark').html(data);
        },
    });
})


$("body").delegate('.rub','click', function(e){
    e.preventDefault();
    $(this).prev().removeClass("js-car-link-active");
    $(this).addClass("js-car-link-active");
    var _this = $(this).parent().prev().find('.sum');
    var sum=1*$(this).data('sum');
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/convertToRubl',
        data: {sum:sum},
        success: function(data){ 
            $(_this).html(data);

        },
    });
})


$("body").delegate('.dol','click', function(e){
    e.preventDefault();
    $(this).next().removeClass("js-car-link-active");
    $(this).addClass("js-car-link-active");
    var _this = $(this).parent().prev().find('.sum');
    var sum=$(this).data('sum');
    console.log(sum);
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/convertToDollar',
        data: {sum:sum},
        success: function(data){ 
            $(_this).html(data);
        },
    });
})

$('.pokazat').click(function(){
   var region_id=$('#region_id').val();
   var service_id=$('#service_id').val();
   var category_id=$('#category_id').val();
   $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/searchCar',
        data: {
            region_id: region_id,
            service_id:service_id,
            category_id:category_id,
        },
        success: function(data){
            $('#services').html(data);
        }
   })
})

$('.apply').click(function(e){
    e.preventDefault();
    var name=$('#name').val();
    var number=$('#number').val();
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/apply',
    data: {name:name, number:number},
    success: function(data){
        $('.otprovlen_head').css("display", "block");
    }
    })
    
})

$('.apply3').click(function(e){
    e.preventDefault();

    var name=$('#name').val();
    var number=$('#number').val();
    var email=$('#email').val();
    var message=$('#message').val();
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/apply3',
    data: {name:name, number:number, email:email, message:message},
    success: function(data){
        $('.otprovlen_head').css("display", "block");
    }
    })
    
})

$('.comment').click(function(e){
    e.preventDefault();
    $('.otmodal').css('display', 'block');
})

$('.send_comment').click(function(e){
    e.preventDefault();
    var name = $('.name').val();
    var body = $('.body').val();
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/apply_comment',
    data: {name:name, body:body},
    success: function(data){
        $('.otprovlen_head_comment').css("display", "block");
        $('.otmodal').slideUp(700);
    },
    })
    

})

$("body").delegate('.dol2','click', function(e){
    e.preventDefault();
    $(this).siblings().removeClass("cost__active",500);
    $(this).addClass("cost__active",500);
    var _this = $(this).parent().prev().find('.price');
    var sum=1*$(this).data('sum');
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/convertToDollar',
        data: {sum:sum},
        success: function(data){ 
             $(_this).html(data);
        },
    });
})

$('.rub2').click(function(e){
    e.preventDefault();
    $(this).siblings().removeClass("cost__active", 1500);
    $(this).addClass("cost__active", 1500);
    var _this = $(this).parent().prev().find('.price');
    var sum=1*$(this).data('sum');
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/convertToRubl',
        data: {sum:sum},
        success: function(data){ 
            $(_this).html(data);
        },
    });
})