@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de materiales <a href="materia/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('bodega.materia.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Codigo del Material</th> 
					<th>Rut del Proveedor</th>
					<th>Nombre</th>
					<th>Marca</th>
					<th>Stock Inicial</th>
					<th>Stock Minimo</th>
					<th>Fecha</th>
					<th>Precio</th>

					<th>Opciones</th>
				</thead>
               @foreach ($materia as $mat)
				<tr>
					<td>{{ $mat->mat_codigo}}</td>
					<td>{{ $mat->pro_rut}}-{{ $mat->pro_dv}}</td>
					<td>{{ $mat->mat_nombre}}</td>
					<td>{{ $mat->mat_marca}}</td>
					<td>{{ $mat->mat_stockini}}</td>
					<td>{{ $mat->mat_stockmin}}</td>
					<td>{{ $mat->mat_fechaad}}</td>
					<td>{{ $mat->mat_precio}}</td>

					<td>
						<a href="{{URL::action('MateriaController@edit',$mat->mat_codigo)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="#" data-target="#modal-delete-{{$mat->mat_codigo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        @include('bodega.materia.modal')
					</td>
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$materia->render()}}
	</div>
</div>

@endsection