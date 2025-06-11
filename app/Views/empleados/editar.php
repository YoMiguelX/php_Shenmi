<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<br>
<h2>editar empleado</h2>
<br>
<!-- b-form-enctype -->
<form method="post" action="<?php echo base_url('/empleados/actualizar/'.$empleado['ced_empleado']); ?>" enctype="multipart/form-data">
<div class="card">
        <div class="card-header">
           editar empleado
        </div>
        <div class="card-body">
            <h5 class="card-title">modifique los datos</h5>
            <p class="card-text">
            <!-- b-form-group-->    
            <div class="form-group">
                <label for="">cedula</label>
                <input  class="form-control" type="text" name="ced_empleado" 
                value="<?php $empleado['ced_empleado']; ?>" readonly>
            </div>
  <!-- b-form-group--> 
<div class="form-group">
    <label for="">nombre</label>
    <input  class="form-control" type="text" name="nombre_emp"
    value="<?php $empleado['nombre_emp']; ?>" >
</div>
<!-- b-form-group--> 
<div class="form-group">
    <label for="">apellido</label>
    <input  class="form-control" type="text" name="apellido_emp"
    value="<?php $empleado['apellido_emp']; ?>">
</div>
<!-- b-form-group--> 
<div class="form-group">
    <label for="">email</label>
    <input  class="form-control" type="text" name="email_emp"
    value="<?php $empleado['email_emp']; ?>">
</div>
<!-- b-form-group--> 
<div class="form-group">
    <label for="">direccion</label>
    <input  class="form-control" type="text" name="direccion_emp"
    value="<?php $empleado['direccion_emp']; ?>">
</div>
<!-- b-form-group--> 
<div class="form-group">
    <label for="">telefono</label>
    <input  class="form-control" type="text" name="telefono_emp"
    value="<?php $empleado['telefono_emp']; ?>">
</div>
<br>
<div class="form-group">
    <input  class="btn btn-success" type="submit" name="modificar">
</div>
            </p>
        </div>
    </div>
</form>
<?php echo $this->endSection(); ?>