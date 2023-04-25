<?php

namespace App\Http\Controllers;

use App\Models\contato;
use App\Http\Requests\StorecontatoRequest;
use App\Http\Requests\UpdatecontatoRequest;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.index');
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
     * @param  \App\Http\Requests\StorecontatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecontatoRequest $request)
    {
        $validacao = [
            'nome' => ['required, max: 30'],
            'telefone' => ['required, max: 15'],
            'email' => ['required, max: 30'],
            'assunto' => ['max: 25'],
            'mensagem' => ['required, max: 500']
        ];

        $mensagem = [
            'required' => ['O campo :atribuite é obrigatório'],
            'nome.max' => ['O campo nome deve ter no máximo 30 caracteres'],
            'telefone.max' => ['O campo telefone deve ter no máximo 15 caracteres'],
            'email.max' => ['O campo email deve ter no máximo 30 caracteres'],
            'assunto.max' => ['O campo assundo deve ter no máximo 25 caracteres'],
            'mensagem.max' => ['O campo mensagem deve ter no máximo 500 carareteres']
        ];

        $request->validated($validacao, $mensagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontatoRequest  $request
     * @param  \App\Models\contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecontatoRequest $request, contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(contato $contato)
    {
        //
    }
}
