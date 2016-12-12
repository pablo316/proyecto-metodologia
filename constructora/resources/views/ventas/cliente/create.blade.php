@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Nuevo cliente</h3>
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
            {!!Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="cli_rut">Rut</label>
                  <div class="input-group">
                        <input type="text" name="cli_rut" class="form-control" placeholder="Rut" "><span class="input-group-addon">-</span>
                        <input type="text" class="form-control" style="width: 45px" name="cli_dv" maxlength="1" placeholder="DV">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_nombre">Nombre</label>
                        <input type="text" name="cli_nombre" class="form-control" placeholder="Nombre">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_apellidopaterno">Apellido paterno</label>
                        <input type="text" name="cli_apellidopaterno" class="form-control" placeholder="Apellido paterno">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_apellidomaterno">Apellido materno</label>
                        <input type="text" name="cli_apellidomaterno" class="form-control" placeholder="Apellido materno">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_razonsocial">Razón social</label>
                        <input type="text" name="cli_razonsocial" class="form-control" placeholder="Razón social">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_giro">Giro</label>
                        <input type="text" name="cli_giro" class="form-control" placeholder="Giro">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_direccion">Dirección</label>
                        <input type="text" name="cli_direccion" class="form-control" placeholder="Dirección">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <label for="cli_Representante">Representante</label>
                        <input type="text" name="cli_representante" class="form-control" placeholder="Representante">
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <button class="btn btn-danger" type="reset">Cancelar</button>
                  </div>
            </div>
      </div>
            {!!Form::close()!!}           
            <a onclick="history.go(-1);"><button class="btn btn-warning">Regresar</button></a>
@endsection