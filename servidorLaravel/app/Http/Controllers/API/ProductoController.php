<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Http\Resources\ProductoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return response(['producto' => ProductoResource::collection($productos), 'message' => 'Retrieved successfully'], 200);
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
            'id_tipo' => 'required|max:255',
            'id_editorial' => 'required|max:255',
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'message' => 'Validation Fail'], 400);
        }

        $producto = Producto::create($data);

        return response(['Producto' => new ProductoResource($producto), 'message' => 'Created Successfully'], 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return response(['Producto' => new ProductoResource($producto), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());
        return response(['Producto' => new ProductoResource($producto), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response(['message' => 'Deleted']);
    }
}
