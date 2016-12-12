@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Editar Cliente: {{$clientes->cli_nombre}}</h3>
                  @if (count($errors)>0)
                  <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                        @endforeach
                        </ul>
                  </div>
                  @endif
            </div>
      </div>

      {!!Form::model($clientes,['method'=>'PATCH','route'=>['ventas.cliente.update',$clientes->cli_rut]])!!}
            {{Form::token()}}
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label for="cli_rut">Rut</label>
                  <div class="input-group">
                        <input type="text" name="cli_rut" class="form-control" value="{{$clientes->cli_rut}}">
                        <span class="input-group-addon">-</span>
                        <input type="text" class="form-control" style="width: 45px" name="cli_dv" value="{{$clientes->cli_dv}}" maxlength="1" placeholder="DV">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_nombre">Nombre</label>
                        <input type="text" name="cli_nombre" class="form-control" value="{{$clientes->cli_nombre}}">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_apellidopaterno">Apellido paterno</label>
                        <input type="text" name="cli_apellidopaterno" class="form-control" value="{{$clientes->cli_apellidopaterno}}">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_apellidomaterno">Apellido materno</label>
                        <input type="text" name="cli_apellidomaterno" class="form-control" value="{{$clientes->cli_apellidomaterno}}">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_razonsocial">Razón social</label>
                        <input type="text" name="cli_razonsocial" class="form-control" value="{{$clientes->cli_razonsocial}}">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_giro">Giro</label>
                        <input type="text" name="cli_giro" class="form-control" value="{{$clientes->cli_giro}}">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_direccion">Dirección</label>
                        <input type="text" name="cli_direccion" class="form-control"  value="{{$clientes->cli_direccion}}">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_Representante">Representante</label>
                        <input type="text" name="cli_representante" class="form-control" value="{{$clientes->cli_representante}}">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <button class="btn btn-danger" type="reset">Cancelar</button>
                  </div>
            </div>
      </div>

            {!!Form::Close()!!}                    
            <a onclick="history.go(-1);"><button class="btn btn-warning">Regresar</button></a>
@endsection