<!DOCTYPE html>
<html lang="en">
<head>
	<?php include VISTA_RUTA . "admininclude/head.php"?>
</head>
<body>
	<div id="wrapper">
		<?php include VISTA_RUTA . "admininclude/menu.php"?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><?php echo isset($marca) ? 'Actualizar' : 'Nuevo' ?> marca | <a href="<?php url('marca')?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Ver listado</a>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- INICIO CONTENIDO -->

			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="<?php url('marca/agregar')?>" method="POST" role="form">
								<legend>Datos de la marca</legend>

								<?php if (isset($marca)) {?>
									<input type="hidden" value="<?php echo $marca->id ?>" name="marca_id">
								<?php }?>

								<div class="form-group">
									<label for="usuario">Nombre</label>
									<input value="<?php echo isset($marca) ? $marca->marca : '' ?>" required autofocus type="text" name="marca" class="form-control" id="usuario" placeholder="Ingrese un nombre">
								</div>

								

								<button type="submit" class="btn btn-primary">Guardar</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!--TERMINO CONTENIDO -->
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<?php include VISTA_RUTA . "admininclude/scripts.php"?>
</body>

</html>