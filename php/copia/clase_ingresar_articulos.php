<?php
      $id_proveedor=$_GET['id_proveedor'];
      $nombre=$_GET['nombre'];
      $direccion=$_GET['direccion'];
      $telefonos=$_GET['telefonos'];
      $correo=$_GET['correo'];
      $contacto=$_GET['persona_contacto'];
      if ($id_proveedor!="" && $nombre!="" && $direccion!="" && $telefonos!="" && $correo!="" && $contacto!="")
      {
            include("conexion.php");
            $conexion = $conn;
            //Ingreso del proveedor
            $sql = "INSERT INTO sci_proveedores (id_proveedor,nombre,direccion,telefonos,correo,persona_contacto)
            VALUES('$id_proveedor','$nombre','$direccion','$telefonos','$correo','$contacto')";
            $result = pg_query($conexion,$sql);
      }
      header("Location:formulario_ingresar_proveedores.php");
?>
