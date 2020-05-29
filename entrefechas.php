<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control de Asistencia</title>
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>

<body>
  <?php
    require_once("header/header.php");
	  require_once('funciones/funciones.php');
    require_once('funciones/conexion.php');
    /*require_once('funciones/conexion2.php');*/
    require "funciones/conexion2.php";
    session_start();
	?>
  <div class="container-fluid">
    <?php
    $fechaInicio1='0';
    $fechaFIN1='0';
    if(isset($_POST['enviarF'])){
       $fechaInicio1=$_POST['fechaInicio'];
       $fechaFIN1=$_POST['fechaFIN'];  
    }
    if($fechaInicio1 == NULL ){
        $fechaInicio1 = '0';
    }
    if($fechaFIN1 == NULL ){
        $fechaFIN1 = '0';
    }
    $fechaInicio44 = date("Y-m-d", strtotime($fechaInicio1));
    $fechaInicio445 = date("Y-m-d", strtotime($fechaFIN1));
  ?>
    <h2>Entre Fechas: <?php echo $fechaInicio1; ?> y <?php echo $fechaFIN1; ?></h2>

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
    if(isset($_POST['enviarF'])){  
    try {
          $error="<div class='error borde-5 letraNegrita'>Error al registrar el mensaje</div>";
          /*$fechaInicio=limpiar($con,$_POST['fechaInicio']);
          $fechaFIN=limpiar($con,$_POST['fechaFIN']);*/
          $fechaInicio=$_POST['fechaInicio'];
          $fechaFIN=$_POST['fechaFIN']; 
          $fechaInicio2 = date("Y-m-d", strtotime($fechaInicio));
          $fechaFIN2 = date("Y-m-d", strtotime($fechaFIN));
         if($fechaInicio2!=''){   
          
          $sql = "SELECT * FROM `asistencias` WHERE fecha BETWEEN :fechaInicio AND :fechaFIN";
          $res=$conn->prepare($sql);
          $res->bindparam(":fechaInicio",$fechaInicio);
          $res->bindparam(":fechaFIN",$fechaFIN);
          $res->execute();
          $results = ($res->fetchAll(PDO::FETCH_ASSOC));
          //$result=consulta($con,$sql,$error);
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
                  }
                } catch (PDOException $e) {
                    echo "There is some problem in connection: " . $e->getMessage();
                }
              } 
        ?>
  </div>
</body>
<?php
    require_once("footer/footer.php");
?>

</html>