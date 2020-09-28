$('#gorodCortage').change(function(){
    $('#printGorod').html($('#gorodCortage option:selected').text());
    var gorod =$(this).val();
   /* $.ajax({
      url: "/cortage",
        type: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
          gorod: gorod,
        },
        success: function(data){
         $('#price').html(data);
         $('#hidden').val(data);
        }
    })*/
})

$('#cortageTimetFrom').change(function(){
  $('#cortageFrom').html($(this).val());
})

$('#cortageTimetTo').change(function(){
  $('#cortageTo').html($(this).val());
})

$('#cortageDate').change(function(){
  $('#cortageDatePrint').html($(this).val());
})