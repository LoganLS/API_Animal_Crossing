<?php

namespace App\Http\Api\Controllers;

use App\Models\SetFurniture;
use App\Http\Requests\StoreSetFurnitureRequest;
use App\Http\Requests\UpdateSetFurnitureRequest;

class SetFurnitureController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setFurnitures = SetFurniture::all();

        return response()->json($setFurnitures);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setFurniture = SetFurniture::find($id);

        return response()->json($setFurniture);
    }
}
