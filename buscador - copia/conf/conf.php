<?php
$server="localhost";
$user="root";
$pwd="";
$bd="adventureworks";

$conexion= new mysqli($server,$user,$pwd,$bd);
if($conexion){
    // echo"bien";
}else{
    // echo "mal";
}

?>