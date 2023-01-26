<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Foto_evento;
use App\Http\Resources\FotoEventoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FotoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotosevento = Foto_evento::all();
        return response(['fotosevento' => FotoEventoResource::collection($fotosevento), 'message' => 'Retrieved successfully'], 200);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foto_evento  $foto_evento
     * @return \Illuminate\Http\Response
     */
    public function show(Foto_evento $fotoevento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foto_evento  $foto_evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foto_evento $fotoevento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto_evento  $foto_evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto_evento $fotoevento)
    {
        $fotoevento->delete();
        return response(['message' => 'Deleted']);
    }
}
