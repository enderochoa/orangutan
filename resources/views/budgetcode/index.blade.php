<!DOCTYPE html>
<html>
<head>
	<title>Partidas</title>
</head>
<body>
	{!! link_to_route('budgetCode_create', 'Nuevo') !!}
	<table>
		<tr>
			<th>Codigo</th>
			<th>Denominacion</th>
			<th>Asignacion</th>
		</tr>
	@foreach ($budgetCodes as $budgetCode)
		<tr>
			<td>
				{!! link_to_route('budgetCode_show', $budgetCode->code,['budgetCode'=>$budgetCode->id]) !!}
			</td>
			<td>{{ $budgetCode->name }}</td>
			<td>{{ $budgetCode->assignment }}</td>
		</tr>
	@endforeach
	</table>
</body>
</html>