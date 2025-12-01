<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaInicialController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\OrganizadorController;
use App\Http\Controllers\ExpositorController;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\ParceirosController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\InscricoesController;
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Rotas Públicas (Acessíveis a Todos)
|--------------------------------------------------------------------------
*/
// Rotas visíveis a todos
Route::get('/login', [AuthController::class, 'mostrarLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Rota protegida, mas acessível publicamente para iniciar a ação de logout
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


Route::get('/', [PaginaInicialController::class, 'indice'])->name('pagina-inicial');

// Rotas de Conteúdo Público (índice e visualização única)
Route::prefix('galeria')->group(function () {
    Route::get('/', [GaleriaController::class, 'indice'])->name('galeria.indice');
    // Não tem rota 'mostrar' para galeria no seu código, mas se tivesse seria aqui
});

Route::prefix('eventos')->group(function () {
    // Acessível via /eventos
    Route::get('/', [EventoController::class, 'indice'])->name('eventos.indice');
    // Acessível via /eventos/{id}
    Route::get('/{id}', [EventoController::class, 'mostrar'])->name('eventos.mostrar');
});

Route::prefix('agenda')->group(function () {
    // Rota de índice para Agenda
    Route::get('/', [EventoController::class, 'indice'])->name('agenda.indice');
    // Rota que estava a faltar (e a causar o erro)
    Route::get('/{id}', [EventoController::class, 'mostrar'])->name('agenda.mostrar');
});



// Rotas de Páginas Estáticas e Formulários Públicos
Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');
Route::get('/programa', [ProgramaController::class, 'index'])->name('programa');
Route::get('/inscricoes', [InscricoesController::class, 'index'])->name('inscricoes');
Route::get('/organizador', [OrganizadorController::class, 'indice'])->name('organizador.indice');
Route::get('/expositor', [ExpositorController::class, 'indice'])->name('expositor.indice');
Route::get('/visitante', [VisitanteController::class, 'indice'])->name('visitante.indice');
Route::prefix('contacto')->group(function () {
    Route::get('/', [ContactoController::class, 'indice'])->name('contacto.indice');
    Route::post('/', [ContactoController::class, 'armazenar'])->name('contacto.armazenar');
});
Route::post('/newsletter/inscrever', [ContactoController::class, 'inscrever'])->name('newsletter.inscrever');


/*
|--------------------------------------------------------------------------
| Rotas de Administração (Protegidas)
|--------------------------------------------------------------------------
| Acessíveis apenas a utilizadores autenticados e com is_admin = true
*/

Route::middleware(['auth', 'admin'])->group(function () {

    // 1. Dashboard Principal
    Route::get('/dashboard', [DashboardController::class, 'indice'])->name('dashboard.indice');

    Route::prefix('utilizadores')->group(function () {
        Route::get('/criar', [AuthController::class, 'criar'])->name('utilizadores.criar');
        Route::post('/', [AuthController::class, 'register'])->name('utilizadores.armazenar');
        // Futuramente, pode adicionar rotas para listar, editar e eliminar utilizadores aqui
    });
    // 2. CRUD de Galeria
    Route::prefix('galeria')->group(function () {
        Route::get('/criar', [GaleriaController::class, 'criar'])->name('galeria.criar');
        Route::post('/', [GaleriaController::class, 'armazenar'])->name('galeria.armazenar');
        Route::get('/{id}/editar', [GaleriaController::class, 'editar'])->name('galeria.editar');
        Route::put('/{id}', [GaleriaController::class, 'atualizar'])->name('galeria.atualizar');
        Route::delete('/{id}', [GaleriaController::class, 'eliminar'])->name('galeria.eliminar');
    });

    // 3. CRUD de Eventos (As rotas mostrar e indice foram deixadas públicas acima)
    Route::prefix('eventos')->group(function () {
        Route::get('/criar', [EventoController::class, 'criar'])->name('eventos.criar');
        Route::post('/', [EventoController::class, 'armazenar'])->name('eventos.armazenar');
        Route::get('/{id}/editar', [EventoController::class, 'editar'])->name('eventos.editar');
        Route::put('/{id}', [EventoController::class, 'atualizar'])->name('eventos.atualizar');
        Route::delete('/{id}', [EventoController::class, 'eliminar'])->name('eventos.eliminar');
    });

    // 4. CRUD de Parceiros
    Route::prefix('parceiros')->group(function () {
     
        Route::get('/criar', [ParceirosController::class, 'criar'])->name('parceiros.criar');
        Route::get('/', [ParceirosController::class, 'indice'])->name('parceiros.indice');

        Route::get('/{id}/editar', [ParceirosController::class, 'editar'])->name('parceiros.editar');
        Route::put('/{id}', [ParceirosController::class, 'atualizar'])->name('parceiros.atualizar');
        Route::delete('/{id}', [ParceirosController::class, 'eliminar'])->name('parceiros.eliminar');
        
        Route::get('/{id}', [ParceirosController::class, 'mostrar'])->name('parceiros.mostrar');
        Route::post('/', [ParceirosController::class, 'armazenar'])->name('parceiros.armazenar');
    });

    // 5. Gestão de Mensagens (Acessível só ao Admin)
    Route::prefix('contacto')->group(function () {
        Route::get('/mensagens', [ContactoController::class, 'listarMensagens'])->name('contacto.mensagens');
        Route::delete('/{id}', [ContactoController::class, 'eliminarMensagem'])->name('contacto.eliminar');
    });
});