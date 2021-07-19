<?php
    require("conectDB.php");
    session_start();

    if (isset($_POST["enviar"])){
      $nombre = strtoupper(htmlspecialchars($_POST["nombre"]));
      try {
      // invocamos el SP correspondiente y mandamos los parametros solicitados
      $sql = "CALL sp_insert_Plataforma('$nombre');";
      $conn->exec($sql);
      echo "<script>
              alert('$nombre ha sido agregado exitosamente !!');
              location.href='./plataformas.php';
            </script>";
      } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    } // del catch
  $conn = null;
} // del if
?>
