<?php
include "clases/Producto.php";

$producto = new Producto($_POST["nombre"], $_POST["origen"]);
$verificarProducto=json_decode(Producto::VerificarProductoJSON($producto));
$retornoJSON= '{"exito":false,"mensaje":"error '.$verificarProducto->mensaje.'"}';

if($verificarProducto->existe)
{
    setcookie($_POST["nombre"]."-".$_POST["origen"], $verificarProducto->mensaje ."  ". date("d/m/Y  G:i:s"));
    $retornoJSON='{"exito":true,"mensaje":"exito '.$verificarProducto->mensaje.'"}';
}

?>