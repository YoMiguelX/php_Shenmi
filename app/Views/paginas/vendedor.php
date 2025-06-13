<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<h2>bienvenido vendedor</h2>

<p>esta es tu pagina de inicio</p>
<br>
<a href="<?= base_url('/logout'); ?>"  class="btn btn-danger float-end">cerrar sesion</a>





<?php echo $this->endSection(); ?>