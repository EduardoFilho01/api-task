<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/tarefa', 'TarefaController@mostrarTodasTarefas');

$router->post('/tarefa/adicionar', 'TarefaController@adicionarTarefa');

$router->put('/tarefa/{id}/atualizar', 'TarefaController@atualizarTarefa');

$router->delete('tarefa/{id}/deletar', 'TarefaController@deletarTarefa');

$router->put('/tarefa/{id}/atualizar/status', 'TarefaController@updateStatusTarefa');