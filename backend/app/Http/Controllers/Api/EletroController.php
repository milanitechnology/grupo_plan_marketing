<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Eletro;
use App\Http\Requests\StoreEletroRequest;
use App\Http\Resources\EletroResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EletroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        return Eletro::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request)
    {
       return Eletro::find($request->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEletroRequest $request)
    {
        $eletro = Eletro::create($request->all());
        return new EletroResource($eletro);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eletro  $eletro
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEletroRequest $request, Eletro $eletro)
    {
        $eletro = Eletro::find($request->id);
        $eletro->update($request->all());
        
        return response()->json(["success" => "true"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eletro  $eletro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $eletro = Eletro::find($request->id);
        $eletro->delete();

        return response()->json(["success" => "true"], 200);
    }
}
