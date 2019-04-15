<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Modificar Proveedores</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/hoja_estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
	<body>
    <?php
        $id_proveedor=$_GET['id_proveedor'];
        $nombre=$_GET['nombre'];
        $direccion=$_GET['direccion'];
				$telefonos=$_GET['telefonos'];
        $correo=$_GET['correo'];
				$persona_contacto=$_GET['persona_contacto'];
				//echo $id_proveedor.'-'.$nombre.'-'.$direccion.'-'.$telefonos.'-'.$correo.'-'.$persona_contacto;die();
    ?>
	<form action="../php/clase_modificar_proveedores.php" method="POST" id="formulario" name="formulario">
  <div class="row w-100 justify-content-center">
    <div class="col-md-8 card card-content">
			<div class="row">
				<div class="col-8 pl-0 mb-1">
					<h4>Modificar Personal <i class="fa text-primary fa-briefcase" aria-hidden="true"></i>
					</h4>
				</div>
				<div class="col-2">
					<img class="foto" src="../imagenes/<?php echo $foto; ?>"/>
				</div>
				<div class="col-1 justify-content-end form-group">
						<label for="fotos" class="control-label"></label>
						<input type="file" class="form-control fotos" name="fotos" id="fotos">
				</div>
				<div class="col-1 justify-content-end">
						<a href="formulario_ingresar_proveedores.php"><img class="ingresar"src="../imagenes/ingresar_registro.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 p1-0 mb-1">
				</div>
				<div class="col-12 p1-0 mb-1">
				</div>
			</div>
      <div class="row">
        <div class="p-1 col-md-4">
          <label class="text-secondary" for="id_proveedor">RIF Proveedor</label>
          <input class="form-control required" type="text" name="id_proveedor" id="id_proveedor" value="<?php echo $id_proveedor?>" placeholder="RIF Proveedor">
        </div>
        <div class="p-1 col-md-8">
          <label class="text-secondary" for="nombre">Nombre</label>
          <input class="form-control required" type="text" name="nombre" id="nombre" value="<?php echo $nombre?>" placeholder="nombre proveedor">
        </div>
        <div class="p-1 col-md-12">
          <label class="text-secondary" for="direccion">Dirección</label>
          <input class="form-control required" type="text" name="direccion" id="direccion" value="<?php echo $direccion?>" placeholder="dirección">
        </div>
        <div class="p-1 col-md-4">
          <label class="text-secondary" for="telefonos">Telefonos</label>
          <input class="form-control required" type="text" name="telefonos" id="telefonos" value="<?php echo $telefonos ?>" placeholder="telefonos">
        </div>
				<div class="p-1 col-md-4">
          <label class="text-secondary" for="correo">Correo</label>
          <input class="form-control required" type="text" name="correo" id="correo" value="<?php echo $correo ?>" placeholder="correo">
        </div>
				<div class="p-1 col-md-4">
					<label class="text-secondary" for="persona_contacto">Persona Contacto</label>
					<input class="form-control required" type="text" name="persona_contacto" id="persona_contacto" value="<?php echo $persona_contacto ?>" placeholder="persona contacto">
				</div>
				<div class="p-1 col-md-12">
				</div>
        <div class="p-1 col-md-6">
            <button class="form-control btn btn-primary" type="submit" name="guardar" id="guardar" >Guardar
              <i class="fas fa-save"></i>
            </button>
        </div>
        <div class="p-1 col-md-6">
            <a href="../php/listar_proveedores.php" class="form-control btn btn-primary" name="salir"  id="salir">Salir
              <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
      </div>
    </div>
  </div>
</form>
		<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/validaciones.js"></script>
	</body>
</html>
