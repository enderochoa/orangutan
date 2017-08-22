<!DOCTYPE html>
<html>
<head>
	<title>Partida</title>
</head>
<body>
	{!! link_to_route('budgetCode_index','Ver Lista') !!} 
	{!! link_to_route('budgetCode_edit', 'Modificar',['budgetCode'=>$budgetCode->id]) !!}<br>
	{!! link_to_route('budgetCode_destroy', 'Eliminar',['budgetCode'=>$budgetCode->id]) !!}<br>

	<label>Codigo</label><span>{{ $budgetCode->code }}</span><br/>
	<label>Denominacion</label><span>{{ $budgetCode->name }}</span><br/>
	<label>Asignacion</label><span>{{ $budgetCode->assigment }}</span><br/>
</body>
</html>