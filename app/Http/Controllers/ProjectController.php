<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::all();
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
            'idprojet' => 'required',
            'nomprojet' => 'required',
            'referenceprojet' => 'required',
            'dateprojet' => 'required',
            'statutprojet' => 'required',
            'reduction' => 'required',
            'idclient' => 'required',
            'iddevis' => 'required',
            'idmodalite' => 'required',
            'idutilisateur' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 400);
        }

        $projet = Client::create($request->all());
        
        return $projet;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::find($id);

        if(!$projet){
            return response()->json('Le projet est introuvable',400);
        }

       return $projet

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
         $projet = Projet::find($id);

         $validator = Validator::make($request->all(), [
            'idprojet' => 'required',
            'nomprojet' => 'required',
            'referenceprojet' => 'required',
            'dateprojet' => 'required',
            'statutprojet' => 'required',
            'reduction' => 'required',
            'idclient' => 'required',
            'iddevis' => 'required',
            'idmodalite' => 'required',
            'idutilisateur' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 400);
        }

        $projet = Client::update($request->all());
        
        return $projet;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::find($id);

        if(!$projet){
            return response()->json('Le projet est introuvable',400);
        }

        $projet->delete();

        return 'Le projet a était supprimé';
    }
}
