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
		<?php
		$login = array(
			'name'	=> 'login',
			'id'	=> 'login',
			'value' => set_value('login'),
			'maxlength'	=> 80,
			'size'	=> 30,
			'class' => 'form-control',
			);
		if ($login_by_username AND $login_by_email) {
			$login_label = 'Nombre de Usuario';
		} else if ($login_by_username) {
			$login_label = 'Login';
		} else {
			$login_label = 'Email';
		}
		$password = array(
			'name'	=> 'password',
			'id'	=> 'password',
			'size'	=> 30,
			'class' => 'form-control',
			);
		$remember = array(
			'name'	=> 'remember',
			'id'	=> 'remember',
			'value'	=> 1,
			'checked'	=> set_value('remember'),
			'style' => 'margin:0;padding:0',
			'class' => 'checkbox',
			);
		$captcha = array(
			'name'	=> 'captcha',
			'id'	=> 'captcha',
			'maxlength'	=> 8,
			);
		$boton = array(
			'class'	=> 'btn btn-primary btn-lg btn-block',
			'type'	=> 'submit',
			'content' => 'Enviar'
			);
			?>

			<?php echo form_open($this->uri->uri_string()); ?>


			<div class="form-group">
				<?php echo form_label($login_label, $login['id']); ?>
				<?php echo form_input($login); ?>
				<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
			</div>
			<div class="form-group">
				<?php echo form_label('Contraseña', $password['id']); ?>
				<?php echo form_password($password); ?>
				<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
			</div>

			<?php if ($show_captcha) {
				if ($use_recaptcha) { ?>

				<div id="recaptcha_image"></div>

				<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
				<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
				<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>



				<div class="recaptcha_only_if_image">Enter the words above</div>
				<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>

				<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
				<?php echo form_error('recaptcha_response_field'); ?>
				<?php echo $recaptcha_html; ?>

				<?php } else { ?>


				<p>Enter the code exactly as it appears:</p>
				<?php echo $captcha_html; ?>


				<?php echo form_label('Confirmation Code', $captcha['id']); ?>
				<?php echo form_input($captcha); ?>
				<?php echo form_error($captcha['name']); ?>

				<?php }
			} ?>

			<div class="form-group">

				<?php echo form_checkbox($remember); ?>


				<?php echo form_label('Recordar', $remember['id']); ?>
<!-- 			<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
		<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>
	-->		</div>
	<div class="form-group">
		<?php echo form_button($boton); ?>
		<?php echo form_close(); ?>
		<div class="form-group">

			<script type="text/javascript" src="<?=base_url(); ?>/templates/default/js/jquery.js"></script>
			<script type="text/javascript" src="<?=base_url(); ?>/templates/default/js/bootstrap.min.js"></script>
		</div>
	</body>
	</html>