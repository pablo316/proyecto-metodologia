@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Editar Proveedor: {{$proveedor->pro_nombre}}</h3>
                  @if (count($errors)>0)
                  <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                        @endforeach
                        </ul>
                  </div>
                  @endif

{!!Form::model($proveedor,['method'=>'PATCH','route'=>['compras.proveedor.update',$proveedor->pro_rut]])!!}
            {{Form::token()}}
            
            <label for="pro_rut">Rut</label>
                  <div class="input-group">
                        <input type="text" name="pro_rut" class="form-control" value="{{$proveedor->pro_rut}}">
                        <span class="input-group-addon">-</span>
                        <input type="text" class="form-control" style="width: 45px" name="pro_dv" value="{{$proveedor->pro_dv}}" maxlength="1" placeholder="DV">
                  </div>
            <div class="form-group">
                  <label for="pro_nombre">Nombre</label>
                  <input type="text" name="pro_nombre" class="form-control" value="{{$proveedor->pro_nombre}}" placeholder="Nombre">
            </div>
            <div class="form-group">
                  <label for="pro_direccion">Direccion</label>
                  <input type="text" name="pro_direccion" class="form-control" value="{{$proveedor->pro_direccion}}" placeholder="Direccion">
            </div>
            <div class="form-group">
                  <label for="pro_telefono">Telefono</label>
                  <input type="text" name="pro_telefono" class="form-control" value="{{$proveedor->pro_telefono}}" placeholder="Telefono">
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::Close()!!}                    
            
            </div>
      </div>
@endsection