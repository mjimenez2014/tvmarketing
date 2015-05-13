	<h2>Sucursal</h2>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th colspan="2"></th>
		</tr>
		<?php foreach ($sucursal as $object) { ?>
		<tr>
			<td><?=$object->id ?></td>
			<td><?= $object->nombre ?></td>
			<td><?= $object->direccion ?></td>
			<td width="80"><?= anchor('/producto/buscaproducto/'.$object->idempresa .'/'.$object->id, 'Seleccionar','class="btn btn-warning"'); ?></td>
		</tr><?php } ?>
	</table>
	
