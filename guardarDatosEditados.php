<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["caracteristica"]) || 
	!isset($_POST["precioVenta"]) || 
	!isset($_POST["stock"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$caracteristica = $_POST["caracteristica"];
$precioVenta = $_POST["precioVenta"];
$stock = $_POST["stock"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET codigo = ?, nombre = ?, caracteristica = ?, precioVenta = ?, stock = ? WHERE id = ?;");
$resultado = $sentencia->execute([$codigo, $nombre, $caracteristica, $precioVenta, $stock, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>