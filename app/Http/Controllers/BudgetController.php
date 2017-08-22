<?php

namespace App\Http\Controllers;

use App\Collection\Budget;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::all();
        if(count($budgets)>0)
            return \Response::json($budgets,Response::HTTP_OK);
        else
            return \Response::json(null,Response::HTTP_NO_CONTENT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post   = $request->all();
        try {
            $budget = Budget::create($post);
            return \Response::json($budget,Response::HTTP_CREATED);
        } catch (Exception $e) {
            return \Response::json($e,Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget)
    {
        return json_encode($budget);
    }

    /**
     * [update description]
     * @param  Request $request [description]
     * @param  Budget  $budget  [description]
     * @return [type]           [description]
     */
    public function update(Request $request, Budget $budget)
    {
        $budget->name       = $request->name;
        $budget->assignment = $request->assignment;

        $budget->update();
        
        return json_encode($budget);
    }

    /**
     * [destroy description]
     * @param  Budget $budget [description]
     * @return [type]         [description]
     */
    public function destroy(Budget $budget)
    {
        $budget->delete();

        return json_encode(['succes'=>true]);
    }
}
