<!DOCTYPE html>
<html>
<head>
	<title>Modificar Partida</title>
</head>
<body>
	<form method="POST">
		{!! csrf_field() !!}
		<label for="codigo">Codigo</label><input type="text" name="code" value="{{ $budgetCode->code }}"><br>
		<label for="denominacion">Denominacion</label><input type="text" name="name" value="{{ $budgetCode->name}}"><br>
		<label for="asignacion">Asignacion</label><input type="text" name="assignment" value="{{ $budgetCode->assignment }}"><br>
		<button type="submit">Actualizar</button>
	</form>
</body>
</html>