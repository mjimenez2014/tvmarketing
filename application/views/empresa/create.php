	<h1>Create</h1>
	<?= form_open('empresa/save','role="form"'); ?><?php if(validation_errors() != NULL && validation_errors() != '') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($empresa)?$empresa->id:''?>"/>
		
		<div class="form-group">
			<label for="rut">Rut:</label><br/>
			<input type="text" class="form-control" name="rut" placeholder="Enter Rut" value="<?= isset($empresa)?$empresa->rut:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="rzsocial">Rzsocial:</label><br/>
			<input type="text" class="form-control" name="rzsocial" placeholder="Enter Rzsocial" value="<?= isset($empresa)?$empresa->rzsocial:''?>"/>
			
		</div>
		<input type="submit" value="Save" class="btn btn-primary"/>
		<?= anchor('empresa/index','Back','class="btn btn-link"'); ?>
	</form>

