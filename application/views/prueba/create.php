	<h1>Create</h1>
	<?= form_open('prueba/save','role="form"'); ?><?php if(validation_errors() != NULL && validation_errors() != '') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($prueba)?$prueba->id:''?>"/>
		
		<div class="form-group">
			<label for="nombre">Nombre:</label><br/>
			<input type="text" class="form-control" name="nombre" placeholder="Enter Nombre" value="<?= isset($prueba)?$prueba->nombre:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="edad">Edad:</label><br/>
			<input type="text" class="form-control" name="edad" placeholder="Enter Edad" value="<?= isset($prueba)?$prueba->edad:''?>"/>
			
		</div>
		<input type="submit" value="Save" class="btn btn-primary"/>
		<?= anchor('prueba/index','Back','class="btn btn-link"'); ?>
	</form>

