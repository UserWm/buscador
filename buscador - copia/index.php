<?php
include_once 'conf/conf.php';
$selectDeDatos="SELECT ProductID, Name, ProductNumber,Color, SafetyStockLevel FROM product";
$ejecutar=mysqli_query($conexion,$selectDeDatos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Buscador de productos</title>
</head>
<body>
    <div class="container">
        <div class="control-buscador">
        <input  class="form-control col-4" type="text" name="producto" id="producto" placeholder="Nombre Producto">
        <br>
        <!-- <button class="btn btn-primary col-2" onclick="buscar()">Buscar</button> -->
        </div>
 
    <div class="contenedor-tabla">
        <table class="table">
            <tr>
                <th>Id Producto</th>
                <th>Nombre</th>
                <th>N° Producto</th>
                <th>Color</th>
                <th>Existencia</th>
            </tr>
            <tbody id="contenido">
                    <?php 
                    while($data=mysqli_fetch_array($ejecutar)){
                    echo "
                    <tr>
                    <td>".$data['ProductID']."</td>
                    <td>".$data['Name']."</td>
                    <td>".$data['ProductNumber']."</td>
                    <td>".$data['Color']."</td>
                    <td>".$data['SafetyStockLevel']."</td>
                    </tr>
                    ";
                    }
                    ?>
            </tbody>
        </table>
    </div>
    </div>

</body>
</html>
<script src="js/ajaxBuscar"></script>
<?php
mysqli_close($conexion);
?>