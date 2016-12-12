@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Editar material: {{$materia->mat_nombre}}</h3>
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
            {!!Form::model($materia,['method'=>'PATCH','route'=>['bodega.materia.update',$materia->mat_codigo]])!!}
            {{Form::token()}}
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                  <label for="mat_codigo">Código</label>
                  <input type="text" name="mat_codigo" required value="{{$materia->mat_codigo}}" class="form-control" placeholder="Código">
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                  <label>Rut proveedor</label>
                     <select name="pro_rut" class="form-control">
                           @foreach($proveedor as $mat)
                                 <option value="{{$mat->pro_rut}}" selected>{{$mat->pro_rut}}-{{$mat->pro_dv}} </option>

                           @endforeach
                     </select>   
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                  <label for="mat_nombre">Nombre</label>
                  <input type="text" name="mat_nombre"  required value="{{$materia->mat_nombre}}" class="form-control" placeholder="Nombre">
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                  <label for="mat_marca">Marca material</label>
                  <input type="text" name="mat_marca"  required value="{{$materia->mat_marca}}" class="form-control" placeholder="Marca material">
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <div class="form-group">
                  <label for="mat_stockini">Stock actual</label>
                  <input type="text" name="mat_stockini" required value="{{$materia->mat_stockini}}" class="form-control"  placeholder="Stock actual">
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <div class="form-group">
                  <label for="mat_stockmin">Stock mínimo</label>
                  <input type="text" name="mat_stockmin" required value="{{$materia->mat_stockmin}}" class="form-control" placeholder="Stock mínimo">
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <div class="form-group">
                  <label for="mat_fechaad">Fecha</label>
                  <input type="text" name="mat_fechaad"  required value="{{$materia->mat_fechaad}}" class="form-control" placeholder="Fecha">
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                  <label for="mat_precio">Precio</label>
                  <input type="text" name="mat_precio"  required value="{{$materia->mat_precio}}" class="form-control" placeholder="Precio">
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
         </div>

            {!!Form::Close()!!}
                              
         </div>
         <a onclick="history.go(-1);"><button class="btn btn-warning">Regresar</button></a>      
        </div>     
     

@endsection