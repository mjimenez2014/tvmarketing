	<h1>Create</h1>
	<?= form_open('producto/save','role="form"'); ?><?php if(validation_errors() != NULL && validation_errors() != '') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($producto)?$producto->id:''?>"/>
		
		<div class="form-group">
			<label for="nombre">Nombre:</label><br/>
			<input type="text" class="form-control" name="nombre" placeholder="Enter Nombre" value="<?= isset($producto)?$producto->nombre:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="plu">Plu:</label><br/>
			<input type="text" class="form-control" name="plu" placeholder="Enter Plu" value="<?= isset($producto)?$producto->plu:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="ean13">Ean13:</label><br/>
			<input type="text" class="form-control" name="ean13" placeholder="Enter Ean13" value="<?= isset($producto)?$producto->ean13:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="precio1">Precio1:</label><br/>
			<input type="text" class="form-control" name="precio1" placeholder="Enter Precio1" value="<?= isset($producto)?$producto->precio1:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="precio2">Precio2:</label><br/>
			<input type="text" class="form-control" name="precio2" placeholder="Enter Precio2" value="<?= isset($producto)?$producto->precio2:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="precio3">Precio3:</label><br/>
			<input type="text" class="form-control" name="precio3" placeholder="Enter Precio3" value="<?= isset($producto)?$producto->precio3:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="imagen">Imagen:</label><br/>
			<input type="text" class="form-control" name="imagen" placeholder="Enter Imagen" value="<?= isset($producto)?$producto->imagen:''?>"/>
			
		</div>
		<input type="submit" value="Save" class="btn btn-primary"/>
		<?= anchor('producto/index','Back','class="btn btn-link"'); ?>
	</form>

