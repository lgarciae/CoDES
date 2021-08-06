<?php
  require("cabecera.php");
?>

  <body oncontextmenu="return false;">
    <br>
    <div class="" align="center">
        <img src="./img/imagen.png" align="middle" class="img-responsive" alt="Imagen Corporativa" width="150" height="100">
    </div>
    <div class="container" style="margin: auto; width:350px; background-color:#ededed; padding:auto; opacity:0.8; -webkit-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); -moz-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75);">
      <form method="post" action="insertPlataforma.php">

        <div class="encabezado">
          <h3>Crear Nueva Plataforma</h3>
          <hr>
        </div>

        <div class="form-group">
          <label for="nombre">Nombre :</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required autofocus>
        </div>

        <button type="submit" class="btn btn-primary" name="enviar">Crear </button>
        <button type="reset" class="btn btn-default" name="button">Limpiar</button>
        <!--<button type="reset" class="btn btn-default" name="borrar">Limpiar</button>-->
        <a class="btn btn-danger pull-right" href="./plataformas.php">Salir</a>
        <hr>

      </form>
    </div>
    <footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>
  </body>
</html>
