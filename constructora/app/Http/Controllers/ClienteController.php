<?php

namespace constructora\Http\Controllers;

use Illuminate\Http\Request;

use constructora\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use constructora\Http\Requests\ClienteFormRequest;
use constructora\Cliente;
use DB;


class ClienteController extends Controller
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
            $clientes=DB::table('cliente')->where('cli_nombre','LIKE','%'.$query.'%')
            ->where ('cli_condicion','=','activo')
            ->orderBy('cli_dv','desc')
            ->paginate(7);
            return view('ventas.cliente.index',["clientes"=>$clientes,"searchText"=>$query]);
        }
    }
    public function create(){
    	return view("ventas.cliente.create");
    }

    public function store(ClienteFormRequest $request){
    	$cliente=new Cliente;
        $cliente->cli_rut=$request->get('cli_rut');
        $cliente->cli_dv=$request->get('cli_dv');
    	$cliente->cli_nombre=$request->get('cli_nombre');
    	$cliente->cli_apellidopaterno=$request->get('cli_apellidopaterno');
    	$cliente->cli_apellidomaterno=$request->get('cli_apellidomaterno');
    	$cliente->cli_razonsocial=$request->get('cli_razonsocial');
    	$cliente->cli_giro=$request->get('cli_giro');
    	$cliente->cli_direccion=$request->get('cli_direccion');
    	$cliente->cli_representante=$request->get('cli_representante');
        $cliente->cli_condicion='activo';
    	$cliente->save();
    	return Redirect::to('ventas/cliente');
    }
    public function show($id){
        return view("ventas.cliente.show",["clientes"=>Cliente::findOrFail($id)]);
    }

    public function edit($id){
        return view("ventas.cliente.edit",["clientes"=>Cliente::findOrFail($id)]);    
    }
    public function update(ClienteFormRequest $request, $id){
        $cliente=Cliente::findOrFail($id);
        $cliente->cli_rut=$request->get('cli_rut');
        $cliente->cli_dv=$request->get('cli_dv');
    	$cliente->cli_nombre=$request->get('cli_nombre');
    	$cliente->cli_apellidopaterno=$request->get('cli_apellidopaterno');
    	$cliente->cli_apellidomaterno=$request->get('cli_apellidomaterno');
    	$cliente->cli_razonsocial=$request->get('cli_razonsocial');
    	$cliente->cli_giro=$request->get('cli_giro');
    	$cliente->cli_direccion=$request->get('cli_direccion');
    	$cliente->cli_representante=$request->get('cli_representante');       
        $cliente->update();
        return Redirect::to('ventas/cliente');
    }
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->cli_condicion='inactivo';
        $cliente->update();
        return Redirect::to('ventas/cliente');
    }

}

