<?php
  require("cabecera.php");
  require("conectDB.php");
  session_start();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1><i class="fa fa-fw fa-binoculars"></i> Versiones</h1>
			<hr>
			<a href="./capVersion.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo</a>
      <a href="./menuAdmin.php" class="btn btn-danger">Salir</a>

					<?php
            $stmt = $conn->prepare("SELECT * FROM tblversiones");
            $stmt->execute();
            $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
          ?>

					<br><br>
    			<?php if(count($datos)>0):?>
    				<table class="table table-hover table-bordered">
              <caption>Listado de Versiones</caption>

    					<thead>
    						<th>Id</th>
    						<th>Nombre</th>
                <th>Fecha</th>
                <th>Observaciones</th>
                <th>Aplicado en</th>
              	<th>Transacción</th>
    					</thead>
					<?php foreach($datos as $d):?>
					<tr>
						<td><?php echo $d['versionID'];?></td>
						<td><?php echo $d['nombreVersion'];?></td>
            <td><?php echo $d['fechaVersion'];?></td>
            <td><?php echo $d['observacion'];?></td>
            <td><?php echo $d['aplicado'];?></td>
						<td class="text-center">
              <a href="./modificaVersion.php?id=<?php echo $d['versionID']?>" class="btn btn-default btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
							<!--<a href="./modificaUsuario.php?id=<?php echo $d['plataformaID']?>" class="btn btn-default btn-xs"><i class="fa fa-pencil fa-fw"></i></a>-->
							<!--<a href="#" class='btn btn-danger btn-xs' onclick="myFunction()"><i class="fa fa-trash-o fa-lg"></i></a>-->
              <!--<a href="./eliminaUsuario.php?id=<?php echo $d['id_usuasrio']?>" class='btn btn-default btn-xs' onclick="myFunction()">Eliminar</a>-->
						</td>

					</tr>
					<?php endforeach; ?>
				</table>
			<?php else:?>
				<p class="alert alert-warning">Tabla Vacía !!!</p>
			<?php endif; ?>
		</div>
	</div>
</div>


<script type="text/javascript">
		$(document).ready(function(){
				$(".table").dataTable({
				"language": {
				"lengthMenu": "Mostrando _MENU_ registros por pagina",
				"zeroRecords": "Sin registros",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "Sin registros",
				"sSearch": "Buscar",
				"infoFiltered": "(filtrando de _MAX_ registros)"
      },"iDisplayLength": 50
			 });
		 });
</script>

</body>
    <script src="assets/js/datatable.js"></script>
</html>
