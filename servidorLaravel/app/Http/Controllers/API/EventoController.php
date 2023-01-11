<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use App\Http\Resources\EventoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return response(['eventos' => EventoResource::collection($eventos), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'nombre' => 'required|max:255'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'message' => 'Validation Fail'], 400);
        }

        $evento = Evento::create($data);

        return response(['Evento' => new EventoResource($evento), 'message' => 'Created Successfully'], 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(evento $evento)
    {
        return response(['evento' => new EventoResource($evento), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, evento $evento)
    {
        $evento->update($request->all());
        return response(['evento' => new EventoResource($evento), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(evento $evento)
    {
        $evento->delete();
        return response(['message' => 'Deleted']);
    }
}
