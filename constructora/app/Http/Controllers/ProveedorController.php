<?php

namespace constructora\Http\Controllers;

use Illuminate\Http\Request;

use constructora\Http\Requests;
use constructora\Proveedor;
use Illuminate\Support\Facades\Redirect;
use constructora\Http\Requests\ProveedorFormRequest;
use DB;


class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $proveedores=DB::table('proveedor')->where('pro_nombre','LIKE','%'.$query.'%')
            ->where ('pro_condicion','=','activo')
            ->orderBy('pro_rut','desc')
            ->paginate(7);
            return view('compras.proveedor.index',["proveedores"=>$proveedores,"searchText"=>$query]);
        }
    }
    public function create(){
    	return view("compras.proveedor.create");
    }

    public function store(ProveedorFormRequest $request){
    	$proveedor=new Proveedor;
        $proveedor->pro_rut=$request->get('pro_rut');
        $proveedor->pro_dv=$request->get('pro_dv');
    	$proveedor->pro_nombre=$request->get('pro_nombre');
    	$proveedor->pro_direccion=$request->get('pro_direccion');
    	$proveedor->pro_telefono=$request->get('pro_telefono');
        $proveedor->pro_condicion='activo';
    	$proveedor->save();
    	return Redirect::to('compras/proveedor');
    }

    public function show($id){
        return view("compras.proveedor.show",["proveedor"=>Proveedor::findOrFail($id)]);
    }

    public function edit($id){
        return view("compras.proveedor.edit",["proveedor"=>Proveedor::findOrFail($id)]);    
    }

    public function update(ProveedorFormRequest $request, $id){
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->pro_rut=$request->get('pro_rut');
        $proveedor->pro_dv=$request->get('pro_dv');
        $proveedor->pro_nombre=$request->get('pro_nombre');
        $proveedor->pro_direccion=$request->get('pro_direccion');
        $proveedor->pro_telefono=$request->get('pro_telefono');        
        $proveedor->update();
        return Redirect::to('compras/proveedor');
    }

    public function destroy($id)
    {
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->pro_condicion='inactivo';
        $proveedor->update();
        return Redirect::to('compras/proveedor');
    }
}
