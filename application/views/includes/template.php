<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="robots" content="ALL" />
	<title>Codeigniter Scaffold</title>
	<link href="<?=base_url(); ?>/templates/default/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url(); ?>/templates/default/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<?php if(isset($errors)) { ?>
				<div class="alert alert-danger">
				<?php foreach ($errors as $error) { ?>
					<?= $error; ?>
				<?php } ?>
				</div>
			<?php } ?>
			<?php $this->load->view($content); ?>
		</div>
	</div>
	<script type="text/javascript" src="<?=base_url(); ?>/templates/default/js/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url(); ?>/templates/default/js/bootstrap.min.js"></script>
</body>
</html>