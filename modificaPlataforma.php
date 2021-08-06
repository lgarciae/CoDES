<?php
    require("cabecera.php");
    require("conectDB.php");
    $post = get_PlataformaByID($_GET['id']);
    session_start();
?>
<br>
<!--<body>-->
<div class="container" style="margin: auto; width:60%; background-color:#ededed; padding:auto; opacity:0.8; -webkit-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); -moz-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75);">
  <div class="row" style="padding:5px 15px 5px 15px;">
    <form method="post"  id="frmPlataformas">
    	<div class="encabezado">
        <h3 style="margin:auto;">Modificar Nombre de la Plataforma</h3>
        <hr>
      </div>

				<input type="hidden" name="id" value="<?php echo $post['plataformaID']; ?>">

        <div class="form-group">
          <label for="nombre">Nombre :</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $post['plataforma'];?>" placeholder="Nombre" required autofocus>
        </div>

        <button type="submit" class="btn btn-success" id="enviar" name="enviar">Actualizar</button>
        <p class="text text-right"><a class="btn btn-danger" href="./plataformas.php">Salir</a></p>

      </form>
  </div>
</div>

<script src="jquery-3.4.1.min.js"></script>
<footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>

<script type="text/javascript">
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos=$('#frmPlataformas').serialize();
      $.ajax({
            type   :"POST",
            url    :"actualizaPlataforma.php",
            data   :datos,
            success:function(r){
              if (r=1){
                alert("El dato fue actualizado de manera exitosa !!!");
                location.href='./plataformas.php';
              }else{
                alert("Ocurrio un error al intentar grabar los datos en el servidor !!!");
                location.href='./plataformas.php';
              }
            }
      });
      return false;
    });
  });
</script>
