<!DOCTYPE html>
<html>
<head>
	<title>Partidas</title>
</head>
<body>
	<table>
		<tr>
			<th>Codigo</th>
			<th>Denominacion</th>
			<th>Asignacion</th>
		</tr>
	@foreach ($partidas as $partida)
		<tr>
			<td>
				{!! link_to_route('partida_show', $partida->codigo,['partida'=>$partida->id]) !!}
			</td>
			<td>{{ $partida->denominacion }}</td>
			<td>{{ $partida->asignacion }}</td>
		</tr>
	@endforeach
	</table>
</body>
</html>