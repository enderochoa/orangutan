<?php

namespace App\Http\Controllers;

use App\Collection\BudgetCode;
use Illuminate\Http\Request;

class BudgetCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgetCodes = BudgetCode::all();
        //dd($partidas);
        return view('budgetcode/index',compact('budgetCodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('budgetcode/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post       = $request->all();
        $budgetCode = BudgetCode::create($post);
        
        return redirect()->route('budgetCode_show',[ 'budgetCode' => $budgetCode->id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetCode $budgetCode)
    {
        return view('budgetcode/show',compact('budgetCode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetCode $budgetCode)
    {
        return view('budgetcode/edit',compact('budgetCode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BudgetCode $budgetCode)
    {
        $budgetCode->name       = $request->name;
        $budgetCode->assignment = $request->assignment;

        $budgetCode->update();
        
        return redirect()->route('budgetCode_show',[ 'budgetCode' => $budgetCode->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetCode $budgetCode)
    {
        $budgetCode->delete();

        return redirect()->route('budgetCode_index');
    }
}