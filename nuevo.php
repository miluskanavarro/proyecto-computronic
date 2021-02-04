<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["codigo"]) || !isset($_POST["nombre"]) || !isset($_POST["precioVenta"]) || !isset($_POST["caracteristica"]) || !isset($_POST["stock"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$precioVenta = $_POST["precioVenta"];
$caracteristica = $_POST["caracteristica"];
$stock = $_POST["stock"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(codigo, nombre, precioVenta, caracteristica, stock) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$codigo, $nombre, $precioVenta, $caracteristica, $stock]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>