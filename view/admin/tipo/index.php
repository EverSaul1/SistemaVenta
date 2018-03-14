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
					<h1 class="page-header">Listado de Tipos | <a href="<?php url('tipo/nuevo')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo tipo</a>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- INICIO CONTENIDO -->

			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tipos as $tipo) {?>
					<tr>
						<td><?php echo $tipo->id ?></td>
						<td><?php echo $tipo->tipo ?></td>
						
						<td>
							<a class="btn btn-primary btn-sm" href="<?php url('tipo/editar/' . $tipo->id)?>">Editar</a>
							<button class="btn btn-danger btn-sm" onclick="confirmar('<?php url('tipo/eliminar/' . $tipo->id)?>')">Eliminar</button>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>

			<!--TERMINO CONTENIDO -->
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<?php include VISTA_RUTA . "admininclude/scripts.php"?>
</body>

</html>