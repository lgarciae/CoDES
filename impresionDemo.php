<?php
    require_once './dompdf/autoload.inc.php';
    require ("conectDB.php");
    session_start();

    $id       = $POST['id'];

      // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $options = $dompdf->getOptions();
    $options->setDefaultFont('Times-Roman');
    $dompdf->setOptions($options);
    $filename = "PDFCreated -at- " . date("d-m-Y");
    $fechaImpresion = date("d-m-Y");

    //Aqui se construye el DOM en HTML
    $cadena = "
    <html lang='es'>
      <head>
          <title> Impresión del Proyecto en PDF</title>
      </head>

      <body oncontextmenu='return false'>

            <h3>Gerencia de Tecnologías | Coordinación de Desarrollo</h3>
            <p>Fecha de Impresión: <?php echo $fechaImpresion; ?></p>

             <table border='1' width='100%' style='border-collapse: collapse cellspacing='0' cellpadding='0';>

                    <tr>
                        <td><b>ID Proyecto</b></td>
                        <td>118</td>
                    </tr>

                    <tr>
                        <td><b>Nombre</b></td>
                        <td>ADD-ON (COMPLEMENTOS) DE LA DIRECCION DE FINANZAS PARA LA ACTUALIZACIÓN DEL ERP (GRANDE)</td>
                    </tr>

                    <tr>
                        <td><b>Solicitó</b></td>
                        <td>GONZALO BALDIT</td>
                    </tr>

                    <tr>
                        <td><b>Colaborador(es)</b></td>
                        <td>JUAN/PACO/LUIS</td>
                    </tr>

                    <tr>
                        <td><b>Fecha Inicio</b></td>
                        <td>12/06/2021</td>
                    </tr>

                    <tr>
                        <td><b>Fecha Fin</b></td>
                        <td>01/01/0001</td>
                    </tr>

                    <tr>
                        <td><b>Fase</b></td>
                        <td>ANALISIS DE REQUERIMIENTOS</td>
                    </tr>

                    <tr>
                        <td><b>Observacion(es)</b></td>
                        <td>[12/06/2021].- VERBALMENTE GB SOLICITA AGREGAR EN EL PROYECTO DE ACTUALIZACIÓN DEL ERP LA FUNCIONALIDAD DEL MANEJO DE IMPUESTOS (IEPS/IVA), ASI COMO LA DEPRECIACIÓN FISCAL DE LOS ACTIVOS FIJOS - (JULIO HERNANDEZ ES USUARIO CLAVE) [16/06/2021].- VERBALMENTE GB SOLICITA AGREGAR EN EL PROYECTO DE ACTUALIZACIÓN DEL ERP LA FUNCIONALIDAD DE PAGO A TRAVES DE TEF EN LOS ESCENARIOS DE ARRENDAMIENTO PURO & FINANCIERO - (LUIS GUSTAVO/SABINA SON USUARIOS CLAVES) [17/06/2021].- VIA CORREO ELECTRONICO LILIANA CAMACHO SOLICITA 1.TRAZABILIDAD DE LAS OPERACIONES: TODO MOVIMIENTO QUE AFECTE AL KARDEX DEBE QUEDAR REGISTRADO. POR EJEMPLO: A) CUANDO LA SUCURSAL GENERA UNA VENTA Y ESE MISMO DIA LA CANCELA, AMBOS MOVIMIENTOS NO SE VISUALIZAN EN EL KARDEX. B) NOTAS DE CARGO POR DEVOLUCIONES SI SON CORREGIDAS O CANCELADAS SE REALIZAN SOBRE EL MOVIMIENTO O DOCUMENTO ORIGEN. C) MERMAS D) TRANSFERENCIAS ENTRE DEPARTAMENTOS. SUGERENCIA: SE DEBE CREAR UNA PANTALLA DONDE EL USUARIO PUEDA GENERAR OTRO DOCUMENTO INTERNO LIGADO AL FOLIO DEL DOCUMENTO ORIGEN A CORREGIR O A CANCELAR GENERANDO UNA TRANSACCION. LA CREACION DE ESTE NUEVO DOCUMENTO DEBE REALIZARSE EN UNA PANTALLA QUE DEBERA SER OPERADA POR PERSONAL DE OFICINAS, POR EJEMPLO, LAS CANCELACIONES O CORRECCIONES DE NOTAS DE CARGO POR DEVOLUCION, MERMA DEBE REALIZARSE POR VALIDACIONES., QUE ACTUALMENTE LO HACE DICHA AREA PERO AFECTANDO EL DOCUMENTO ORIGEN.
                    </tr>

              </table>
              <footer style='text-align:center; position:fixed; bottom:0; '>© Tienda de Descuento Arteli 2021</footer>
          </body>
      </html>";

    $dompdf->loadHtml($cadena,'UTF-8');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('Letter', 'portrait'); //'A4/Letter'  o 'landscape/portrait'

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream($filename);
?>
