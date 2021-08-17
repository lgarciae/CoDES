<?php
	require("conectDB.php");
	session_start();

	if(isset($_POST["enviar"])){
			$id         = $_POST['id'];
			$nombre     = strtoupper(htmlspecialchars($_POST['nombre']));
			$fecha      = $_POST['fecha'];
			$observa    = strtoupper($_POST['observacion']);
			$aplicado   = $_POST['aplicado'];

			$sql 				= "UPDATE tblversiones SET nombreVersion = ?, fechaVersion = ?, observacion = ?, aplicado = ? WHERE versionID = ?";
			$stmt			  = $conn->prepare($sql);

	  	try {
	  			$stmt->execute(array($nombre, $fecha, $observa, $aplicado, $id));
	  		} catch (\Exception $e) {
	    echo $sql . "<br>" . $e->getMessage();
	  	}
  $conn = null;
}
?>
