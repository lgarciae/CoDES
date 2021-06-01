<?php
    require("cabecera.php");
    session_start();
 ?>

<style>
    body {
      background-image: url('./img/Fondo.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
</style>

<body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  <!--Barra de Navegación Colapsable-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="#">Coordinación de Desarrollo</a>
         </div>
         <ul class="nav navbar-nav"> <!-- Elementos del Menu cargados a la izquierda-->
           <li class="active"><a href="#"><i class="fa fa-fw fa-area-chart"></i> Dashboard</a></li>

           <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-fw fa-code-fork"></i> Proyectos
             <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="./proyectos.php"><i class="fa fa-fw fa-book"></i> Seguimiento Proyectos</a></li>
               <li><a href="./repAcuerdos.php"><i class="fa fa-fw fas fa-briefcase"></i> Seguimiento Acuerdos de Administración</a></li>
               <li><a href="./auditaColaborador.php"><i class="fa fa-fw fa fa-group"></i> Colaborador y Proyecto asignado</a></li>
             </ul>
           </li>

           <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon">&#xe045;</span> Reportes
             <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="./impresionDemo.php" target="_blank">Impresión de Prueba</a></li>
             </ul>
           </li>

           <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-fw fa-cogs"></i> Configuración
             <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="./usuarios.php"><i class="fa fa-fw fa-user"></i>  Usuarios</a></li>
             </ul>
            </li>

            <li class="active"><a href="#" data-toggle="modal" data-target="#myAcercaDe"><i class="fa fa-fw fa-drivers-license-o"></i> Acerca de</a></li>

         </ul>
         <ul class="nav navbar-nav navbar-right">  <!-- Elementos el menu cargados a la derecha -->
           <li><a href="./salir.php"><span class="glyphicon glyphicon-log-out"></span><?php echo " " . $_SESSION["USUARIO"] . ""; ?></a></li>
         </ul>
       </div>
     </nav>


    <!-- Modal Acerca de -->
    <div id="myAcercaDe" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Acerca de CODES</h4>
          </div>
          <div class="modal-body">
            <p style="text-align:center;">Aplicación desarrollada con tecnología XAMPP</p>
            <p style="text-align:center;">© Tienda de Descuento Arteli - <?php echo date("Y");?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div>

      </div>
    </div>

</body>
