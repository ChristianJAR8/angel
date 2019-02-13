<!DOCTYPE html>
<html>
<head>
<title>Consulta de Clientes</title>
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">
<link rel="icon" href="{{ asset('ico.ico') }}" type="image/gif" sizes="16x16">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
</head>
<body>
@include('flash::message')<br>	
<div class="container">
	<form method="GET" action="{{route('customers.index')}}">
		<input type="input" name="found" >
		<input type="submit" value="Buscar">
	</form>
</div>	
<br>
<button type="button" class="btn btn-warning"><a href="{{route('customers.create')}}">Agregar</a></button>
<br>
<table class="table table-hover">
<thead>
<tr>
<th scope="col">Clave</th>
<th scope="col">Nombre</th>
<th scope="col">RFC</th>
<th scope="col">Nombre Comercial</th>
<th scope="col">Email</th>
<th scope="col">Teléfono</th>
<th scope="col">Dirección</th>
<th scope="col">Acción</th>

</tr>
</thead>
@forelse($customers as $customer )
<tbody>
<tr>
    <th colspan="1">{{ $customer->id }}</th>
    <td colspan="1">{{ $customer->name }}</td>
    <td colspan="1">{{ $customer->taxid }}</td>
    <td colspan="1">{{ $customer->comercial_name }}</td>
    <td colspan="1">{{ $customer->email }}</td>
    <td colspan="1">{{ $customer->phone }}</td>
    <td colspan="1">{{ $customer->adress }}</td>
     <td colspan="1">
    	<button type="button" class="btn btn-warning"><a href="{{route('customers.edit',[ 'id' => $customer->id])}}">Editar</a></button> 	
     </td>
    <td colspan="1">
    	<form action="{{route('customers.destroy',[ 'id' => $customer->id])}}" method="post">
			@csrf
			<input type="hidden" value="delete" name="_method">
    		<input type="submit" value="Eliminar">
    	</form>
    </td>
</tr>
</tbody>
@empty
@endforelse
</table>
</body>
<div class="col-lg-12">
    <div class="center-block">
        {{$customers->links()}}
    </div>
</div>
</html>