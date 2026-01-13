<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use App\Http\Requests\StoreFuncionarioRequest;
use App\Http\Resources\FuncionarioResource;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionario::with('empresa')->get();
        return FuncionarioResource::collection($funcionarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFuncionarioRequest $request)
    {
        $funcionario = Funcionario::create($request->validated());
        return new FuncionarioResource($funcionario);
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFuncionarioRequest $request, Funcionario $funcionario)
    {
        $funcionario->update($request->validated());
        return new FuncionarioResource($funcionario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return response(null, 204);
    }
}
