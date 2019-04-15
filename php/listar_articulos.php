<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Proveedores</title>
  <link rel="stylesheet" type="text/css" href="../css/hoja_estilo.css" />
  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  !-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/hoja_estilos.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body>
  <div class="container card">
    <div class="row">
      <div class="col-4">
        <h2>Listado de Proveedores</h2>
      </div>
      <div class="col-8 float-left">
        <div class="row">
          <input id="buscar-registros" type="text" class="form-control" placeholder="Buscar" aria-label="Input group example" aria-describedby="btnGroupAddon">
        </div>
        <div class="row justify-content-end">
          <a class="btn btn-primary" href="formulario_ingresar_proveedores.php" name="guardar" id="guardar">
            <i class="fas fa-plus-circle"></i>
          </a>
          <a class="btn btn-primary" href="https://www.google.com/" name="salir" id="salir">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container card-table">
    <div class="row">
      <div class="col-12 hr">
        <!--<hr width="100%" style="color: #0056b2;" />!-->
      </div>
    </div>
    <div class="row">
        <!--<table id="ListarData" class="table flex-table table-hover" align="center">!-->
        <table id="LlenarTabla" class="table table-hover">
          <thead>
              <tr class="primerafila">
                <th scope="col" class="cold-2">Id_proveedore</th>
                <th scope="col" class="col-2">Nombre</th>
                <th scope="col" class="col-2">Dirección</th>
                <th scope="col" class="col-2">Telefonos</th>
                <th scope="col" class="col-2">Correo</th>
                <th scope="col" class="col-2">Persona Contacto</th>
                <th scope="col" class="sin col-1">&nbsp;</th>
                <th scope="col" class="sin col-1">&nbsp;</th>
              </tr>
          </thead>
          <tbody>
          <?php
              include("conexion.php");
              $conexion = $conn;
              $sql = "SELECT ".
                        "sci_proveedores.id_proveedor, ".
                        "sci_proveedores.nombre, ".
                        "sci_proveedores.direccion, ".
                        "sci_proveedores.Telefonos, ".
                        "sci_proveedores.correo, ".
                        "sci_proveedores.persona_contacto, ".
                        "sci_proveedores.foto ".
                      "FROM ".
                        "sci_proveedores ".
                      "ORDER BY ".
                         "sci_proveedores.id_proveedor;";
              $resultado = pg_query($conexion,$sql);
              while($resultados = pg_fetch_object($resultado))
              {
                echo "<tr>";
                      echo "<td>".$resultados->id_proveedor."</td>";
                      echo "<td>".$resultados->nombre."</td>";
                      echo "<td>".$resultados->direccion."</td>";
                      echo "<td>".$resultados->telefonos."</td>";
                      echo "<td>".$resultados->correo."</td>";
                      echo "<td>".$resultados->persona_contacto."</td>";
                      echo "<td><a href='clase_borrar_proveedores.php?id_proveedor=$resultados->id_proveedor' name='delete' id='delete' class='glyphicon glyphicon-trash btn btn-danger btn-xs delete'></a></td>";
                      echo "<td><a href='formulario_modificar_proveedores.php?id_proveedor=$resultados->id_proveedor&nombre=$resultados->nombre&direccion=$resultados->direccion&telefonos=$resultados->telefonos&
                      correo=$resultados->correo&persona_contacto=$resultados->persona_contacto&foto=$resultados->foto' name='update' id='update' class='glyphicon glyphicon-pencil btn btn-primary btn-xs update'></a></td>";
                  echo "</tr>";
              }
          ?>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-12 hr">
        <!--<hr width="100%" style="color: #0056b2;" />!-->
      </div>
    </div>
  </div>
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/validaciones.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</body>
</html>
