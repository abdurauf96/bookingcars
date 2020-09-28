      
$(function(){
	var from;
	var to;
	$('#from').change(function(){
		$('#fromPrint').html($("#from option:selected").text());
    if ($('#to').val()) {
      from = $(this).val();
      to = $("#to").val();
      $('#toPrint').html($("#to option:selected").text());
      $.ajax({
        url: "/gidcars",
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
        var price = 1*$("#price").val();
        $("#price").html(1*data+price);
        $("#hidden").val(1*data+price);
        $('#kresla').val(0);
      })
     
    }

	})
    $("#to").change(function(){
    	to = $(this).val();
    	from = $("#from").val();
    	$('#toPrint').html($("#to option:selected").text());
      $.ajax({
      	url: "/gidcars",
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
      	var price = 1*$("#price").val();
      	$("#price").html(1*data+price);
      	$("#hidden").val(1*data+price);
        $('#kresla').val(0);
      })
    });

    $(".datepicker").change(function(){
    	$("#sanaPrint").html($(this).val())
    });
    $("#gid_from").change(function(){
    	$("#gid_from_print").html($(this).val())
    })
    $("#gid_to").change(function(){
    	$("#gid_to_print").html($(this).val())
    })
    $("#yazik").change(function(){
    	$("#yazikPrint").html($(this).val())
    })
 })



$(".minusGidCars").click(function(e){
  e.preventDefault();
  var text = $("#kresla").val();
  if(text > 0){
    text = --text;
    $('#kresla').val(text);
    $('#num_chair').val(text);
    var price=1*$('#price').html();
    var kresla=1*$('#priceKreslo').html();
    $('#price').html(price-kresla);
    $('#hidden').val(price-kresla);
  }
 
});

$(".plusGidCars").click(function(e){
  e.preventDefault();
  var text = $("#kresla").val();
  if(text < 2){
    text = ++text;
    $('#kresla').val(text);
    $('#num_chair').val(text);
    var price=1*$('#price').html();
    var kresla=1*$('#priceKreslo').html();
    $('#price').html(price+kresla);
    $('#hidden').val(price+kresla);
  }
 
});