 <?php

    use App\Http\Controllers\EventosController;
    use App\Http\Controllers\GaleriasController;
    use App\Http\Controllers\InvestigadoresController;
    use App\Http\Controllers\NoticiasController;
    use App\Http\Controllers\RequisitosController;
    use App\Http\Controllers\EstudiantesController;
    use App\Http\Controllers\RequisitosConhorteController;
    use App\Http\Controllers\UsuariosController;
    use Illuminate\Support\Facades\Route;


    //investigadores
    Route::post('/agregar', [InvestigadoresController::class, 'create'])
        ->middleware(['auth'])->name('guardar');
    Route::get('/NABEdicion/{id}/editar', [InvestigadoresController::class, 'view'])
        ->middleware(['auth'])->name('EdicionNab');
    Route::post('/updateNAB/{id}', [InvestigadoresController::class, 'update'])
        ->middleware(['auth'])->name('actualizar');
    Route::get('/NABEliminar/{id}/eliminar', [InvestigadoresController::class, 'destroy'])
        ->middleware(['auth'])->name('eliminarNab');

    //noticias
    Route::post('/agregarNoticias', [NoticiasController::class, 'create'])
        ->middleware(['auth'])->name('guardarNoticia');
    Route::get('/NoticiaEdicion/{id}/editar', [NoticiasController::class, 'edit'])
        ->middleware(['auth'])->name('NoticiasEdicion');
    Route::post('/update/{id}', [NoticiasController::class, 'update'])
        ->middleware(['auth'])->name('actualizarNoticias');
    Route::get('/NoticiaEliminar/{id}/eliminar', [NoticiasController::class, 'destroy'])
        ->middleware(['auth'])->name('eliminarNoticia');

    Route::get("/noticias/{id}", [NoticiasController::class, 'show'])->name('noticias.show');

    //Eventos
    Route::post('/agregareventos', [EventosController::class, 'create'])
        ->middleware(['auth'])->name('guardareventos');
    Route::get('/eventosEdicion/{id}/editar', [EventosController::class, 'edit'])
        ->middleware(['auth'])->name('eventosEdicion');
    Route::post('/update1/{id}', [EventosController::class, 'update'])
        ->middleware(['auth'])->name('actualizareventos');
    Route::get('/eventosEliminar/{id}/eliminar', [EventosController::class, 'destroy'])
        ->middleware(['auth'])->name('eliminareventos');

    Route::get("/eventos/{id}", [EventosController::class, 'show'])->name('eventos.show');


    // Requisitos


    Route::get('/RequisitosEdicion/{id}/editar', [RequisitosController::class, 'edit'])->middleware(['auth'])
        ->name('RequisitosE');
    Route::post('/update2/{id}', [RequisitosController::class, 'update'])
        ->middleware(['auth'])->name('actualizarRequisitos');

    // Estudiantes
    Route::post('/agregarEstudiantes', [EstudiantesController::class, 'create'])
        ->middleware(['auth'])->name('guardarEstudiantes');
    Route::get('/EstudiantesEdicion/{id}/editar', [EstudiantesController::class, 'edit'])
        ->middleware(['auth'])->name('EstudiantesEdicion');
    Route::post('/EstudiantesActualizar/{id}', [EstudiantesController::class, 'update'])
        ->middleware(['auth'])->name('actualizarEstudiantes');
    Route::get('/estudiantesEliminar/{id}/eliminar', [EstudiantesController::class, 'destroy'])
        ->middleware(['auth'])->name('eliminarEstudiantes');

    // Cohorte

    Route::post('/agregarConhorte', [RequisitosConhorteController::class, 'create'])
        ->middleware(['auth'])->name('guardarConhorte');
    Route::get('/EditarConhorte/{id}/editar', [RequisitosConhorteController::class, 'edit'])
        ->middleware(['auth'])->name('conEdicion');
    Route::post('/conhorteActualizar/{id}', [RequisitosConhorteController::class, 'update'])
        ->middleware(['auth'])->name('actualizarRequisitosConhorte');
    Route::get('/ConhorteEliminar/{id}/eliminar', [RequisitosConhorteController::class, 'destroy'])
        ->middleware(['auth'])->name('eliminarcon');

    //Galerias
    Route::post('/agregarImagen', [GaleriasController::class, 'create'])
        ->middleware(['auth'])->name('guardarImagenes');
    Route::get('/EditarImagen/{id}/editar', [GaleriasController::class, 'edit'])
        ->middleware(['auth'])->name('ImagenEditar');
    Route::post('/ImagenActualizar/{id}', [GaleriasController::class, 'update'])
        ->middleware(['auth'])->name('ActualizarImagen');
    Route::get('/ImagenEliminar/{id}/eliminar', [GaleriasController::class, 'destroy'])
        ->middleware(['auth'])->name('eliminarimagen');
    //Usuarios
    Route::get('/EditarUsuario/{id}/editar', [UsuariosController::class, 'edit'])
        ->middleware(['auth'])->name('UsuarioEditar');
    Route::post('/UsuarioActualizar/{id}', [UsuariosController::class, 'update'])
        ->middleware(['auth'])->name('ActualizarUsuario');
    Route::get('/UsuarioEliminar/{id}/eliminar', [UsuariosController::class, 'destroy'])
        ->middleware(['auth'])->name('eliminarUsuario');
