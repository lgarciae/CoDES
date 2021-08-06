<?php
	require("conectDB.php");
	session_start();

			$id         = $_POST['id'];
			$nombre     = strtoupper(htmlspecialchars($_POST['nombre']));
			$sql 				= "UPDATE tblplataforma SET plataforma = ? WHERE plataformaID = ?";
			$stmt			  = $conn->prepare($sql);

	  	try {
	  			$stmt->execute(array($nombre, $id));
					echo "<script>
										alert('La plataforma ha sido actualizado de manera adecuada !!');
										location.href='./plataformas.php';
								</script>";
	  		} catch (\Exception $e) {
	    echo $sql . "<br>" . $e->getMessage();
	  	}
  $conn = null;
?>
