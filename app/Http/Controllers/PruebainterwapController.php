<?php

namespace App\Http\Controllers;

use App\Pruebainterwap;
use Illuminate\Http\Request;

class PruebainterwapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['Prueba']=pruebainterwap::paginate(5);

        return view('Prueba.index',$datos);
        //
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Prueba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $datosPrueba=request()->all();
        $datosPrueba=request()->except('_token');

        pruebainterwap::insert($datosPrueba);

        

        return response() ->json($datosPrueba);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pruebainterwap  $pruebainterwap
     * @return \Illuminate\Http\Response
     */
    public function show(Pruebainterwap $pruebainterwap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pruebainterwap  $pruebainterwap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)   
    {

        $prueba = Prueba::findOrFail($id);

        return view('Prueba.editar',compact('prueba'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pruebainterwap  $pruebainterwap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pruebainterwap $pruebainterwap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pruebainterwap  $pruebainterwap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {

        Pruebainterwap::destroy($id);

        return redirect('Prueba');
    }
}
