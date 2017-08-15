    $( document ).ready(function() {
       //agregar producto
    $( "#formularioAgregar" ).submit(function( event ) {
      event.preventDefault();
      var frm= $(this).serialize();
      //console.log(frm);
       $.ajax({
       type:"POST",
       url: "StatusController.php",
       data: frm,
       success: function(data){
        $('#formularioAgregar')[0].reset();
        $('#resp').html('Se Agrego Correctamente El Status').show(200).delay(2500).hide(200);
        //mostrar la respuesta del servidor
        $('#agregar-registros').html(data);
       }
        })
    });
  

});