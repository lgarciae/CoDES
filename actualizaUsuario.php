<?php
	require("conectDB.php");
	session_start();

			$id         = $_POST['id'];
			$role       = $_POST['role'];
			$nombre     = strtoupper(htmlspecialchars($_POST['nombre']));
			$correo     = htmlspecialchars($_POST['correo']);
			$contrasena = password_hash($_POST['contrasena'],PASSWORD_DEFAULT);

			$sql = "UPDATE usuarios SET us_username= ?, us_correo= ?, us_password = ?, us_rol = ?, us_log = now() WHERE id_usuario = ?";
			$stmt = $conn->prepare($sql);

	  	try {
	  			$stmt->execute(array($nombre, $correo, $contrasena, $role, $id));
	  		} catch (\Exception $e) {
	    echo $sql . "<br>" . $e->getMessage();
	  	}
  $conn = null;
?>
