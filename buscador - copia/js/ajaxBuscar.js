$(document).on('keyup', '#producto', function()
{
    var nombreProducto=$(this).val();

    $.ajax({
        url: 'proceso.php',
        type: 'POST',
        datatype: 'JSON',
        data:{nombreProducto:nombreProducto},
        success: function(res){
         
            $('#contenido').html(res);
        }
        
        })
});
