<?php

namespace App\Http\Controllers;

use App\Http\Resources\PorudzbinaResource;
use App\Models\Porudzbina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PorudzbinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $porudzbine = Porudzbina::all();
       return PorudzbinaResource::collection($porudzbine);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //post
    {
        $validator = Validator::make($request->all(), [
            'datumPorudzbine' => 'required',
            'adresaDostave' => 'required|string|max:100',
            'proizvod_id' => 'required', 
            'user_id' => 'required'
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $p = Porudzbina::create([
            'datumPorudzbine' => $request->datumPorudzbine, 
            'adresaDostave' => $request->adresaDostave, 
            'proizvod_id' => $request->proizvod_id,
            'user_id' => $request->user_id
        ]);
        $p->save();
        return response()->json(['Porudzbina kreirana!', new PorudzbinaResource($p)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $p = Porudzbina::find($id);
         if($p)
            return new PorudzbinaResource($p);
        return response()->json('Trazeni objekat ne postoji u bazi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function edit(Porudzbina $porudzbina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porudzbina $porudzbina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //delete
    {
        $p = Porudzbina::find($id);
        if($p){
            $p->delete();
            return response()->json(['Uspesno obrisano!', new PorudzbinaResource($p)]);
        
        }
           
       return response()->json('Trazeni objekat ne postoji u bazi');
    }
}
