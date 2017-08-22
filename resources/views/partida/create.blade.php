<!DOCTYPE html>
<html>
<head>
	<title>Crear Partida</title>
</head>
<body>
	<form method="POST">
		{!! csrf_field() !!}
		<label for="codigo">Codigo</label><input type="text" name="codigo"><br>
		<label for="denominacion">Denominacion</label><input type="text" name="denominacion"><br>
		<label for="asignacion">Asignacion</label><input type="asignacion" name="asignacion"><br>
		<button type="submit">Crear</button>
	</form>
</body>
</html>