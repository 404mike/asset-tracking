$(document).ready(function(){

  // Item type toggle
  // $('#create_type').on('change' , function(){
  //   var val = $(this).val();

  //   if(val == 'hardware') {
  //     $('#create_software').hide();
  //     $('#create_hardware').show();

  //     $('#create_item_type_value').html(' - Hardware');
  //   }

  //   if(val == 'software') {
  //     $('#create_software').show();
  //     $('#create_hardware').hide();

  //     $('#create_item_type_value').html(' - Software');
  //   }

  //   else if(val == ''){
  //     $('#create_hardware , #create_software').hide();
  //     $('#create_item_type_value').html('');
  //   }

  // });

  // Toggle item loan details
  $('.show_item_loan_details').click(function(){
    $(this).parent().children('.exta_loan_info').toggle();
  });


  // $('.installed_on').typeahead({
  //   name: 'items' ,
  //   source : '/asset-tracking/public/data',
  //   autocomplete: true
  // });



$('.installed_on').typeahead({
    source: function (query, process) {
      console.log('running')
        // return $.get('/asset-tracking/public/data', { query: query }, function (data) {
        //     return process(data.options);
        // });
    }
});


});