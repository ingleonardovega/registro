$(document).ready(function() {
  
 });


 $("#retry-pass" ).blur(function() {
     if ($('#pass2').val() != $('#retry-pass').val()) 
     {
       $('.checa').addClass('is-invalid');
       $('#btn').attr('disabled', 'disabled');
      
     }
     else
     {
        $('.checa').removeClass('is-invalid');  
        $('#btn').removeAttr("disabled"); 
     }
  });

  $("#pass2" ).blur(function() {
    if ($('#pass2').val() != $('#retry-pass').val()) 
    {
      $('.checa').addClass('is-invalid');
      $('#btn').attr('disabled', 'disabled');
     
    }
    else
    {
       $('.checa').removeClass('is-invalid');  
       $('#btn').removeAttr("disabled"); 
    }
 });