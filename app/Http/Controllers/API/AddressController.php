<?php

namespace App\Http\Controllers\API;

use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddressStoreUpdate;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Address::all();

        return response($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AddressStoreUpdate  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressStoreUpdate $request)
    {
        $data = Address::create($request->all());

        return response(['data' => $data, 'message' => 'Cadastrado com sucesso!'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Address::findOrFail($id);

        return response($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AddressStoreUpdate  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddressStoreUpdate $request, $id)
    {
        $data = Address::findOrFail($id);
        
        $data->update($request->all());

        return response(['message' => 'Atualizado com sucesso!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Address::findOrFail($id);

        $data->delete();

        return response(['message' => 'Deletado com sucesso!'], 200);
    }
}
