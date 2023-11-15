<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //vista de noticias
        $noticias = DB::table('noticias')
            ->whereNull('deleted_at')
            ->get();

        return view('vistas_Back-end.noticias', ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        // Validar los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha' => 'nullable',


            // Agrega aquí las validaciones adicionales según tus necesidades
        ]);
        $data = $request->except('_token');

        // Verificar si el campo "fecha" está vacío y asignar un valor predeterminado
        if (empty($data['fecha'])) {
            $data['fecha'] = Carbon::createFromDate(2023, 1, 1)->toDateString(); // Fecha inválida;
        }

        // Guardar la imagen si se ha cargado
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $rutaImagen = 'images/imagenes-noticias/';
            $filename = time() . '-' . $imagen->getClientOriginalName();
            $subir = $request->file('imagen')->move($rutaImagen, $filename);
            $data['imagen'] = $rutaImagen . $filename;
        } else {
            $data['imagen'] = 'no disponible por el momento'; //si no se agrega una imagen al instante 
        }
        // Ejecutar la consulta SQL para insertar los datos en la tabla
        DB::table('noticias')->insert($data);
        return redirect()->back()->with('success', 'Noticia subida con exito');
        // return view('vistas_Back-end.noticias'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return view('noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticias = DB::table('noticias')->where('id', $id)->first();
        return view('modales.NoticiasEdicion', ['noticias' => $noticias]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Se hace la consulta a la base de datos con el mismo ID
        $noticias = DB::table('noticias')->where('id', $id)->first();

        // Validar si se ha enviado una nueva imagen
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen actual si existe
            if ($noticias->imagen) {
                $rutaImagenAnterior = public_path($noticias->imagen);
                if (file_exists($rutaImagenAnterior)) {
                    unlink($rutaImagenAnterior);
                }
            }

            // Subir la nueva imagen
            $imagen = $request->file('imagen');
            $rutaImagen = 'images/imagenes-noticias/';
            $filename = time() . '-' . $imagen->getClientOriginalName();
            $subir = $imagen->move($rutaImagen, $filename);
            $fecha1 = $request->fecha;

            DB::table('noticias')
                ->where('id', $id)
                ->update([
                    'titulo' => $request->titulo,
                    'descripcion' => $request->descripcion,
                    'fecha' => $fecha1,
                    'imagen' => $rutaImagen . $filename
                ]);
        } else {
            // No se ha enviado una nueva imagen, conservar la imagen actual o asignar el mensaje predeterminado
            $imagen = $noticias->imagen ? $noticias->imagen : 'la imagen no está disponible';
            $fecha = $request->fecha ? $request->fecha : $noticias->fecha; // Obtener la fecha de la solicitud o mantener el valor existente

            DB::table('noticias')
                ->where('id', $id)
                ->update([
                    'titulo' => $request->titulo,
                    'descripcion' => $request->descripcion,
                    'fecha' => $fecha,
                    'imagen' => $imagen
                ]);
        }
        return redirect()->back()->with('update', 'Se actualizo con éxito');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //se hace borrado lógico
        DB::table('noticias')
            ->where('id', $id)
            ->update(['deleted_at' => now()]);
        return redirect()->back()->with('danger', 'Se ha eliminado con éxito');
    }
}
