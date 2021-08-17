<?php
    require("conectDB.php");
    session_start();

    if (isset($_POST["enviar"])){
      $nombre    = strtoupper(htmlspecialchars($_POST["nombre"]));
      $fecha     = ($_POST['fecha']);
      $observ    = strtoupper(htmlspecialchars($_POST["observa"]));
      $aplicado  = ($_POST['plataforma']);

      try {
      // invocamos el SP correspondiente y mandamos los parametros solicitados
      $sql = "CALL sp_insert_Version('$nombre','$fecha','$observ','$aplicado');";
      $conn->exec($sql);
      echo "<script>
              alert('$nombre ha sido agregado exitosamente a la tabla de Versiones !!');
              location.href='./versiones.php';
            </script>";
      } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    } // del catch
  $conn = null;
} // del if
?>
