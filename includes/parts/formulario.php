<?php
// Generar token de tiempo al cargar el formulario
$formToken = bin2hex(random_bytes(16));
$formTime = time();
?>

<form id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

	<!-- Token de seguridad y tiempo -->
	<input name="form_token" type="hidden" value="<?= $formToken ?>">
	<input name="form_time" type="hidden" value="<?= $formTime ?>">

	<!-- HONEYPOT: Campos invisibles trampa para bots -->
	<input name="website" type="text" value="" style="display:none !important; position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">
	<input name="url_check" type="text" value="" style="display:none !important; position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">

	<input name="origin" type="hidden" value="Formulario de Contacto">

	<div class="inputBox">
		<input
			required="required"
			type="text"
			name="name"
			value="<?= $name ?>">
		<span>Nombre *</span>
		<i></i>
		<div class="invalid-feedback">
			Ingresá tu nombre
		</div>
	</div>

	<div class="inputBox">
		<input
			required="required"
			type="email"
			name="email"
			value="<?= $email ?>">
		<span>Email *</span>
		<i></i>
		<div class="invalid-feedback">
			Ingresá tu email
		</div>
	</div>

	<div class="inputBox">
		<input
			required="required"
			type="text"
			name="phone"
			value="<?= $phone ?>">
		<span>Teléfono *</span>
		<i></i>
		<div class="invalid-feedback">
			Ingresá tu teléfono
		</div>
	</div>

	<div class="inputBox">
		<textarea required="required" name="comments"><?= $comments ?></textarea>
		<span>Comentarios *</span>
		<i></i>
		<div class="invalid-feedback">
			Ingresá tu consulta
		</div>
	</div>

	<div class="content_button">
		<button type="button" id="send" class="btn btn-primary">
			Enviar
			<div id="spinner" class="spinner-border spinner-border-sm" role="status">
				<span class="visually-hidden"></span>
			</div>
		</button>
	</div>

</form>