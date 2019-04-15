<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ingresar Proveedores</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/hoja_estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
	<body>
	<form action="../php/clase_ingresar_proveedores.php" method="GET" id="formulario" name="formulario">
  <div class="row w-100 justify-content-center">
    <div class="col-md-8 card card-content">
			<div class="row">
				<div class="col-10 pl-0 mb-1 float-center">
					<h4>
						Ingresar Proveedores<i class="fa text-primary fa-briefcase" aria-hidden="true"></i>
					</h4>
				</div>
				<div class="col-2 justify-content-end form-group">
					<label for="fotos" class="control-label"></label>
					<input type="file" class="form-control fotos" name="fotos" id="fotos">
				</div>
				<!--
				<div class="col-6 justify-content-end form-group">
					<label for="archivo" class="control-label">Buscar Foto</label>
						<input type="file" class="form-control barchivo"  name="archivo" id="archivo">
				</div>
				!-->

			</div>
			<!--
			https://www.youtube.com/watch?v=gkHpTSUFmrg
			https://www.youtube.com/watch?v=K9YW1sWJuR4
			<div class="row">
				<div class="col-12 p1-0 mb-1">
				</div>
				<div class="col-12 p1-0 mb-1">
				</div>
			</div>
			!-->
      <div class="row">
				<div class="p-1 col-md-4">
					<label class=" text-secondary" for="id_proveedor">RIF Proveedor</label>
					<input class="form-control required" type="text" name="id_proveedor" id="id_proveedor" placeholder="RIF Proveedor">
				</div>
        <div class="p-1 col-md-8">
          <label class=" text-secondary" for="nombres">Nombre</label>
          <input class="form-control required" type="text" name="nombre" id="nombre" placeholder="nombres usuario">
        </div>
				<div class="p-1 col-md-12">
          <label class=" text-secondary" for="direccion">Dirección</label>
          <input class="form-control required" type="text" name="direccion" id="direccion" placeholder="dirección">
        </div>
				<div class="p-1 col-md-4">
					<label class=" text-secondary" for="telefonos">Telefonos</label>
					<input class="form-control required" type="text" name="telefonos" id="telefonos" placeholder="telefonos">
				</div>
        <div class="p-1 col-md-4">
          <label class=" text-secondary" for="correo">Correo</label>
          <input class="form-control required" type="text" name="correo" id="correo" placeholder="correo electronico">
        </div>
				<div class="p-1 col-md-4">
          <label class=" text-secondary" for="persona_contacto">Persona Contacto</label>
          <input class="form-control required" type="text" name="persona_contacto" id="persona_contacto" placeholder="persona contacto">
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
		<!--<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>!-->
  	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/validaciones.js"></script>
		<!--
		<script>
		$(document).ready(function()
		{
					$("#guardar").click(function()
						{
								var nombres 		= $("#nombres").val();
								var apellidos 	= $("#apellidos").val();
								var direccion		= $("#direccion").val();
								if (nombres == "" || apellidos == "" || direccion == "")
								{
									alert("Algunos de los campos nombres, apellidos o direccion no puede estar en blanco");
								}

						});
		});
		</script>
		!-->
	</body>
</html>
