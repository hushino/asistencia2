<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/asistencia/inicio.php">Asistencia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <script src="public/modernizr-custom.js"></script> -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/asistencia/inicio.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/asistencia/cargarasistencias.php">Cargar Asistencias</a>
      </li>
    </ul>
    <form class="form-inline" action="/asistencia/entrefechas.php" method="post">
      <div class="form-group mx-sm-3 mb-2" id="datepicker">
        <input class="form-control mr-sm-2" name="fechaInicio" type="date" id="date">
        <input class="form-control mr-sm-2" name="fechaFIN" type="date" id="date">
      </div>
      <button name="enviarF" id="enviarF" class="btn btn-primary mb-2" type="submit">Filtrar</button>
    </form>

  </div>
</nav>