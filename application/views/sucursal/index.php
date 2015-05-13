	<h2>Sucursal</h2>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Idempresa</th>
			<th colspan="2"></th>
		</tr>
		<?php foreach ($sucursal as $object) { ?>
		<tr>
			<td><?=$object->id ?></td>
			<td><?= $object->nombre ?></td>
			<td><?= $object->direccion ?></td>
			<td><?= $object->idempresa ?></td>
			<td width="80"><?= anchor('/sucursal/edit/'.$object->id, 'Edit','class="btn btn-warning"'); ?></td>
			<td width="80"><?= anchor('/sucursal/destroy/'.$object->id, 'Destroy','class="btn btn-danger"'); ?></td>
		</tr><?php } ?>
	</table>
	
	<?= anchor('/sucursal/create','Create','class="btn btn-primary"'); ?>
