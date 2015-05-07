$(document).ready(function(){

    // Toggle item loan details
    $('.show_item_loan_details').click(function(){
      $(this).parent().children('.exta_loan_info').toggle();
    });

    $( ".installed_on" ).autocomplete({
      source: "/asset-tracking/public/data",
      minLength: 2,
      select : function( event , ui ) {
        $('#installed_on').val( ui.item.id )
      },
      response : function( event , ui ){
      }
    });

    $('#search_kit_items').autocomplete({
      source : "/asset-tracking/public/data",
      select : function( event , ui ) {
        $('#kit-items > .list-group').append( '<a href="#" id="kit_item_'+ui.item.id+'" class="list-group-item single-kit-item">' + ui.item.value + '</a>' );
        $('#kit-items > .list-group').append( '<input type="hidden" id="hidden_item_'+ui.item.id+'" name="kit_items[]" value="'+ ui.item.id +'">');
        $(this).val(''); 

        $('#kit_item_'+ui.item.id).click(function(){
          // $(this).remove();
          id = this.id.replace('kit_item_','');
          $('#kit_item_'+id+',#hidden_item_'+id).remove();
        });

        return false;
      },
      response : function( event , ui ) {
      }
    });

});