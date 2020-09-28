$('#rentFrom').change(function(){
	$('#rentFromPrint').html($("#rentFrom option:selected").text());
})

$('#rentIn').change(function(){
	$('#rentInPrint').html($("#rentIn option:selected").text());
})

$('.rentDateIn').change(function(){
	$('#rentDateInPrint').html($(this).val());
	if ( $('.rentDateOut').val() ) {
		var time1=$(this).datepicker('getDate');
		var time2=$('.rentDateOut').datepicker('getDate');
		if (time2>time1) { 
			var diff=Math.abs(time2 - time1);
			var res=Math.ceil(diff/(1000*3600*24));
			console.log(res);
			var price=1*$('#carPrice').val();
			$('#rentPrice').html(price*res);
			$('#rentSumma').val(price*res);
			$('.inputRent').val(0);
		} else{ 
			alert('Error date!')
			$(this).stopPropagation();
	   		 $(this).preventDefault();
			 
		}	
	}
})

$('.rentDateOut').change(function(e){

	
	$('#rentDateOutPrint').html($(this).val());
	if ( $('.rentDateIn').val() ) {
		var time2=$(this).datepicker('getDate');
		var time1=$('.rentDateIn').datepicker('getDate');
		if (time2>time1) { 
			var diff=Math.abs(time2 - time1);
			var res=Math.ceil(diff/(1000*3600*24));
			console.log(res);
			var price=1*$('#carPrice').val();
			$('#rentPrice').html(price*res);
			$('#rentSumma').val(price*res);
			$('.inputRent').val(0);
		} else{ 
				
			alert('Error date!');
			
	   		 $(this).stopPropagation();
	   		 $(this).preventDefault();
		}
	}
	
})


$(".minusRent").click(function(e){
	e.preventDefault();
	var price=1*$('#rentPrice').text();
	var text = 1*$(".inputRent").val();
	var kresla=1*$('#priceKresla').html();
	if(text > 0){
		text = --text;
	
	$(".inputRent").val(text);
	$('#chair_num').attr('value', text);
	$('#rentKreslaPrint').html(text);
	$('#rentPrice').html(price-kresla);
	$('#rentSumma').val(price-kresla);
   }
});

$(".plusRent").click(function(e){
	e.preventDefault();
	var text = 1*$(".inputRent").val();
	var price=1*$('#rentPrice').text();
	var kresla=1*$('#priceKresla').html();
	if(text < 2){
		text = ++text;
		$(".inputRent").val(text);
		$('#chair_num').attr('value', text);
		$('#rentKreslaPrint').html(text);
		$('#rentPrice').html(price+kresla);
		$('#rentSumma').val(price+kresla);
	}
	
	$('#rentKreslaPrint').html(text);
});