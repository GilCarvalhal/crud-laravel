<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
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
                'contato' => 'nullable|string|digits_between:11,14'
            ]);

            DB::insert(
                'insert into usuario(nome, idade, contato) values (?, ?, ?)',
                [
                    $validatedData['nome'],
                    $validatedData['idade'],
                    $validatedData['contato'],
                ]
            );

            DB::commit();
            return redirect()->route('welcome')->with('success', 'Cadastrado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('message-error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);

        return view('usuario.edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction(); // Inicia uma nova transação
        try {
            DB::update(
                "update usuario set nome = ?, idade = ?, contato = ? where id = ?",
                [
                    $request->input('nome'),
                    $request->input('idade'),
                    $request->input('contato'),
                    $id
                ]
            );
            DB::commit(); // Confirma a transação
            return redirect()->route('usuario.index', $id)->with('success', 'Cadastro atualizado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack(); // Reverte a transação em caso de erro
            Log::error($e); // Registra o erro no log
            return redirect()->route('usuario.edit', $id)->with('message-error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            DB::delete("delete from usuario where id = ?", [$id]);
            return redirect()->route('usuario.index')->with('success', 'Cadastro excluido com sucesso!');
        } catch (Exception $e) {
            return redirect()->route('usuario.index')->with('message-error', $e->getMessage());
        }
    }

    public function show($id)
    {

        $usuario = Usuario::findOrFail($id);

        return view('usuario.show', compact('usuario'));
    }
}
