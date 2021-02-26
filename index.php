<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- hoja de estilo personalizada -->
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tp_1</title>
</head>
<body>
<div class=wrap>

	<form action="procesar.php?" method="post">
		<h1>Registro</h1>
		<label>Nombre</label>
		<input type="text" name="nombre" requerid>
		<label>Apellido</label>
		<input type="text" name="apellido" requerid>
		<label>Email</label>
		<input type="email" name="email" requerid >
		<label>Password</label>
		<input type="password" name="password" requerid>
		
		<div class="btn-contenedor">
			<input class="btn btn-enviar" type="submit" name="Enviar">
			<input class="btn btn-cancelar" type="button" value="Cancelar">
		</div>
		

	</form>

</div>
</body>
</html>