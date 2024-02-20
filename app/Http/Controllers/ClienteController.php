<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('client.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validar os dados do formulário
            $request->validate([
                'cpf' => 'required|string|unique:clientes|max:255',
                'nome' => 'required|string|max:255',
                'telefones' => 'required|string|max:255',
                'emails' => 'required|string|email|max:255|unique:clientes',
                'nascimento' => 'required|date',
            ]);


            // Criar um novo cliente
            Cliente::create([
                'cpf' => $request->cpf,
                'nome' => $request->nome,
                'telefones' => $request->telefones,
                'emails' => $request->emails,
                'nascimento' => $request->nascimento,
            ]);

            // Redirecionar ou retornar uma resposta
            return redirect()->route('dashboard')->with('success', 'Cadastro finalizado com sucesso!');
        } catch (QueryException $exception) {
            // Tratar exceção de falha na consulta ao banco de dados
            return redirect()->back()->withInput()->with('error', 'Falha na consulta ao banco de dados: erro ao cadastrar cliente. ' . PHP_EOL . $exception->getMessage());
        } catch (\Exception $exception) {
            // Tratar outras exceções
            return redirect()->back()->withInput()->with('error', 'Erro ao cadastrar o cliente: ' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
