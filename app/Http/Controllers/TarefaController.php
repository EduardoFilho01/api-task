<?php

namespace App\Http\Controllers;

use App\Models\Tarefas;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function mostrarTodasTarefas()
    {
        return response()->json(Tarefas::all());
    }

    public function adicionarTarefa(Request $request)
    {
        
        $tarefa = new Tarefas;
        $tarefa->titulo_tarefa = $request->titulo_tarefa;
        $tarefa->descricao = $request->descricao;
        $tarefa->data_alteracao = date('Y-m-d H:i:s');
       
        //salvar o registro no banco
        $tarefa->save();
        return response()->json($tarefa);
    }

    public function atualizarTarefa($id, Request $request )
    {
        $tarefa = Tarefas::find($id);

        $tarefa->titulo_tarefa = $request->titulo_tarefa;
        $tarefa->descricao = $request->descricao;
        $tarefa->data_alteracao =  date('Y-m-d H:i:s'); //$request->data_alteracao;

        //utilizar função de save novamente
        $tarefa->save();

        return response()->json($tarefa);
    }

    public function deletarTarefa($id)
    {
        $tarefa = Tarefas::find($id);

        $tarefa->delete();

        return response()->json('Deletado com sucesso!', 200);
    }


}
