<?php

namespace App\Http\Controllers;

use App\ModalidadesEntrega;
use Illuminate\Http\Request;

class ModalidadesEntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ModalidadesEntrega=ModalidadesEntrega::orderby('id_modalidades_entregas')->get();
        return view("ModalidadesEntrega.index",compact('ModalidadesEntrega'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ModalidadesEntrega.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ModalidadesEntrega=array('descripcion'=>$request->descripcion);
        ModalidadesEntrega::create($ModalidadesEntrega);
        return redirect("ModalidadesEntrega");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModalidadesEntrega  $modalidadesEntrega
     * @return \Illuminate\Http\Response
     */
    public function show(ModalidadesEntrega $modalidadesEntrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModalidadesEntrega  $modalidadesEntrega
     * @return \Illuminate\Http\Response
     */
    public function edit(ModalidadesEntrega $modalidadesEntrega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModalidadesEntrega  $modalidadesEntrega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModalidadesEntrega $modalidadesEntrega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModalidadesEntrega  $modalidadesEntrega
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModalidadesEntrega $modalidadesEntrega)
    {
        //
    }
}