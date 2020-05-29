<?php
    session_start();
    if(!isset($_SESSION['datosUser'])){
    header("location:Login/index.php");
    }
    require_once("header/header.php");
	  require_once('funciones/funciones.php');
		require_once('funciones/conexion2.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control de Asistencia</title>
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>

<body>
  <div class="container-fluid">
    <table class="table table-bordered table-dark table-striped">
      <tbody>
        <?php
        $id = $_GET['id'];
             try {
                $sql = "SELECT * FROM asistencias where id=$id";
                $res=$conn->prepare($sql);
                $res->execute();
                $results = ($res->fetchAll(PDO::FETCH_ASSOC));
                 
                  foreach ($results as $row) {
         ?>
        <h1>Agentes Municipales <?php echo $row['fecha']; ?></h1>
        <div class="row">

          <tr>
            <th>Efectivos</th>
            <td class="col-6"><?php echo $row['efectivos']; ?></td>
          </tr>
          <tr>
            <th>Presentes</th>
            <td><?php echo $row['presentes']; ?></td>
          </tr>
          <tr>
            <th>Ausentes</th>
            <td><?php echo $row['ausentes']; ?></td>
          </tr>



          <tr>
            <th>Ausente Injustificado</th>
            <td><?php echo $row['A']; ?></td>
          </tr>
          <tr>
            <th>Licencia Anual</th>
            <td><?php echo $row['LA']; ?></td>
          </tr>
          <tr>
            <th>Accidente de trabajo</th>
            <td><?php echo $row['AT']; ?></td>
          </tr>
          <tr>
            <th>Matrimonio Agente</th>
            <td><?php echo $row['MATR']; ?></td>
          </tr>
          <tr>
            <th>Estudio</th>
            <td><?php echo $row['EST']; ?></td>
          </tr>
          <tr>
            <th>Nacimiento Hijo</th>
            <td><?php echo $row['NAC']; ?></td>
          </tr>
          <tr>
            <th>Enfermedad Agente</th>
            <td><?php echo $row['LEA']; ?></td>
          </tr>
          <tr>
            <th>Atencion Familiar</th>
            <td><?php echo $row['LEF']; ?></td>
          </tr>
          <tr>
            <th>Examenes</th>
            <td><?php echo $row['EXAM']; ?></td>
          </tr>
          <tr>
            <th>Lactancia o Alimentacion</th>
            <td><?php echo $row['LACT']; ?></td>
          </tr>
          <tr>
            <th>Fallecimiento</th>
            <td><?php echo $row['LF']; ?></td>
          </tr>
          <tr>
            <th>Historia Clinica</th>
            <td><?php echo $row['LF']; ?></td>
          </tr>
          <tr>
            <th>Maternidad</th>
            <td><?php echo $row['MATERN']; ?></td>
          </tr>
          <tr>
            <th>Razones Particulares</th>
            <td><?php echo $row['RP']; ?></td>
          </tr>
          <tr>
            <th>Donacion de Sangre</th>
            <td><?php echo $row['DONS']; ?></td>
          </tr>
          <tr>
            <th>Jubilacion Transitoria</th>
            <td><?php echo $row['JT']; ?></td>
          </tr>
          <tr>
            <th>Licencia Invernal</th>
            <td><?php echo $row['LI']; ?></td>
          </tr>
          <tr>
            <th>Mision Oficial</th>
            <td><?php echo $row['MO']; ?></td>
          </tr>
          <tr>
            <th>Suspension</th>
            <td><?php echo $row['SUSP']; ?></td>
          </tr>
          <tr>
            <th>LIC.ESP.EXTR./6 MESES sin goce de haberes</th>
            <td><?php echo $row['LEE6M']; ?></td>
          </tr>
          <tr>
            <th>LIC.ESP.EXTR./1 AÑO sin goce de haberes</th>
            <td><?php echo $row['LEE1A']; ?></td>
          </tr>
          <tr>
            <th>Municipales Adscriptos</th>
            <td><?php echo $row['ADSC']; ?></td>
          </tr>
          <tr>
            <th>Licencia Politica</th>
            <td><?php echo $row['LPOL']; ?></td>
          </tr>


        </div>
        <?php
                        }
                } catch (PDOException $e) {
                    echo "There is some problem in connection: " . $e->getMessage();
                }
                ?>
      </tbody>
    </table>

  </div>
</body>
<?php
    require_once("footer/footer.php");
?>

</html>