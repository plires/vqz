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

	<div class="content_consent form-check">
		<p class="consent_info">
			Los datos que ingreses en este formulario se usan exclusivamente para responder tu consulta y, si corresponde, contactarte por el medio que elijas (teléfono o email). No se ceden a terceros. Podés ejercer tus derechos de acceso, rectificación o eliminación cuando quieras.
		</p>
		<input
			required="required"
			type="checkbox"
			class="form-check-input"
			id="consent_privacy"
			name="consent_privacy"
			value="1">
		<label class="form-check-label" for="consent_privacy">
			He leído y acepto la <a href="politica-privacidad.php" target="_blank" rel="noopener">Política de Privacidad</a> *
		</label>
		<div class="invalid-feedback">
			Tenés que aceptar la Política de Privacidad para continuar
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