<?php

namespace App\Http\Controllers;

use App\Logins;
use Illuminate\Http\Request;

class LoginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Logins=Logins::orderby('id_login')->get();
        return view("Logins.index",compact('Logins'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Logins.create");

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
        $Login=array('nombre'=>$request->nombre,
            'ap'=>$request->ap,'am'=>$request->am);
        Logins::create($Login);
        return redirect("Logins");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logins  $logins
     * @return \Illuminate\Http\Response
     */
    public function show(Logins $logins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logins  $logins
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Login=Logins::find($id);
        return view('Logins.edit', compact('Login'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logins  $logins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logins $Login)
    {
        $Login->update($request->all());
        return redirect("Logins");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logins  $logins
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Login=Logins::find($id);
        $Login->delete();
        return redirect("Logins");
    }
}
