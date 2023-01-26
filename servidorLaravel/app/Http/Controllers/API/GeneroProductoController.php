<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Genero_producto;
use App\Http\Resources\GeneroProductoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneroProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generosproducto = Genero_producto::all();
        return response(['generosproducto' => GeneroProductoResource::collection($generosproducto), 'message' => 'Retrieved successfully'], 200);
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
            'id_genero' => 'required|max:255',
            'id_producto' => 'required|max:255',
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'message' => 'Validation Fail'], 400);
        }

        $generoproducto = Genero_producto::create($data);

        return response(['GeneroProducto' => new GeneroProductoResource($generoproducto), 'message' => 'Created Successfully'], 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genero_producto  $genero_producto
     * @return \Illuminate\Http\Response
     */
    public function show(Genero_producto $generoproducto)
    {
        return response(['GeneroProducto' => new GeneroProductoResource($generoproducto), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genero_producto  $genero_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genero_producto $generoproducto)
    {
        $generoproducto->update($request->all());
        return response(['GeneroPRoducto' => new GeneroProductoResource($generoproducto), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genero_producto  $genero_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genero_producto $generoproducto)
    {
        $generoproducto->delete();
        return response(['message' => 'Deleted']);
    }
}
