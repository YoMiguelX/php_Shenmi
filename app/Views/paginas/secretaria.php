<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>



<h2>bienvenido secretaria/o</h2>

<p>esta es tu pagina de inicio</p>


<a href="<?= base_url('/logout'); ?>"  class="btn btn-danger float-end">cerrar sesion</a>




<?php echo $this->endSection(); ?>