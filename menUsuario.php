<?php
    require("cabecera.php");
    session_start();
 ?>

 <style>
    body {
      background-image: url('./img/ArteliMas.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
</style>

 <nav class="navbar navbar-default navbar-fixed-top">
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
       <li class="active"><a href="./dashboard.php"><i class="fa fa-fw fa-area-chart"></i> Dashboard</a></li>
       <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon">&#xe045;</span> Reportes
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="./repProyectos.php" target="_blank"><i class="fa fa-fw"></i> Impresión de Listado de Acuerdos</a></li>
         </ul>
       </li>
       <li class="active"><a href="./acercade.php"><i class="fa fa-fw fa-drivers-license-o"></i> Acerca de</a></li>

     </ul>
     <ul class="nav navbar-nav navbar-right">  <!-- Elementos el menu cargados a la derecha -->
       <li><a href="./salir.php"><span class="glyphicon glyphicon-log-out"></span><?php echo " " . $_SESSION["USUARIO"] . ""; ?></a></li>
     </ul>
   </div>
 </nav>

 <body>
   <!-- Page content -->
   <div class="main">
   </div>
 </body>
