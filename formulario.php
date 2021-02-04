<?php include_once "encabezado.php" ?>
<BODY>
	<style type="text/css">
		
		body{
			background-image: url("imagenes/FondoNPr.jpeg");
                background-repeat:no-repeat;
                background-attachment: fixed;
                background-size: cover;
		}
		h1{
			color: #d9b8bf;
			font-family: cursive;
		}
		label{
			color: #d9b8bf;
			font-family: cursive;
		}
		table{
			background-color: #ff30f8;
		}
	</style>

<div class="col-xs-12">

	<h1 >Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		
		<label for="codigo">Código de barras:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
		
		<label for="nombre">Nombre del Producto:</label>
		<textarea required id="nombre" name="nombre" cols="30" rows="5" class="form-control"></textarea>

		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

		<label for="caracteristica">Descripción/Características:</label>
		<textarea required id="caracteristica" name="caracteristica" cols="50" rows="5" class="form-control"></textarea>

         <label for="imagen">Imagen </label>
		
        <input type="file" name="{{'imagen'}}" id="imagen" value="">






		<label for="stock">Stock:</label>
		<input class="form-control" name="stock" required type="text" id="stock" placeholder="Cantidad o stock">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>

</BODY>