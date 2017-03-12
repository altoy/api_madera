<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Client;
Use Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Client::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
         $validator = Validator::make($request->all(), [
            'idclient' => 'required',
            'nomclient' => 'required',
            'adresseclient' => 'required',
            'adresse2client' => 'required',
            'cpclient' => 'required',
            'villeclient' => 'required',
            'telclient' => 'required',
            'mailclient' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 400);
        }

        $customer = Client::create($request->all());
        
        return $customer;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        if(!$client){
            return response()->json('Le client est introuvable',400);
        }

        return $client;
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
        $client = Client::find($id);

        //$validator = Validator::make($request->all(), [
        //    'idclient' => 'required',
        //    'nomclient' => 'required',
        //    'adresseclient' => 'required',
        //    'adresse2client' => 'required',
        //    'cpclient' => 'required',
        //    'villeclient' => 'required',
        //    'telclient' => 'required',
        //    'mailclient' => 'required',
        //]);
//
        //if ($validator->fails()) {
        //    return response()->json($validator->errors()->all(), 400);
        //}

        $client->update($request->all());
        
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        if(!$client){
            return response()->json('Le client est introuvable',400);
        }

        $client->delete();

        return 'Le client a était supprimé';
    }
}
