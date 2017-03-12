<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Devis::all();
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'iddevis' => 'required',
            'referencedevis' => 'required',
            'datedevis' => 'required',
            'tarifdevis' => 'required',
           
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 400);
        }

        $devis = Devis::create($request->all());
        
        return $devis;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $devis = Devis::find($id);

        if(!$devis){
            return response()->json('Le devis est introuvable',400);
        }

        return $devis;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $devis = Devis::find($id);

        $validator = Validator::make($request->all(), [
            'iddevis' => 'required',
            'referencedevis' => 'required',
            'datedevis' => 'required',
            'tarifdevis' => 'required',
           
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 400);
        }

        $devis = Devis::update($request->all());
        
        return $devis;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devis = Devis::find($id);

        if(!$devis){
            return response()->json('Le devis est introuvable',400);
        }

        $devis->delete();

        return 'Le devis a était supprimé';
    }
}
