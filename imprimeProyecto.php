<?php
    date_default_timezone_set("America/Mexico_City");
    require_once './dompdf/autoload.inc.php';
    require ("conectDB.php");
    session_start();
    //Obtenemos el registro completo por su ID
    $row = get_ProyectoById($_GET['id']);
    if ($row){
?>
<style>
    table, p, footer, h3 {
      width: 100%;
      border: 1px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 12px;
      }
    td,th {
      width: auto;
      border: 1px solid #000;
      }
      thead {
        font-weight: bold;
        text-align: center;
      }
</style>

  <h3>Gerencia de Tecnologías | Coordinación de Desarrollo</h3>
  <p>Fecha: <?php echo date("d-m-Y");?></p>
  <p>Hora : <?php echo date("h:i:sa");?></p>
  <table cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th colspan="7">Datos del Proyecto</th>
      </tr>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Status</th>
        <th>Solicitó</th>
        <th>Colaboradores</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row['id_proyecto'] ;?></td>
        <td><?php echo $row['pr_nombre'] ;?></td>
        <td class="text-center"><b><?php echo $row['pr_status'] ;?></b></td>
        <td class="text-center"><?php echo $row['pr_solicito'] ;?></td>
        <td class="text-center"><?php echo $row['pr_colaboradores'] ;?></td>
        <td class="text-center"><?php echo $row['pr_inicio'] ;?></td>
        <td class="text-center"><?php echo $row['pr_fin'] ;?></td>
      </tr>
    </tbody>
  </table>
  <p><b>Observaciones</b></p>
  <p><?php echo $row['pr_notas'] ;?></p>
  <hr>
  <footer style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></footer>

<?php
} else{
  echo "No encontramos datos !!";
}

 ?>
