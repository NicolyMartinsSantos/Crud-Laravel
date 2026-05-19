<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
{
    $clientes = Cliente::all();

    return view('clientes', compact('clientes'));
}

    public function create()
    {
        return view('create-cliente');
    }

   public function store(Request $request)
{
    Cliente::create([
        'nome' => $request->nome
    ]);

    return "Cliente salvo com sucesso!";
}

public function edit($id)
{
    $cliente = Cliente::find($id);

    return view('edit-cliente', compact('cliente'));
}

public function update(Request $request, $id)
{
    $cliente = Cliente::find($id);

    $cliente->update([
        'nome' => $request->nome
    ]);

    return "Cliente atualizado com sucesso!";
}

public function destroy($id)
{
    $cliente = Cliente::find($id);

    $cliente->delete();

    return "Cliente deletado com sucesso!";
}

}