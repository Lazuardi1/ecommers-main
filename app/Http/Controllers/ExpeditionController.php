<?php

namespace App\Http\Controllers;

use App\Models\expedition;
use App\Http\Requests\StoreexpeditionRequest;
use App\Http\Requests\UpdateexpeditionRequest;

class ExpeditionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreexpeditionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreexpeditionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\expedition  $expedition
     * @return \Illuminate\Http\Response
     */
    public function show(expedition $expedition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\expedition  $expedition
     * @return \Illuminate\Http\Response
     */
    public function edit(expedition $expedition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateexpeditionRequest  $request
     * @param  \App\Models\expedition  $expedition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateexpeditionRequest $request, expedition $expedition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\expedition  $expedition
     * @return \Illuminate\Http\Response
     */
    public function destroy(expedition $expedition)
    {
        //
    }
}
