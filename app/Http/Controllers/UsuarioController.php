<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    public function index()
    {
        try {
            $usuarios = DB::select("select usuario.id, usuario.nome, usuario.idade, usuario.contato,
            endereco.cep, endereco.endereco, endereco.bairro, endereco.cidade, endereco.estado, endereco.numero
            from usuario
            join endereco on usuario.endereco_id = endereco.id");
            return view('welcome', compact('usuarios'));
        } catch (Exception $e) {
            Log::error($e);
            return redirect()->route('usuario.index')->with('error', $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $endereco = new Endereco();
            $endereco->cep = $request->input('cep');
            $endereco->endereco = $request->input('endereco');
            $endereco->bairro = $request->input('bairro');
            $endereco->cidade = $request->input('cidade');
            $endereco->estado = $request->input('estado');
            $endereco->numero = $request->input('numero');
            $endereco->save();

            $usuario = new Usuario();
            $usuario->nome = $request->input('nome');
            $usuario->idade = $request->input('idade');
            $usuario->contato = $request->input('contato');
            $usuario->endereco_id = $endereco->id;
            $usuario->save();

            DB::commit();
            return redirect()->route('usuario.index')->with('success', 'Cadastrado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('message-error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $usuario = Usuario::find($id);

            // O usuário acima está chamando a model Usuario e endereco é a função que está dentro da model.
            $endereco = $usuario->endereco;

            return view('usuario.edit', compact('usuario', 'endereco'));
        } catch (Exception $e) {
            Log::error($e);
            return redirect()->route('usuario.index')->with('message-error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction(); // Inicia uma nova transação
        try {
            $usuario = Usuario::findOrFail($id);
            $usuario->nome = $request->input('nome');
            $usuario->idade = $request->input('idade');
            $usuario->contato = $request->input('contato');
            $usuario->save();

            $endereco = $usuario->endereco;
            $endereco->cep = $request->input('cep');
            $endereco->endereco = $request->input('endereco');
            $endereco->bairro = $request->input('bairro');
            $endereco->cidade = $request->input('cidade');
            $endereco->estado = $request->input('estado');
            $endereco->numero = $request->input('numero');
            $endereco->save();

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
        DB::beginTransaction();
        try {
            DB::delete("delete from usuario where id = ?", [$id]);

            DB::commit();
            return redirect()->route('usuario.index')->with('success', 'Cadastro excluido com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('usuario.index')->with('message-error', $e->getMessage());
        }
    }

    public function show($id)
    {

        $usuario = Usuario::findOrFail($id);

        return view('usuario.show', compact('usuario'));
    }
}
