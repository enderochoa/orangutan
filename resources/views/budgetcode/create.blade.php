<!DOCTYPE html>
<html>
<head>
	<title>Crear Partida</title>
</head>
<body>
	<form method="POST">
		{!! csrf_field() !!}
		<label for="codigo">Codigo</label><input type="text" name="code"><br>
		<label for="denominacion">Denominacion</label><input type="text" name="name"><br>
		<label for="asignacion">Asignacion</label><input type="asignacion" name="assignment"><br>
		<button type="submit">Crear</button>
	</form>
</body>
</html>