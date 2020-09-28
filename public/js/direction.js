/*$('#directionFrom').change(function(){
	$('#directionFromPrint').html($("#directionFrom option:selected").text());

	if ( $('#directionTo').val() &&  $('.directionDateIn').val() &&  $('.directionDateOut').val() ) {
		var from=$('#directionFrom').val();
		var to=$('#directionTo').val();
		$.ajax({
			headers: {
	      		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      	},
			type: 'POST',
			url: '/direction',
			data: {from:from, to:to},
			success: function(data){
				var cost=data['cost'];
				var time1=new Date($('.directionDateIn').val());
				var time2=new Date($('.directionDateOut').val());
				var diff=Math.abs(time2.getTime() - time1.getTime());
				var res=Math.ceil(diff/(1000*3600*24));
				
				if (res==0) {
					var summa =data['cost'];
				}
				else{
					var summa = res* 1*data['cost'];
				}
				$('#directionPrice').html(summa);	
				$('.directionSumma').val(summa);
				$('.inputDirection').val(0);
			},	
		})
	}

})

$('#directionTo').change(function(){
	$('#directionToPrint').html($("#directionTo option:selected").text());
	if ( $('.directionDateIn').val() &&  $('.directionDateOut').val() ) {
		var from=$('#directionFrom').val();
		var to=$('#directionTo').val();
		$.ajax({
			headers: {
	      		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      	},
			type: 'POST',
			url: '/direction',
			data: {from:from, to:to},
			success: function(data){
				var cost=data['cost'];
				var time1=new Date($('.directionDateIn').val());
				var time2=new Date($('.directionDateOut').val());
				var diff=Math.abs(time2.getTime() - time1.getTime());
				var res=Math.ceil(diff/(1000*3600*24));
				
				if (res==0) {
					var summa =data['cost'];
				}
				else{
					var summa = res* 1*data['cost'];
				}
				$('#directionPrice').html(summa);
				$('.directionSumma').val(summa);
				$('.inputDirection').val(0);
			},	
		})
	}
})

$('#directionTimeIn').change(function(){
	$('#directionTimeInPrint').html($(this).val())
})

$('.directionDateIn').change(function(){
	$('#directionDateInPrint').html($(this).val())

	if ( $('#directionFrom').val() &&  $('#directionTo').val() &&  $('.directionDateOut').val() ) {
		var from=$('#directionFrom').val();
		var to=$('#directionTo').val();
		$.ajax({
			headers: {
	      		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      	},
			type: 'POST',
			url: '/direction',
			data: {from:from, to:to},
			success: function(data){
				var cost=data['cost'];
				var time1=new Date($('.directionDateIn').val());
				var time2=new Date($('.directionDateOut').val());
				var diff=Math.abs(time2.getTime() - time1.getTime());
				var res=Math.ceil(diff/(1000*3600*24));
				
				if (res==0) {
					var summa =data['cost'];
				}
				else{
					var summa = res* 1*data['cost'];
				}
				$('#directionPrice').html(summa);
				$('.directionSumma').val(summa);
				$('.inputDirection').val(0);
			},	
		})
	}

})

$('#directionKresla').change(function(){
	$('#directionKreslaPrint').html($(this).val())
})

$('.directionDateOut').change(function(){
	$('#directionDateOutPrint').html($(this).val())
	var from=$('#directionFrom').val();
	var to=$('#directionTo').val();
	$.ajax({
		headers: {
      		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      	},
		type: 'POST',
		url: '/direction',
		data: {from:from, to:to},
		success: function(data){
			var cost=data['cost'];
			var time1=new Date($('.directionDateIn').val());
			var time2=new Date($('.directionDateOut').val());
			var diff=Math.abs(time2.getTime() - time1.getTime());
			var res=Math.ceil(diff/(1000*3600*24));
			
			if (res==0) {
				var summa =data['cost'];
			}
			else{
				var summa = res* 1*data['cost'];
			}
			$('#directionPrice').html(summa);
			$('.directionSumma').val(summa);
			$('.inputDirection').val(0);
		},	
	})
})

$('.plusDirection').click(function(e){
	e.preventDefault();
	var soni=1*$('.inputDirection').val();
	var price=1*$('#priceKresla').html();
	var priceDirection=1*$('#directionPrice').html();
	if (soni<2) {
		soni=++soni;
		$('.inputDirection').val(soni);
		$('#directionKreslaPrint').html(soni);
		$('#num_kresla').val(soni);
		$('#directionPrice').html(priceDirection+price);
		$('.directionSumma').val(priceDirection+price);
	}	
})

$('.minusDirection').click(function(e){
	e.preventDefault();
	var soni=1*$('.inputDirection').val();
	var price=1*$('#priceKresla').html();
	var priceDirection=1*$('#directionPrice').html();
	if (soni>0) {
		soni=--soni;
		$('.inputDirection').val(soni);
		$('#directionPrice').html(priceDirection-price);
		$('.directionSumma').val(priceDirection-price);
		$('#directionKreslaPrint').html(soni);
		$('#num_kresla').val(soni);
	}	
})*/

$(document).ready(function(){
    $( ".datepicker" ).datepicker();
    $(".datepicker").datepicker("option", "dateFormat", "dd/mm/yy");

    $('.select').change(function(){
    
    var date =$(this).siblings('.datepicker').val();
    $('.hiddenDate').val(date);

    var	marshrut=$(this).siblings('.yonalish').html();
    $('.marshrut').val(marshrut);

    $('#marshrutDirectPrint').html(marshrut);
	var price = parseInt( $(this).siblings().find('.price').html() );
	$('.price_direct').html(price);
	$('.itogo').val(price);

	})

	$('.datepicker').change(function(){
		$('#dateDirectPrint').html( $(this).val() );
	})
});
