$('.busDate').change(function(){
	$('#busDatePrint').html($(this).val());
})

$('#busTime').change(function(){
	$('#busTimePrint').html($(this).val());
})

$(".bus_minus_youngs").click(function(e){
	e.preventDefault();
	var soni = 1*$(this).siblings(".bus_input").val();
	if( soni > 0){
		soni = --soni;
		//peoples soni
		var peoples=1*$('#peoples').html();
		$('#peoples').html(peoples-1);
		$('#num_peoples').val(peoples-1);
		//peoples soni
		$(this).siblings(".bus_input").val(soni);
		var price=1*$('#youngs').val();
		var sum=1*$('#busPrice').html();
		if (sum>=price) {
			$('#busPrice').html(sum-price)
			$('#sum_peoples').val(sum-price)
		}

	}
});
$(".bus_plus_youngs").click(function(e){
	e.preventDefault();
	var soni = 1*$(this).siblings(".bus_input").val();
	if( soni < 54 ){
		soni = ++soni;
		//peoples
		var peoples=1*$('#peoples').html();
		$('#peoples').html(peoples+1);
		$('#num_peoples').val(peoples+1);
		//peoples
		$(this).siblings(".bus_input").val(soni);
		var price=1*$('#youngs').val();
		var sum=1*$('#busPrice').html();
		$('#busPrice').html(sum+price);
		$('#sum_peoples').val(sum+price);
	}
});

$(".bus_minus_children").click(function(e){
	e.preventDefault();
	var soni = $(this).siblings(".bus_input").val();
	if( soni > 0){
		soni = --soni;
		//peoples soni
		var peoples=1*$('#peoples').html();
		$('#peoples').html(peoples-1);
		$('#num_peoples').val(peoples-1);
		//peoples soni
		$(this).siblings(".bus_input").val(soni);
		var price=1*$('#children').val();
		var sum=1*$('#busPrice').html();
		if (soni>=0) {
			$('#busPrice').html(sum-price);
			$('#sum_peoples').val(sum-price);
		}	
	}
});

$(".bus_plus_children").click(function(e){
	e.preventDefault();
	var soni = $(this).siblings(".bus_input").val();
	if( soni < 54 ){
		soni = ++soni;
		//peoples
		var peoples=1*$('#peoples').html();
		$('#peoples').html(peoples+1);
		$('#num_peoples').val(peoples+1);
		//peoples
		$(this).siblings(".bus_input").val(soni);
		var price=1*$('#children').val();
		var sum=1*$('#busPrice').html();
		$('#busPrice').html(sum+price);
		$('#sum_peoples').val(sum+price);
	}
});

$(".bus_minus_pensioners").click(function(e){
	e.preventDefault();
	var soni = $(this).siblings(".bus_input").val();
	if( soni >0 ){
		soni = --soni;
		//peoples
		var peoples=1*$('#peoples').html();
		$('#peoples').html(peoples-1);
		$('#num_peoples').val(peoples-1);
		//peoples
		$(this).siblings(".bus_input").val(soni);
		var price=1*$('#pensioner').val();
		var sum=1*$('#busPrice').html();
		if (soni>=0) {
			$('#busPrice').html(sum-price);
			$('#sum_peoples').val(sum-price);
		}
	}
});

$(".bus_plus_pensioners").click(function(e){
	e.preventDefault();
	var soni = $(this).siblings(".bus_input").val();
	if( soni < 54 ){
		soni = ++soni;
		//peoples
		var peoples=1*$('#peoples').html();
		$('#peoples').html(peoples+1);
		$('#num_peoples').val(peoples+1);
		//peoples
		$(this).siblings(".bus_input").val(soni);
		var price=1*$('#pensioner').val();
		var sum=1*$('#busPrice').html();
		$('#busPrice').html(sum+price);
		$('#sum_peoples').val(sum+price);
	}
});

$(".bus_minus_invalids").click(function(e){
	e.preventDefault();
	var soni = 1*$(this).siblings(".bus_input").val();
	if( soni > 0){
		soni = --soni;
		//peoples
		var peoples=1*$('#peoples').html();
		$('#peoples').html(peoples-1);
		$('#num_peoples').val(peoples-1);
		//peoples
		$(this).siblings(".bus_input").val(soni);
	}
});

$(".bus_plus_invalids").click(function(e){
	e.preventDefault();
	var soni = 1*$(this).siblings(".bus_input").val();
	if( soni<2){
		soni = ++soni;
		//peoples
		var peoples=1*$('#peoples').html();
		$('#peoples').html(peoples+1);
		$('#num_peoples').val(peoples+1);
		//peoples
		$(this).siblings(".bus_input").val(soni);
	}
});