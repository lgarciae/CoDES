<?php
  require("conectDB.php");
  session_start();
  $fechaini = "";
  $fechafin = "";
  $mysqli = new mysqli('localhost', 'root', '', 'bdcdes');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content=" IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <title>Seguimiento CODES</title>

  </head>
  <body>
  <br>
  <div class="" align="center">
      <img src="./img/imagen.png" align="middle" class="img-responsive" alt="Imagen Corporativa" width="150" height="100">
  </div>
    <div class="container-fluid" id="contenido" style="margin: auto; width:400px; background-color:#fafafa; padding:auto; opacity:0.8; -webkit-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); -moz-box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75); box-shadow: 9px 15px 13px 0px rgba(0,0,0,0.75);">
      <h4><i class="fa fa-fw fa-area-chart"></i> Colaborador y proyecto asignado</h4>
      <hr>
      <form  action="displayProyectos.php" method="POST">
          <div class="form-group col-md-6">
            <label for="ferchaini">Desde.:</label>
            <input type="date" class="form-control" id="fechaini" name="fechaini" value="<?php echo date("Y-m-d");?>" autofocus>
          </div>
          <div class="form-group col-md-6">
            <label for="fechafin">Hasta.:</label>
            <input type="date" class="form-control" id="fechafin" name="fechafin" value="<?php echo date("Y-m-d");?>">
          </div>

          <div class="form-group col-md-12">
            <label for="colabora">Colaborador :</label>
            <select class="form-control" id="colabora" name="colabora">
                <option value="ANEL" >ING. ANEL FABIOLA GONZALEZ VAZQUEZ</option>
                <option value="ANA" >ING. ANA CARMEN GONZALEZ PULIDO</option>
                <option value="PATY" >LIC. CELIA PATRICIA PACHECO HERNANDEZ</option>
                <option value="BETY" >ING. BEATRIZ JANET IBARRA ESTRADA</option>
                <option value="LULU" >LIC. LOURDES RAMOS HERNANDEZ</option>
                <option value="EDNA" >ING. EDNA ADRIANA RAMOS SANCHEZ</option>
                <option value="JORGE" >ING. JORGE ADAN GUERRERO HERNANDEZ</option>
                <option value="JOSE" >ING. JOSE JUAN TELLEZ TORRES</option>
                <option value="PACO" >LIC. FRANCISCO MEZA BAEZ</option>
                <option value="PEPE" >LIC. JOSE MANUEL DE LA PENA CEBALLOS</option>
                <option value="VICTOR" >ING VICTOR MANUEL ELIAS DOMINGUEZ</option>
                <option value="PAULO" >ING. PAULO CESAR ESQUIVEL IZAGUIRRE</option>
                <option value="ARTURO" >ING. JORGE ARTURO CASTILLO GARCIA</option>
                <option value="SOPORTECEDI" >LUIS/FRANCISCO/ELOY</option>
                <option value="ROSY" >ING. ROSA INES ALEJO</option>
                <option value="JUAN" >ING. JUAN HERNANDEZ LOPEZ</option>
                <option value="DAVID" >ING. DAVID GONZALEZ ROMO</option>
                <option value="LUIS" >ING. LUIS ARMANDO GARCIA ELISEO</option>
            </select>
          </div>
          <p>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Generar">
            <a href="./menuAdmin.php" class="btn btn-danger pull-right"> Salir</a>
          </div>
          <br>
          </form>
      </div>
    <script>src="js/jquery.min.js"> </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <hr>
    <footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>
  </body>
</html>
