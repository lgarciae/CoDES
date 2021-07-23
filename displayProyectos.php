<?php
  require("cabecera.php");
  require("conectDB.php");
  session_start();
  $datos = null;

  if (isset($_POST["enviar"])){
    $fechaini = $_POST["fechaini"];
    $fechafin = $_POST["fechafin"];
    $colabora = $_POST["colabora"];
    $stmt = $conn->prepare("SELECT * FROM proyectos WHERE pr_inicio >= '$fechaini' AND pr_inicio <= '$fechafin' AND pr_baja <> 1 AND pr_colaboradores LIKE '%$colabora%'");
    $stmt->execute();
    $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  if(!is_countable($datos))$datos = Array();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<body>
    <div class="container-fluid">
      <div class="row">
    		<div class="col-md-12">
          <br>
          <a href="./auditaColaborador.php"   class="btn btn-danger pull-right"  data-toggle="tooltip" title="Abandonar pantalla"> Salir</a>
    			<h3><i class="fa fa-fw fa-book"></i> Proyectos de <?php echo $colabora; ?> con fecha de inicio entre el  <?php echo $fechaini; ?> y el <?php echo $fechafin; ?></h3>
    			<hr>

        			<?php if(count($datos)>0):?>
        				<table class="table table-hover table-bordered">
        					<thead>
        						<th>Id</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Solicitó</th>
                    <th class="text-center">Colaborador(es)</th>
                    <th class="text-center">Fecha Inicio</th>
                    <th class="text-center">Fecha Final</th>
                    <th class="text-center">Días Invertidos</th>
                    <th class="text-center">¿Es acuerdo?</th>
                    <th class="text-center">Fase</th>
        						<th class="text-center">Transacción</th>
        					</thead>
                  <tbody>
                    <?php foreach($datos as $d):?>
                   <tr>
                     <td><?php echo $d['id_proyecto'];?></td>
                     <td><?php echo $d['pr_nombre'];?></td>
                     <td><?php echo $d['pr_solicito'];?></td>
                     <td><?php echo $d['pr_colaboradores'];?></td>
                     <td class="text-center"><?php echo date("d/m/Y",strtotime($d['pr_inicio']));?></td>
                     <td class="text-center"><?php echo date("d/m/Y",strtotime($d['pr_fin']));?></td>
                     <?php
                      $datetime1 = date_create($d['pr_inicio']);
                      $datetime2 = date_create($d['pr_fin']);
                      $interval  = date_diff($datetime1, $datetime2);
                     ?>
                     <td class="text-center"><?php echo ($interval->format('%R%a')<0)?"N/A":$interval->format('%R%a')?></td>
                     <td class="text-center"><?php echo "<span style='color:white;' class='badge'>"; echo ($d['pr_acuerdo']==1)?'SI':'NO'; echo "</span";?></td>
                     <td><?php echo $d['pr_status'];?></td>
                     <td class="text-center">
                       <a href="./modificaProyecto.php?id=<?php echo $d['id_proyecto']?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil fa-fw"></i></a>
                       <a href="./pdf.php?id=<?php echo $d['id_proyecto']?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Imprimir"><i class="fa fa-print fa-fw"></i></a>
                     </td>
                   </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th class="text-center">Nombre</th>
                      <th class="text-center">Solicitó</th>
                      <th class="text-center">Colaborador(es)</th>
                      <th class="text-center">Fecha Inicio</th>
                      <th class="text-center">Fecha Final</th>
                      <th class="text-center">Días Invertidos</th>
                      <th class="text-center">¿Es acuerdo?</th>
                      <th class="text-center">Fase</th>
                      <th>Transacción</th>
                    </tr>
                  </tfoot>

    				</table>
    			<?php else:?>
            <div class="alert alert-warning">
              <strong>Informativo !!</strong> No hay datos que desplegar.
            </div>
    			<?php endif; ?>
    		</div>
      </div>
    </div>

    <script type="text/javascript">
    		$(document).ready(function(){
    				$(".table").dataTable({
    				"language": {
    				"lengthMenu": "Mostrando _MENU_ registros por página",
    				"zeroRecords": "Sin registros",
    				"info": "Mostrando pagina _PAGE_ de _PAGES_",
    				"infoEmpty": "Sin registros",
    				"sSearch": "Buscar",
    				"infoFiltered": "(filtrando de _MAX_ registros)"
          },"iDisplayLength": 50
    			 });
    		 });
    </script>

    <footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>
</body>
</html>
