<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>

</head>

<body>
  <?php
      $id_proveedor=$_GET['id_proveedor'];

      include("conexion.php");
      $conexion = $conn;
      $sql = "DELETE FROM sci_proveedores WHERE id_proveedor='$id_proveedor'";
  		$result = pg_query($conexion,$sql);
      header("Location:listar_proveedores.php");
  ?>
</body>
</html>
