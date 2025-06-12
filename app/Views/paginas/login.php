<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<h2>iniciar sesion</h2>
<form action="<?php base_url('/login/acceder/'); ?>" method="post">
<label >nombre de ususario</label>
<input type="text" name="nombre_usu" required>
<br>
<label >contraseña</label>
<input type="password" name="password" required>
<br>
<button type="submit">entrar</button>
</form>
<?php echo $this->endSection(); ?>