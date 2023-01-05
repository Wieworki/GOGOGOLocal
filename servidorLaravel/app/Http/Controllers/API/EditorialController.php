<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Editorial;
use App\Http\Resources\EditorialResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales = Editorial::all();
        return response(['editoriales' => EditorialResource::collection($editoriales), 'message' => 'Retrieved successfully'], 200);
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

        $editorial = Editorial::create($data);

        return response(['Editorial' => new EditorialResource($editorial), 'message' => 'Created Successfully'], 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(Editorial $editorial)
    {
        return response(['editorial' => new EditorialResource($editorial), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editorial $editorial)
    {
        $editorial->update($request->all());
        return response(['editorial' => new EditorialResource($editorial), 'message' => 'Retrieved Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editorial $editorial)
    {
        $editorial->delete();
        return response(['message' => 'Deleted']);
    }
}
