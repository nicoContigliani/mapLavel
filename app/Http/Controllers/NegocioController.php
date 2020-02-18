<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Negocio;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $negocios = Negocio::orderBy('id', 'DESC')->paginate(3);

        return view('Negocio.index', compact('negocios'));
    }

    public function index2()
    {
        $maps = Negocio::all();

        return view('welcome', compact('maps'));
    }

    public function index3()
    {
        $mapss = Negocio::all();

        return view('welcome', compact('mapss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Negocio.create');
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
        $this->validate($request, ['nombre' => 'required', 'direccion' => 'required', 'lat' => 'required', 'lng' => 'required', 'foto' => 'required', 'comentario' => 'required']);
        Negocio::create($request->all());

        return redirect()->route('Negocio.index')->with('success', 'Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $negocios = Negocio::find($id);

        return  view('Negocio.show', compact('negocios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $negocio = Negocio::find($id);

        return view('Negocio.edit', compact('negocio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['nombre' => 'required', 'lat' => 'required', 'lat' => 'required', 'lng' => 'required', 'foto' => 'required', 'comentario' => 'required']);

        Negocio::find($id)->update($request->all());

        return redirect()->route('Negocio.index')->with('success', 'Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Negocio::find($id)->delete();

        return redirect()->route('Negocio.index')->with('success', 'Registro eliminado satisfactoriamente');
    }
}
