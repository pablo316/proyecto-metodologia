@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de clientes <a href="cliente/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('ventas.cliente.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Rut</th>
					<th>Nombre</th>
					<th>ApellidoPaterno</th>
					<th>ApellidoMaterno</th>
					<th>RazonSocial</th>
					<th>Giro</th>
					<th>Direccion</th>
					<th>Representante</th>

					<th>Opciones</th>
				</thead>
               @foreach ($clientes as $cli)
				<tr>
					<td>{{ $cli->cli_rut}} - {{ $cli->cli_dv}}</td>
					<td>{{ $cli->cli_nombre}}</td>
					<td>{{ $cli->cli_apellidopaterno}}</td>
					<td>{{ $cli->cli_apellidomaterno}}</td>
					<td>{{ $cli->cli_razonsocial}}</td>
					<td>{{ $cli->cli_giro}}</td>
					<td>{{ $cli->cli_direccion}}</td>
					<td>{{ $cli->cli_representante}}</td>

					<td>
						<a href="{{URL::action('ClienteController@edit',$cli->cli_rut)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="#" data-target="#modal-delete-{{$cli->cli_rut}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        @include('ventas.cliente.modal')
					</td>
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$clientes->render()}}
	</div>
</div>

@endsection