	<h2>Prueba</h2>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th colspan="2"></th>
		</tr>
		<?php foreach ($prueba as $object) { ?>
		<tr>
			<td><?=$object->id ?></td>
			<td><?= $object->nombre ?></td>
			<td><?= $object->edad ?></td>
			<td width="80"><?= anchor('/prueba/edit/'.$object->id, 'Edit','class="btn btn-warning"'); ?></td>
			<td width="80"><?= anchor('/prueba/destroy/'.$object->id, 'Destroy','class="btn btn-danger"'); ?></td>
		</tr><?php } ?>
	</table>
	
	<?= anchor('/prueba/create','Create','class="btn btn-primary"'); ?>
