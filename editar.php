 
 <?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	body{
			background-image: url("imagenes/fondoweb.jpeg");
                background-repeat:no-repeat;
                background-attachment: fixed;
                background-size: cover;
		}

h1{

	color: white;
	font-family: cursive;
}

label{
	color: white;
}

</style>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="codigo">Código de barras:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

			<label for="nombre">Nombre del Producto:</label>
			<textarea required id="nombre" name="nombre" cols="30" rows="5" class="form-control"><?php echo $producto->nombre ?></textarea>

			<label for="precioVenta">Precio de venta:</label>
			<input value="<?php echo $producto->precioVenta ?>" class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

			<label for="caracteristica">Descripción/Características:</label>
			<textarea required id="caracteristica" name="caracteristica" cols="30" rows="5" class="form-control"><?php echo $producto->caracteristica ?></textarea>

            <label for="imagen">imagen </label>
		
           <input type="file" name="imagen" id="imagen" value="">




			<label for="stock">Stock:</label>
			<input value="<?php echo $producto->stock ?>" class="form-control" name="stock" required type="text" id="stock" placeholder="Cantidad o stock">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
</body>
</html>
<?php include_once "pie.php" ?>
