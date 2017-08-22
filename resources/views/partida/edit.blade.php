<!DOCTYPE html>
<html>
<head>
	<title>Modificar Partida</title>
</head>
<body>
	<form method="POST">
		{!! csrf_field() !!}
		<label for="codigo">Codigo</label><input type="text" name="codigo" value="{{ $partida->codigo }}"><br>
		<label for="denominacion">Denominacion</label><input type="text" name="denominacion" value="{{ $partida->denominacion}}"><br>
		<label for="asignacion">Asignacion</label><input type="asignacion" name="asignacion" value="{{ $partida->asignacion }}"><br>
		<button type="submit">Actualizar</button>
	</form>
</body>
</html>