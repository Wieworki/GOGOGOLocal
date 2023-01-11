<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tipo_producto;
use App\Http\Resources\TipoProductoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo_producto::all();
        return response(['tiposProducto' => TipoProductoResource::collection($tipos), 'message' => 'Retrieved successfully'], 200);
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

        $tipo = Tipo_producto::create($data);

        return response(['TipoProducto' => new TipoProductoResource($tipo), 'message' => 'Created Successfully'], 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_producto  $tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_producto $tipoproducto)
    {
        return response(['TipoProducto' => new TipoProductoResource($tipoproducto), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_producto  $tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_producto $tipoproducto)
    {
        $tipoproducto->update($request->all());
        return response(['TipoProducto' => new TipoProductoResource($tipoproducto), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_producto  $tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_producto $tipoproducto)
    {
        $tipoproducto->delete();
        return response(['message' => 'Deleted']);
    }
}
