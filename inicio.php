<?php
    session_start();
    if(!isset($_SESSION['datosUser']['nombreUser'])){
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

    <h1>Asistencias actuales</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Efectivos</th>
          <th scope="col">Presentes</th>
          <th scope="col">Ausentes</th>
          <th scope="col">Fecha</th>
          <th scope="col">Detalle</th>
        </tr>
      </thead>
      <tbody>
        <?php
             try {
                $sql = "SELECT * FROM asistencias";
                $res=$conn->prepare($sql);
                $res->execute();
                $results = ($res->fetchAll(PDO::FETCH_ASSOC));
                  foreach ($results as $row) {
         ?>

        <tr>
          <td><?php echo $row['efectivos']; ?></td>
          <td><?php echo $row['presentes']; ?></td>
          <td><?php echo $row['ausentes']; ?></td>
          <td><?php echo $row['fecha']; ?></td>
          <td><button type="button" class="btn btn-info">
              <a style="text-decoration:none;color: white;" href="detalle.php?id=<?php echo  $row['id'];?>">ver</a>
            </button></td>
        </tr>
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