<?php

namespace App\Http\Controllers;

use App\Models\RegisterCultive;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class RegisterCultiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agricultor.RegistroC');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registerCultive = new RegisterCultive;
        
        $registerCultive->name_cultive = $request->name_cultive;
        $registerCultive->type_cultive = $request->type_cultive;
        $registerCultive->ubication_cultive = $request->ubication_cultive;
        $registerCultive->start_production = $request->start_production;
        $registerCultive->save();
        return redirect()->route('agricultor.RegistroC');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterCultive  $registerCultive
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterCultive $registerCultive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterCultive  $registerCultive
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterCultive $registerCultive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisterCultive  $registerCultive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterCultive $registerCultive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterCultive  $registerCultive
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterCultive $registerCultive)
    {
        //
    }
}
