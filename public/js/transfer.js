$(function(){
	var from;
	var to;
	$('#transferFrom').keyup(function(){
		$('#transferFromPrint').html($(this).val());
	})
    $("#transferTo").change(function(){
    	to = $(this).val();
    	from = $("#transferFrom").val();
    	$('#transferToPrint').html($("#transferTo option:selected").text());
      /*$.ajax({
      	url: "/transfer",
      	type: 'POST',
      	headers: {
      		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      	},
      	data: {
      		from: from,
      		to: to
      	},
      })
      .done(function(data){
      	var price = 1*data['chair']*1*$("#transferKresla").val();
      	$("#price").html(1*data['cost']+price);
      	$("#hidden").val(1*data+price);
      })
      .fail(function(){
      	alert("Нет маршрута");
      })*/
    });


    /*$("#transferKresla").change(function(){
    	soni = 1*$(this).val();
    	var a = 1*$("#price").html();
      	if($(this).attr('son')==0){
      		$("#price").html(a+soni);
      		$("#hidden").val(a+soni);
      	}else{
      		var b = 1*$(this).attr('son');
      		$("#price").html(a+soni-b);
      		$("#hidden").val(a+soni-b);
      	}
      	$(this).attr("son",$(this).val());
    })*/
    
    $('.plusTransfer').click(function(e){
      e.preventDefault();
      var soni=1*$('.inputTransfer').val();
      //var price=1*$('#priceKresla').html();
      //var priceDirection=1*$('#directionPrice').html();
        if (soni<4) {
          soni=++soni;
          $('.inputTransfer').val(soni);
          $('#transferPassajirPrint').html(soni);
          $('#num_passajir').val(soni);
        }
        //$('#directionPrice').html(priceDirection+price);
        //$('.directionSumma').val(priceDirection+price);

    })

    $('.minusTransfer').click(function(e){
      e.preventDefault();
      var soni=1*$('.inputTransfer').val();
      //var price=1*$('#priceKresla').html();
      //var priceDirection=1*$('#directionPrice').html();
      if (soni>0) {
        soni=--soni;
        $('.inputTransfer').val(soni);
        $('#transferPassajirPrint').html(soni);
        $('#num_passajir').val(soni);
        //$('#directionPrice').html(priceDirection+price);
        //$('.directionSumma').val(priceDirection+price);
      } 
    })


    $(".datepicker").change(function(){
    	$("#transferDatePrint").html($(this).val())
    });
    $("#transferTime").change(function(){
    	$("#transferTimePrint").html($(this).val())
    })
    
 })