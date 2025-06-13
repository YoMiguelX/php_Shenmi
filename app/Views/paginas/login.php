<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<h2>iniciar sesion</h2>
<?php if(session('mensaje')): ?>

    <!-- para mostrar mensajes de controlador login cuando las credenciales no sean correctas -->
<div class="alert alert-danger"><?= session('mensaje'); ?></div>
 <?php endif; ?>
<form method="post" action="<?= base_url('/login/acceder'); ?>" >
<label >nombre de ususario</label>
<input type="text" name="nombre_usu" required>
<br>
<label >contraseña</label>
<input type="password" name="password" required>
<br>
<button type="submit">entrar</button>
</form>
<?php echo $this->endSection(); ?>