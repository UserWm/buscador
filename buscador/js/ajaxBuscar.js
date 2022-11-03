function buscar(){
    var nombreProducto= $('#producto').val();
    $.ajax({
        url: 'proceso.php',
        type: 'POST',
        data:{nombreProducto:nombreProducto},
        success: function(res){
            $('#contenido').html(res);
        }
        
        })
}