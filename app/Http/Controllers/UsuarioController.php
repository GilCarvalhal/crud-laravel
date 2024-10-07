<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = DB::select("select * from usuario");
        return view('welcome', compact('usuarios'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $validatedData = $request->validate([
                'nome' => 'required|string|max:255',
                'idade' => 'required|numeric|min:18|max:120',
                'cpf' => 'required|string|digits_between:11,14'
            ]);

            DB::insert(
                'insert into usuario(nome, idade, cpf) values (?, ?, ?)',
                [
                    $validatedData['nome'],
                    $validatedData['idade'],
                    $validatedData['cpf'],
                ]
            );

            DB::commit();
            return redirect()->route('welcome')->with('success', 'Cadastro finalizado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('message-error', $e->getMessage());
        }
    }
}
