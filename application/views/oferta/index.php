	<h2>Oferta</h2>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Empresa</th>
			<th>Sucursal</th>
			<th>Producto</th>
			<th>Precio</th>
			<th>Url_image</th>
			<th colspan="2"></th>
		</tr>
		<?php foreach ($oferta as $object) { ?>
		<tr>

			<td><?=$object->id ?></td>
            <td><?= $object->empresa ?></td>
			<td><?= $object->sucursal ?></td>
			<td><?= $object->producto ?></td>
			<td><?= $object->precio ?></td>
			<td><?= $object->url_image ?></td>
			<td width="80"><?= anchor('/oferta/edit/'.$object->id, 'Edit','class="btn btn-warning"'); ?></td>
			<td width="80"><?= anchor('/oferta/destroy/'.$object->id, 'Destroy','class="btn btn-danger"'); ?></td>
		</tr><?php } ?>
	</table>
	
	<?= anchor('/oferta/create','Create','class="btn btn-primary"'); ?>
