	<h1>Create</h1>
	<?= form_open('sucursal/save','role="form"'); ?><?php if(validation_errors() != NULL && validation_errors() != '') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($sucursal)?$sucursal->id:''?>"/>
		
		<div class="form-group">
			<label for="nombre">Nombre:</label><br/>
			<input type="text" class="form-control" name="nombre" placeholder="Enter Nombre" value="<?= isset($sucursal)?$sucursal->nombre:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="direccion">Direccion:</label><br/>
			<input type="text" class="form-control" name="direccion" placeholder="Enter Direccion" value="<?= isset($sucursal)?$sucursal->direccion:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="idempresa">Idempresa:</label><br/>
			<input type="text" class="form-control" name="idempresa" placeholder="Enter Idempresa" value="<?= isset($sucursal)?$sucursal->idempresa:''?>"/>
			
		</div>
		<input type="submit" value="Save" class="btn btn-primary"/>
		<?= anchor('sucursal/index','Back','class="btn btn-link"'); ?>
	</form>

