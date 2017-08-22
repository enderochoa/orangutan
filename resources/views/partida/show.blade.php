<!DOCTYPE html>
<html>
<head>
	<title>Partida</title>
</head>
<body>
	{!! link_to_route('partida_index','Ver Lista') !!} 
	{!! link_to_route('partida_edit', 'Modificar',['partida'=>$partida->id]) !!}<br>
	{!! link_to_route('partida_destroy', 'Eliminar',['partida'=>$partida->id]) !!}<br>

	<label>Codigo</label><span>{{ $partida->codigo }}</span><br/>
	<label>Denominacion</label><span>{{ $partida->denominacion }}</span><br/>
	<label>Asignacion</label><span>{{ $partida->asignacion }}</span><br/>
</body>
</html>