<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<body>  
	<style type="text/css">
		body{
			background-image: url("imagenes/collage.jpeg");
                background-repeat:no-repeat;
                background-attachment: fixed;
                background-size: cover;
		}



h1{

	color: #ba2946 ;
	font-family: inherit;
	font-size: 40px;
	font-style: oblique
}
tr{
	color:#fffcfc;
	font-family: cursive;
}
div{
	font-family: cursive;
}


	</style>
	<div class="col-xs-12"  >
		<h1 style="font-weight: bold;" align="center">PRODUCTOS</h1>
		<div>
			

			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>

		<table class="table table-bordered ">
			<thead>
				<tr>
					<th>ID</th>
					<th>Código</th>
					<th>Producto</th>
					<th>Descripción/Características</th>
					<th>Precio</th>
					<th>Stock</th>
					<th>Editar</th>
					<th>Eliminar</th>
					<th>Imagen</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td scope="row"><?php echo $producto->id ?></td>
					<td><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->nombre ?></td>
					<td><?php echo $producto->caracteristica ?></td>
					<td><?php echo $producto->precioVenta ?></td>
					<td><?php echo $producto->stock?></td>

                    
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>

                     <td> <img src="<?php echo $producto->imagen; ?>" width='250'> </td>



				</tr>
				<?php } ?>
			</tbody>
		</table>
		</body>
	</div>
<?php include_once "pie.php" ?>