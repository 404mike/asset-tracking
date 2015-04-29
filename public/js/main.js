$(document).ready(function(){

  $('#create_type').on('change' , function(){
    var val = $(this).val();

    if(val == 'hardware') {
      $('#create_software').hide();
      $('#create_hardware').show();

      $('#create_item_type_value').html(' - Hardware');
    }

    if(val == 'software') {
      $('#create_software').show();
      $('#create_hardware').hide();

      $('#create_item_type_value').html(' - Software');
    }

    else if(val == ''){
      $('#create_hardware , #create_software').hide();
      $('#create_item_type_value').html('');
    }

  });

});