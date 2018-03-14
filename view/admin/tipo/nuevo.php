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
					<h1 class="page-header"><?php echo isset($tipo) ? 'Actualizar' : 'Nuevo' ?> tipo | <a href="<?php url('tipo')?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Ver listado</a>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- INICIO CONTENIDO -->

			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="<?php url('tipo/agregar')?>" method="POST" role="form">
								<legend>Datos del tipo</legend>

								<?php if (isset($tipo)) {?>
									<input type="hidden" value="<?php echo $tipo->id ?>" name="tipo_id">
								<?php }?>

								<div class="form-group">
									<label for="usuario">Nombre</label>
									<input value="<?php echo isset($tipo) ? $tipo->tipo : '' ?>" required autofocus type="text" name="tipo" class="form-control" id="usuario" placeholder="Ingrese un nombre">
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