<?php

namespace constructora\Http\Controllers;

use Illuminate\Http\Request;

use constructora\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use constructora\Http\Requests\MateriaFormRequest;
use constructora\Materia;
use DB;


class MateriaController extends Controller
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
            $materia=DB::table('materia as a')
            ->join('proveedor as p','a.pro_rut','=','p.pro_rut')
            ->select('a.mat_codigo','a.pro_rut','p.pro_dv','a.mat_nombre','a.mat_marca','a.mat_stockini','a.mat_stockmin','a.mat_fechaad','a.mat_precio','a.mat_condicion')
            ->where ('a.mat_nombre','LIKE','%'.$query.'%' )
            ->where('mat_condicion','=','activo')

            ->orderBy('a.mat_codigo','desc')
            ->paginate(7);
            $proveedor=DB::table("proveedor")->where('pro_condicion','=','activo')->get();
            return view('bodega.materia.index',["materia"=>$materia,"searchText"=>$query]);
        }
    }
    public function create(){
    	$rut_proveedor=DB::table("proveedor")->where('pro_condicion','=','activo')->get();
    	return view("bodega.materia.create",["pro_rut"=>$rut_proveedor]);
    }

    public function store(MateriaFormRequest $request){
    	$materia=new Materia;
        $materia->mat_codigo=$request->get('mat_codigo');
    	$materia->pro_rut=$request->get('pro_rut');
    	$materia->mat_nombre=$request->get('mat_nombre');
    	$materia->mat_marca=$request->get('mat_marca');
    	$materia->mat_stockini=$request->get('mat_stockini');
    	$materia->mat_stockmin=$request->get('mat_stockmin');
    	$materia->mat_fechaad=$request->get('mat_fechaad');
        $materia->mat_precio=$request->get('mat_precio');
        $materia->mat_condicion='activo';
    	$materia->save();
    	return Redirect::to('bodega/materia');
    }

    public function show($id){
        return view("bodega.materia.show",["materia"=>Materia::findOrFail($id)]);
    }

    public function edit($id){
    	$materia=Materia::findOrFail($id);
    	$proveedor=DB::table('proveedor')->where('pro_condicion','=','activo')->get();
        return view("bodega.materia.edit",["materia"=>$materia,"proveedor"=>$proveedor]);    
    }

    public function update(MateriaFormRequest $request, $id){
        $materia=Materia::findOrFail($id);
        $materia->pro_rut=$request->get('pro_rut');
        $materia->mat_nombre=$request->get('mat_nombre');
        $materia->mat_marca=$request->get('mat_marca');
        $materia->mat_stockini=$request->get('mat_stockini');
        $materia->mat_stockmin=$request->get('mat_stockmin');
        $materia->mat_fechaad=$request->get('mat_fechaad');
        $materia->mat_precio=$request->get('mat_precio');  
        $materia->update();
        return Redirect::to('bodega/materia');
    }

    public function destroy($id)
    {
        $materia=Materia::findOrFail($id);
        $materia->mat_condicion='inactivo';
        $materia->update();
        return Redirect::to('bodega/materia');
    }
}
