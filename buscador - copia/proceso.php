<?php
include_once'conf/conf.php';
$nombreProducto= $_POST['nombreProducto'];

$buscar="SELECT ProductID, Name, ProductNumber,Color, SafetyStockLevel 
FROM product
WHERE Name LIKE '%$nombreProducto%'
ORDER BY(ProductID) ASC";
$ejecutar=mysqli_query($conexion,$buscar);
if($ejecutar){
while($databusqueda= mysqli_fetch_array($ejecutar)){
        $tbody= "
        <tr>
        <td>".$databusqueda['ProductID']."</td>
        <td>".$databusqueda['Name']."</td>
        <td>".$databusqueda['ProductNumber']."</td>
        <td>".$databusqueda['Color']."</td>
        <td>".$databusqueda['SafetyStockLevel']."</td>
        </tr>
        ";
        echo json_encode($tbody);
}
}else{
    echo "No se encontraron registros";
}
?>
