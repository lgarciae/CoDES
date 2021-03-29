<?php require("conectDB.php"); session_start(); ?>
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
    <title>CoDES Dashboard</title>

    <style media="screen">
      #contenido div {margin: 5px 0px;}
    </style>

  </head>
  <body>
    <div class="container-fluid" id="contenido">
      <br>
      <a href="./menuAdmin.php" class="btn btn-danger pull-right"> Salir</a>
      <h1><i class="fa fa-fw fa-area-chart"></i> CoDES Kanboard</h1>
      Fecha Inicial <input type="date" name="fechaini" value="">
      Fecha Final <input type="date" name="fechafin" value="">
      <input type="submit" name="" value="Generar">
      <hr>

      <div class="col-md-2 text-center" style="background-color: #fafafa; color: black; padding: 10px; border-radius: 10px; box-shadow: 10px 10px 5px grey;">
        <h4>ANÁLISIS</h4>
        <h1><?php
          $sql  = ("SELECT COUNT(*) id_proyecto FROM proyectos WHERE pr_status = 'ANALISIS DE REQUERIMIENTOS' AND pr_baja <> 1 ");
          $result = $conn->query($sql);
          try {
              $total = $result->fetchColumn();
              echo $total;
          } catch (\Exception $e) {
              echo $sql . "<br>" . $e->getMessage();
          }
        ?></h1>
      </div>

      <div class="col-md-2 text-center" style="background-color: lightgray; color: black; padding: 10px; border-radius: 10px; box-shadow: 10px 10px 5px grey;">
        <h4>DISEÑO/DESARROLLO</h4>
        <h1><?php
          $sql  = ("SELECT COUNT(*) id_proyecto FROM proyectos WHERE pr_status = 'DISEÑO' OR pr_status='DESARROLLO' AND pr_baja <> 1 ");
          $result = $conn->query($sql);
          try {
              $total = $result->fetchColumn();
              echo $total;
          } catch (\Exception $e) {
              echo $sql . "<br>" . $e->getMessage();
          }
        ?>
      </div></h1>

      <div class="col-md-2 text-center" style="background-color: gray; color: black; padding: 10px; border-radius: 10px; box-shadow: 10px 10px 5px grey;">
        <h4>PRUEBAS</h4>
        <h1><?php
          $sql  = ("SELECT COUNT(*) id_proyecto FROM proyectos WHERE pr_status = 'PRUEBAS' AND pr_baja <> 1 ");
          $result = $conn->query($sql);
          try {
              $total = $result->fetchColumn();
              echo $total;
          } catch (\Exception $e) {
              echo $sql . "<br>" . $e->getMessage();
          }
        ?></h1>
      </div>

      <div class="col-md-2 text-center" style="background-color: red; color: white; padding: 10px; border-radius: 10px; box-shadow: 10px 10px 5px grey;">
        <h4>DETENIDO</h4>
        <h1><?php
          $sql  = ("SELECT COUNT(*) id_proyecto FROM proyectos WHERE pr_status = 'DETENIDO' AND pr_baja <> 1");
          $result = $conn->query($sql);
          try {
              $total = $result->fetchColumn();
              echo $total;
          } catch (\Exception $e) {
              echo $sql . "<br>" . $e->getMessage();
          }
        ?>
      </div></h1>

      <div class="col-md-2 text-center" style="background-color: lightgreen; color: white; padding: 10px; border-radius: 10px; box-shadow: 10px 10px 5px grey;">
        <h4>ACTUALIZACIÓN</h4>
        <h1><?php
          $sql  = ("SELECT COUNT(*) id_proyecto FROM proyectos WHERE pr_status = 'ACTUALIZACION' AND pr_baja <> 1");
          $result = $conn->query($sql);
          try {
              $total = $result->fetchColumn();
              echo $total;
          } catch (\Exception $e) {
              echo $sql . "<br>" . $e->getMessage();
          }
        ?>
      </div></h1>

      <div class="col-md-2 text-center" style="background-color: green; color: white; padding: 10px; border-radius: 10px; box-shadow: 10px 10px 5px grey;" >
        <h4>PRODUCCIÓN</h4>
        <h1><?php
          $sql  = ("SELECT COUNT(*) id_proyecto FROM proyectos WHERE pr_status = 'PRODUCCION' AND pr_baja <> 1");
          $result = $conn->query($sql);
          try {
              $total = $result->fetchColumn();
              echo $total;
          } catch (\Exception $e) {
              echo $sql . "<br>" . $e->getMessage();
          }
        ?>
      </div></h1>

    </div>
    <script>src="js/jquery.min.js"> </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <hr>
    <footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>
  </body>
</html>
