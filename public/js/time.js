$( function() {
    $( "#data" ).datepicker();
    $( "#data" ).datepicker( "option", "dateFormat", "yy-mm-dd");
    var data_z = document.getElementById('data_2').value;
    $("#data").val(data_z);
  } );