<?php
    require("cabecera.php");
    require("conectDB.php");
    $post = get_VersionByID($_GET['id']);
    session_start();
?>
<br>
<!--<body>-->
<div class="container" style="margin: auto; width:350px%; background-color:#ededed; padding:auto; opacity:0.8; -webkit-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); -moz-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75);">
  <div class="row" style="padding:5px 15px 5px 15px;">
    <form method="post"  id="frmVersiones">
    	<div class="encabezado">
        <h3 style="margin:auto;">Modificar Datos de la Versión</h3>
        <hr>
      </div>

				<input type="hidden" name="id" value="<?php echo $post;?>">

        <div class="form-group">
          <label for="nombre">Nombre :</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $post['nombreVersion'];?>" required autofocus>
        </div>

        <div class="form-group">
          <label for="fecha">Fecha Aplicación:</label>
          <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $post['fechaVersion'];?>" required>
        </div>

        <div class="form-group">
          <label for="observacion">Observaciones.:</label>
          <input type="text" class="form-control" id="observacion" name="observacion" value="<?php echo $post['observacion'];?>" required>
        </div>

        <div class="form-group">
          <label for="aplicado">Aplicado en:</label> <b><?php echo $post['aplicado'];?></b>
          <select id="aplicado" name="aplicado" class="form-control" required>
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

        <button type="submit" class="btn btn-success" id="enviar" name="enviar">Actualizar</button>
        <p class="text text-right"><a class="btn btn-danger" href="./versiones.php">Salir</a></p>

      </form>
  </div>
</div>

<script src="jquery-3.4.1.min.js"></script>
<footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>

<script type="text/javascript">
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos=$('#frmVersiones').serialize();
      $.ajax({
            type   :"POST",
            url    :"actualizaVersion.php",
            data   :datos,
            success:function(r){
              if (r=1){
                alert("Los datos de la versión fueron actualizados de manera exitosa !!!");
                location.href='./versiones.php';
              }else{
                alert("Ocurrio un error al intentar grabar los datos en el servidor !!!");
                location.href='./versiones.php';
              }
            }
      });
      return false;
    });
  });
</script>
