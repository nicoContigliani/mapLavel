<?php

namespace App\Http\Controllers;

use App\Maps;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  $maps = Maps::all();
//
        //  return $maps;

       // $maps = Maps::all();
//
       // return view('welcome', compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Maps $maps
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Maps $maps)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Maps $maps
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Maps $maps)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Maps                $maps
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maps $maps)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Maps $maps
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maps $maps)
    {
    }
}
