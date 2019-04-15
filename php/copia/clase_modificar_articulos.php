<?php
      $id_proveedor=$_POST['id_proveedor'];
      $nombre=$_POST['nombre'];
      $direccion=$_POST['direccion'];
      $telefonos=$_POST['telefonos'];
      $correo=$_POST['correo'];
      $persona_contacto=$_POST['persona_contacto'];
      if ($id_proveedor!="" && $nombre!="" && $direccion!="" && $telefonos!="" && $correo!="" && $persona_contacto!="")
      {
            include("conexion.php");
            $conexion = $conn;
            $sql = "UPDATE sci_proveedores SET ".
                   "nombre='$nombre', ".
                   "direccion='$direccion', ".
                   "telefonos='$telefonos', ".
                   "correo='$correo', ".
                   "persona_contacto='$persona_contacto' ".
                   "WHERE id_proveedor='$id_proveedor'";
            $result = pg_query($conexion,$sql);
      }
      header("Location:listar_proveedores.php");
?>
