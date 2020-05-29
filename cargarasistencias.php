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
		require_once('funciones/conexion2.php');
	?>

  <div class="container-fluid">
    <h1>Cargar asistencias</h1>

    <form action="/asistencia/cargaragentes.php" method="post">
      <div class="form-group">
        <label for="efectivos">Efectivos</label>
        <input type="number" class="form-control" name="efectivos" id="efectivos" placeholder="Efectivos">
      </div>
      <div class="form-group">
        <label for="presentes">Presentes</label>
        <input type="number" class="form-control" name="presentes" id="presentes" placeholder="Presentes">
      </div>
      <div class="form-group">
        <label for="ausentes">Ausentes</label>
        <input type="number" class="form-control" name="ausentes" id="ausentes" placeholder="Ausentes">
      </div>
      <div class="alert alert-warning" role="alert">
        <a href="#" class="alert-link">Licencias:</a>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-6">
            <label for="ausentesinjustificados">Ausentes injustificados</label>
            <input name="efectivos" id="efectivos" type="number" class="form-control"
              placeholder="Ausente injustificado">
          </div>
          <div class="col-6">
            <label for="la">Licencia Anual</label>
            <input name="la" id="la" type="number" class="form-control" placeholder="Licencia Anual">
          </div>
          <div class="col-6">
            <label for="at">Accidente de trabajo</label>
            <input name="at" id="at" type="number" class="form-control" placeholder="Accidente de trabajo">
          </div>
          <div class="col-6">
            <label for="matr">Matrimonio Agente</label>
            <input name="matr" id="matr" type="number" class="form-control" placeholder="Matrimonio Agente">
          </div>
          <div class="col-6">
            <label for="est">Estudio</label>
            <input name="est" id="est" type="number" class="form-control" placeholder="Estudio">
          </div>
          <div class="col-6">
            <label for="nac">Nacimiento Hijo</label>
            <input name="nac" id="nac" type="number" class="form-control" placeholder="Nacimiento Hijo">
          </div>
          <div class="col-6">
            <label for="lea">Enfermedad Agente</label>
            <input name="lea" id="lea" type="number" class="form-control" placeholder="Enfermedad Agente">
          </div>
          <div class="col-6">
            <label for="lef">Atencion Familiar</label>
            <input name="lef" id="lef" type="number" class="form-control" placeholder="Atencion Familiar">
          </div>
          <div class="col-6">
            <label for="exam">Examenes</label>
            <input name="exam" id="exam" type="number" class="form-control" placeholder="Examenes">
          </div>
          <div class="col-6">
            <label for="lact">Lactancia o Alimentacion</label>
            <input name="lact" id="lact" type="number" class="form-control" placeholder="Lactancia o Alimentacion">
          </div>
          <div class="col-6">
            <label for="lf">Fallecimiento</label>
            <input name="lf" id="lf" type="number" class="form-control" placeholder="Fallecimiento">
          </div>
          <div class="col-6">
            <label for="hc">Historia Clinica</label>
            <input name="hc" id="hc" type="number" class="form-control" placeholder="Historia Clinica">
          </div>
          <div class="col-6">
            <label for="matern">Maternidad</label>
            <input name="matern" id="matern" type="number" class="form-control" placeholder="Maternidad">
          </div>
          <div class="col-6">
            <label for="rp">Razones Particulares</label>
            <input name="rp" id="rp" type="number" class="form-control" placeholder="Razones Particulares">
          </div>
          <div class="col-6">
            <label for="dons">Donacion de sangre</label>
            <input name="dons" id="dons" type="number" class="form-control" placeholder="Donacion de sangre">
          </div>
          <div class="col-6">
            <label for="jt">Jubilacion Transitoria</label>
            <input name="jt" id="jt" type="number" class="form-control" placeholder="Jubilacion Transitoria">
          </div>
          <div class="col-6">
            <label for="li">Licencia Invernal</label>
            <input name="li" id="li" type="number" class="form-control" placeholder="Licencia Invernal">
          </div>
          <div class="col-6">
            <label for="mo">Mision oficial</label>
            <input name="mo" id="mo" type="number" class="form-control" placeholder="Mision oficial">
          </div>
          <div class="col-6">
            <label for="susp">Suspension</label>
            <input name="susp" id="susp" type="number" class="form-control" placeholder="Suspension">
          </div>
          <div class="col-6">
            <label for="lee6m">Lic.ESP.EXTR./6 MESES sin goe de haberesc</label>
            <input name="lee6m" id="lee6m" type="number" class="form-control" placeholder="Lic.ESP.EXTR./6MESES">
          </div>
          <div class="col-6">
            <label for="lee1a">Lic.ESP.EXTR./1 AÑO</label>
            <input name="lee1a" id="lee1a" type="number" class="form-control" placeholder="Lic.ESP.EXTR./1 AÑO">
          </div>
          <div class="col-6">
            <label for="adsc">Municipales Adscriptos</label>
            <input name="adsc" id="adsc" type="number" class="form-control" placeholder="Municipales Adscriptos">
          </div>
          <div class="col-6">
            <label for="lpol">Licencia Politica</label>
            <input name="lpol" id="lpol" type="number" class="form-control" placeholder="Licencia Politica">
          </div>
        </div>
      </div>


      <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
    </form>

  </div>
</body>
<?php
    require_once("footer/footer.php");
?>

</html>