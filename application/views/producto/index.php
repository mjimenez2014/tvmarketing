	<h2>Producto</h2>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Plu</th>
			<th>Ean13</th>
			<th>Precio1</th>
			<th>Precio2</th>
			<th>Precio3</th>
			<th>Imagen</th>
			<th colspan="2"></th>
		</tr>
		<?php foreach ($producto as $object) { ?>
		<tr>
			<td><?=$object->id ?></td>
			<td><?= $object->nombre ?></td>
			<td><?= $object->plu ?></td>
			<td><?= $object->ean13 ?></td>
			<td><?= $object->precio1 ?></td>
			<td><?= $object->precio2 ?></td>
			<td><?= $object->precio3 ?></td>
			<td><?= $object->imagen ?></td>
			<td width="80"><?= anchor('/producto/edit/'.$object->id, 'Edit','class="btn btn-warning"'); ?></td>
			<td width="80"><?= anchor('/producto/destroy/'.$object->id, 'Destroy','class="btn btn-danger"'); ?></td>
		</tr><?php } ?>
	</table>
	
	<?= anchor('/producto/create','Create','class="btn btn-primary"'); ?>
