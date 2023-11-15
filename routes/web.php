<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Galeria;
use App\Http\Controllers\SearchController;


// pagina principal del front
Route::get('/', function () {
    //CONSULTAS
    $investigadores = DB::table('investigadores')->latest()->whereNull('deleted_at')->get();
    $investigadores2 = DB::table('investigadores')->whereNull('deleted_at')->count();
    $eventos = DB::table('eventos')->latest()->take(3)->whereNull('deleted_at')->get();
    $noticias = DB::table('noticias')->latest()->take(5)->whereNull('deleted_at')->get();
    $requisitosconhortes = DB::table('requisitosconhortes')->whereNull('deleted_at')->get();
    $galerias1 = DB::table('galerias')->latest()->where('tipo', 'inicio')->whereNull('deleted_at')->take(4)->get();
    //calculo Alumnos egresados

    $calculo = DB::table('requisitosconhortes')->whereNull('deleted_at')->selectRaw('SUM(graduados) AS total')->value('total');


    return view('index', [
        'investigadores' => $investigadores, 'eventos' => $eventos, 'noticias' => $noticias,
        'galerias1' => $galerias1, 'investigadores2' => $investigadores2, 'requisitosconhogortes' => $requisitosconhortes,
        'calculo' => $calculo
    ]);
})->name('index');

//    plan de estudiantes
Route::get('/plan_estudios', function () {
    $galerias2 = Galeria::latest()->where('tipo', 'plan')->whereNull('deleted_at')->take(4)->get();
    return view('plan_estudios', ['galerias2' => $galerias2]);
})->name('plan_estudios');
//Nucleo Academico basico
Route::get('/nab', function () {
    $investigadores = DB::table('investigadores')->latest()->take(20)->whereNull('deleted_at')->get(); // Realiza la consulta a la base de datos para obtener todos los investigadores
    return view('nab', ['investigadores' => $investigadores]);
})->name('nab');
//Requisitos
Route::get('/requisitos', function () {
    $galerias3 = DB::table('galerias')->latest()->where('tipo', 'requisitos')->whereNull('deleted_at')->take(4)->get();
    $requisitos = DB::table('requisitos')->get(); // Realiza la consulta a la base de datos para obtener todos los investigadores
    return view('requisitos', ['requisitos' => $requisitos, 'galerias3' => $galerias3]);
})->name('requisitos');
// estudiantes
Route::get('/estudiantes', function () {
    $requisitosconhortes = DB::table('requisitosconhortes')->latest()->take(10)->whereNull('deleted_at')->get();
    $estudiantes = DB::table('estudiantes')->latest()->take(10)->whereNull('deleted_at')->get();
    $galerias4 = DB::table('galerias')->latest()->where('tipo', 'estudiantes')->whereNull('deleted_at')->take(4)->get();
    return view('estudiantes', ['requisitosconhortes' => $requisitosconhortes, 'galerias4' => $galerias4, 'estudiantes' => $estudiantes]);
})->name('estudiantes');
// contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
//vistas de registro
Route::get('/iniciar', function () {
    return view('auth.register');
})->name('iniciar');
//aviso de privacidad vista
Route::get('/avisos-privacidad', function () {
    return view('avisos-privacidad');
})->name('avisos-privacidad');


//Barra de busqueda
Route::post('/search', [SearchController::class, 'search'])->name('search');
// -------------------------------------------------------------------------------------------------------------

// dashboard principal del back-end
Route::get('/dashboard', function () {
    //CONTADORES
    $usuarios1 = DB::table('users')->where('tipo', 'Admin')->whereNull('deleted_at')->count();
    $usuarios2 = DB::table('users')->where('tipo', 'Editor')->whereNull('deleted_at')->count();
    $usuarios3 = DB::table('users')->where('tipo', 'estandar')->whereNull('deleted_at')->count();
    $inv = DB::table('investigadores')->whereNull('deleted_at')->count();
    $noticias = DB::table('noticias')->whereNull('deleted_at')->count();
    $eventos = DB::table('eventos')->whereNull('deleted_at')->count();
    $galerias = DB::table('galerias')->whereNull('deleted_at')->count();
    //CONSULTAS
    $inv2 = DB::table('investigadores')->whereNull('deleted_at')->latest()->take(2)->get();
    $noticias2 = DB::table('noticias')->whereNull('deleted_at')->latest()->take(2)->get();
    $eventos2 = DB::table('eventos')->whereNull('deleted_at')->latest()->take(2)->get();
    $galerias2 = DB::table('galerias')->whereNull('deleted_at')->latest()->take(2)->get();
    $usuarios4 = DB::table('users')->whereNull('deleted_at')->latest()->take(5)->get();
    //DATOS PARA LAS GRÁFICAS
    $categories = ["Noticias", "Eventos", "Galerias", "Investigadores"];
    $categories2 = ["Administrador", "Editor", "estandar"];

    return view('vistas_Back-end.dashboard', compact(
        'inv',
        'noticias',
        'eventos',
        'galerias',
        'categories',
        'usuarios1',
        'usuarios2',
        'usuarios3',
        'categories2',
        'usuarios4',
        'inv2',
        'noticias2',
        'eventos2',
        'galerias2'
    ));
})->middleware(['auth'])->name('dashboard');

// rutas para funcionalidad del back-end
require __DIR__ . '/auth.php';
//
require __DIR__ . '/modal.php';
//
Route::get('/error', function () {
    return view('Errors.404')->middleware(['auth']);
});
