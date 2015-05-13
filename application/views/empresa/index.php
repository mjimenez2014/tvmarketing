	<h2>Empresa</h2>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Rut</th>
			<th>Rzsocial</th>
			<th colspan="2"></th>
		</tr>
		<?php foreach ($empresa as $object) { ?>
		<tr>
			<td><?=$object->id ?></td>
			<td><?= $object->rut ?></td>
			<td><?= $object->rzsocial ?></td>
			<td width="80"><?= anchor('/empresa/edit/'.$object->id, 'Edit','class="btn btn-warning"'); ?></td>
			<td width="80"><?= anchor('/empresa/destroy/'.$object->id, 'Destroy','class="btn btn-danger"'); ?></td>
		</tr><?php } ?>
	</table>
	
	<?= anchor('/empresa/create','Create','class="btn btn-primary"'); ?>
