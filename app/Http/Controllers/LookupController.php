<?php

namespace App\Http\Controllers;

use App\Models\Lookup;
use Illuminate\Http\Request;

class LookupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lookups = Lookup::all();
        return view("lookups.index", compact("lookups"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("lookups.create");
    }

    /**
     * Store a newly created resource in storage
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'type' => 'required',
            'position' => 'required',
        ]);
        Lookup::create($request->all());
        return redirect()->route('lookups.index')
            ->with('success', 'Registro Exitoso!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lookup  $lookup
     * @return \Illuminate\Http\Response
     */
    public function show(Lookup $lookup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lookup  $lookup
     * @return \Illuminate\Http\Response
     */
    public function edit(Lookup $lookup)
    {
        return view("lookups.edit",compact("lookup"));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lookup  $lookup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lookup $lookup)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'type' => 'required',
            'position' => 'required',
        ]);

        $lookup->update($request->all());
        return redirect()->route('lookups.index')
            ->with('success', 'Actualización Exitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lookup  $lookup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lookup $lookup)
    {
        $lookup->delete();
        return redirect()->route("lookups.index")
            ->with("success","LOOKUP Eliminado Correctamente!!!");
    }
}
