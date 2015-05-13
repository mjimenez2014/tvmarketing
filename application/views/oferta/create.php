	<h1>Create</h1>
	<?= form_open('oferta/save','role="form"'); ?><?php if(validation_errors() != NULL && validation_errors() != '') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($oferta)?$oferta->id:''?>"/>
		
		<div class="form-group">
			<label for="empresa">Empresa:</label><br/>
			<input type="text" class="form-control" name="empresa" placeholder="<?php echo $empresa ?>" value="<?php echo $empresa ?>"/>
		</div>
		<div class="form-group">
			<label for="sucursal">Sucursal:</label><br/>
			<input type="text" class="form-control" name="sucursal" placeholder="<?php echo $sucursal ?>" value="<?php echo $sucursal ?>"/>
			
		</div>
		<div class="form-group">
			<label for="producto">Producto:</label><br/>
			<input type="text" class="form-control" name="producto" placeholder="Enter Producto" value="<?= isset($oferta)?$oferta->producto:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="precio">Precio:</label><br/>
			<input type="text" class="form-control" name="precio" placeholder="Enter Precio" value="<?= isset($oferta)?$oferta->precio:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="url_image">Url_image:</label><br/>
			<input type="text" class="form-control" name="url_image" placeholder="Enter Url_image" value="<?= isset($oferta)?$oferta->url_image:''?>"/>
			
		</div>
		<input type="submit" value="Save" class="btn btn-primary"/>
		<?= anchor('oferta/index','Back','class="btn btn-link"'); ?>
	</form>

