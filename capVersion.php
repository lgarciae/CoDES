<?php
  require("cabecera.php");
  require("conectDB.php");
  session_start();
?>

  <body oncontextmenu="return false;">
    <br>
    <div class="" align="center">
        <img src="./img/imagen.png" align="middle" class="img-responsive" alt="Imagen Corporativa" width="150" height="100">
    </div>
    <div class="container" style="margin: auto; width:350px; background-color:#ededed; padding:auto; opacity:0.8; -webkit-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); -moz-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75);">
      <form method="post" action="insertVersion.php">
        <div class="encabezado">
          <h3>Crear Nueva Versión</h3>
          <hr>
        </div>

        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required autofocus>
        </div>

        <div class="form-group">
          <label for="fecha">Fecha Aplicación:</label>
          <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>

        <div class="form-group">
          <label for="observa">Observaciones.:</label>
          <input type="text" class="form-control" id="observa" name="observa" required>
        </div>

        <div class="form-group">
          <label for="plataforma">Aplicado en:</label>
          <select id="plataforma" name="plataforma" class="form-control" required="required">
            <option value="">Seleccione:</option>
                <?php
                  $query = $conn->prepare("SELECT * FROM tblplataforma");
                  $query->execute();
                  $data = $query->fetchAll();

                  foreach ($data as $valores):
                      echo '<option value="'.$valores["plataforma"].'">'.$valores["plataforma"].'</option>';
                  endforeach;
                ?>
          </select>
        </div>

        <button type="submit" class="btn btn-primary" name="enviar">Crear</button>
        <button type="reset" class="btn btn-default" name="button">Limpiar</button>
        <!--<button type="reset" class="btn btn-default" name="borrar">Limpiar</button>-->
        <a class="btn btn-danger pull-right" href="./versiones.php">Salir</a>
        <hr>

      </form>
    </div>
    <footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>
  </body>
</html>
