<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Volumen;
use App\Http\Resources\VolumenResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VolumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volumenes = Volumen::all();
        return response(['volumenes' => VolumenResource::collection($volumenes), 'message' => 'Retrieved successfully'], 200);
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
            'nombre' => 'required|max:255',
            'cantidad' => 'required|max:255',
            'id_producto' => 'required|max:255',
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'message' => 'Validation Fail'], 400);
        }

        $volumen = Volumen::create($data);

        return response(['Volumen' => new VolumenResource($volumen), 'message' => 'Created Successfully'], 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volumen  $volumen
     * @return \Illuminate\Http\Response
     */
    public function show(Volumen $voluman)
    {
        return response(['Volumen' => new VolumenResource($voluman), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volumen  $volumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volumen $voluman)
    {
        $voluman->update($request->all());
        return response(['Volumen' => new VolumenResource($voluman), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volumen  $volumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volumen $voluman)
    {
        $voluman->delete();
        return response(['message' => 'Deleted']);
    }
}
