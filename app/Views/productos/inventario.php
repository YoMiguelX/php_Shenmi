<?php echo $this->extend('plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>


    <h2>productos</h2>
    <br>
    <table class="table">
        <thead >
            <caption>Productos</caption>
            <th>codigo de barras:</th>
            <th>nobre:</th>
            <th>stock:</th>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
            <tr>
               
                   <td>  <?php echo $producto->codigo_barra; ?>     </td>
                   <td>  <?php echo $producto->nombre_prod; ?>     </td>
                   <td>  <?php echo $producto->stock; ?>     </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>

<?php echo $this->endSection(); ?>