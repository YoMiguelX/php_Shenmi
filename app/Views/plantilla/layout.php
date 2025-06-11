<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(157, 193, 240);">
    
    
    <?php echo $this -> include('plantilla/menu'); ?>
     <br>
    <?php echo $this -> include('plantilla/formularios'); ?>
    <br>
    <?php echo $this -> include('plantilla/cards'); ?>
    <br>
    <?php echo $this-> renderSection("contenido"); ?>
    
  <br>
<footer>
    <p>Copyright @ <?php echo date("Y"); ?></p>
 </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>