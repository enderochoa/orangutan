<?php

namespace App\Http\Controllers;

use App\Entity\Partida;
use Illuminate\Http\Request;

class PartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidas = Partida::all();
        //dd($partidas);
        return view('partida/index',compact('partidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partida/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post    = $request->all();
        $partida = Partida::create($post);
        
        return redirect()->route('partida_show',[ 'partida' => $partida->id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function show(Partida $partida)
    {
        return view('partida/show',compact('partida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function edit(Partida $partida)
    {
        return view('partida/edit',compact('partida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partida $partida)
    {
        $partida->denominacion = $request->denominacion;
        $partida->asignacion = $request->asignacion;

        $partida->update();
        
        return redirect()->route('partida_show',[ 'partida' => $partida->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partida $partida)
    {
        $partida->delete();

        return redirect()->route('partida_index');
    }
}
