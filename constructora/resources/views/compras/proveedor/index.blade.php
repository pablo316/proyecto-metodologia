@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de proveedores <a href="proveedor/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('compras.proveedor.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Rut</th> 
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Opciones</th>
				</thead>
               @foreach ($proveedores as $pro)
				<tr>
					<td>{{ $pro->pro_rut}} - {{ $pro->pro_dv}}</td>
					<td>{{ $pro->pro_nombre}}</td>
					<td>{{ $pro->pro_direccion}}</td>
					<td>{{ $pro->pro_telefono}}</td>
					<td>
						<a href="{{URL::action('ProveedorController@edit',$pro->pro_rut)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="#" data-target="#modal-delete-{{$pro->pro_rut}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        @include('compras.proveedor.modal')
					</td>
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$proveedores->render()}}
	</div>
</div>

@endsection