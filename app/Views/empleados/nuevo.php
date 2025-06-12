<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<br>
<h2>nuevo empleado</h2>
<br>
<a href="<?php echo base_url('empleados/'); ?>"  class="btn btn-success">regresar</a>
<!-- b-form-enctype -->
<form method="post" action="<?php echo base_url('/empleados/guardar'); ?>" enctype="multipart/form-data">
<!-- b-card-header -->    
<div class="card">
        <div class="card-header">
           agregar empleado
        </div>
        <div class="card-body">
            <h5 class="card-title">ingrese todos los datos</h5>
            <p class="card-text">
            <!-- b-form-group-->    
            <div class="form-group">
                <label for="">cedula</label>
                <input  class="form-control" type="text" name="ced_empleado">
            </div>
  <!-- b-form-group--> 
<div class="form-group">
    <label for="">nombre</label>
    <input  class="form-control" type="text" name="nombre_emp">
</div>
<!-- b-form-group--> 
<div class="form-group">
    <label for="">apellido</label>
    <input  class="form-control" type="text" name="apellido_emp">
</div>
<!-- b-form-group--> 
<div class="form-group">
    <label for="">email</label>
    <input  class="form-control" type="text" name="email_emp">
</div>
<!-- b-form-group--> 
<div class="form-group">
    <label for="">direccion</label>
    <input  class="form-control" type="text" name="direccion_emp">
</div>
<!-- b-form-group--> 
<div class="form-group">
    <label for="">telefono</label>
    <input  class="form-control" type="text" name="telefono_emp">
</div>
<br>
<div class="form-group">

    <input  class="btn btn-success" type="submit" name="guardar">
</div>
<div class="form-group">

    <input  class="btn btn-warning" type="reset" name="cancelar">
</div>
            </p>
        </div>
    </div>
</form>
<?php echo $this->endSection(); ?>