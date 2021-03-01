<?php
    require("cabecera.php");
    require("conectDB.php");
    $post = get_UsuarioByID($_GET['id']);
    session_start();
?>
<br>
<!--<body>-->
<div class="container" style="margin: auto; width:60%; background-color:#fff; padding:auto; opacity:0.8; -webkit-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); -moz-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75);">
  <div class="row" style="padding:5px 15px 5px 15px;">
    <form method="post"  id="frmUsuarios">
    	<div class="encabezado">
        <h3 style="margin:auto;">Modificar Usuario</h3>
        <hr>
      </div>

				<input type="hidden" name="id" value="<?php echo $post['id_usuario']; ?>">

        <div class="form-group">
          <label for="nombre">Nombre Completo.:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $post['us_username'];?>" placeholder="Nombre" required autofocus>
        </div>

        <div class="form-group">
          <label for="correo">Correo Electrónico.:</label>
          <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $post['us_correo'];?>" placeholder="Correo Electrónico" required>
        </div>

        <div class="form-group">
          <label for="contrasena">Password.:</label>
          <input type="password" class="form-control" id="contrasena" name="contrasena" value="<?php echo $post['us_password'];?>" placeholder="Password" required>
        </div>

        <div class="form-group">
          <label for="role">Rol</label>
            <select id="role" name="role" class="form-control">
              <option value="1" selected>ADMINISTRADOR</option>
              <option value="2" >USUARIO FINAL</option>
            </select>
        </div>

		    <button type="submit" class="btn btn-success" id="enviar" name="enviar">Actualizar</button>
        <p class="text text-right"><a class="btn btn-danger" href="./usuarios.php">Salir</a></p>

      </form>
  </div>
</div>
<script src="jquery-3.4.1.min.js"></script>
<footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>
</body>

<script type="text/javascript">
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos=$('#frmUsuarios').serialize();
      $.ajax({
            type   :"POST",
            url    :"actualizaUsuario.php",
            data   :datos,
            success:function(r){
              if (r=1){
                alert("El usuario fue actualizado de manera exitosa !!!");
                location.href='./usuarios.php';
              }else{
                alert("Ocurrio un error al intentar grabar los datos en el servidor !!!");
                location.href='./usuarios.php';
              }
            }
      });
      return false;
    });
  });
</script>
