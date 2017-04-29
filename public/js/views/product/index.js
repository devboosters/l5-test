$(function(){ 
  $("#product-add").submit(function(event) {        
        event.preventDefault();
      var $form = $( this ),
          url = $form.attr( 'action' ),
          _data = $form.serializeArray();          
      var posting = $.post( url, _data);
      posting.done(function( data ) {
        alert('success');
      });
    }); 
});   
