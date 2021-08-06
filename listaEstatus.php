<?php
	 require("conectDB.php");
?>
    <html>
    <head>
      <title>Demo de menú desplegable</title>
      <meta charset="utf-8" />
    </head>
    <body>
      <div align="center">
        <p>Seleccione un dato del siguiente menú:</p>
        <p>Estado:
          <select>
            <option value="">Seleccione:</option>
            <?php
              $query = $conn->prepare("SELECT * FROM estatus");
              $query->execute();
              $data = $query->fetchAll();

              foreach ($data as $valores):
                  echo '<option value="'.$valores["descripcion"].'">'.$valores["descripcion"].'</option>';
              endforeach;
            ?>
          </select>
          <button>Enviar</button>
        </p>
      </div>
    </body>

    </html>
