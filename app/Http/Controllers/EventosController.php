<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //vista de Eventos
        $eventos = DB::table('eventos')
         ->whereNull('deleted_at')
         ->get();
     
     return view('vistas_Back-end.eventos', ['eventos' => $eventos]);
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
        'subtitulo' => 'required',
        'descripcion' => 'nullable',
        'fecha'=>'nullable',
         'enlace'=>'nullable',
        
        // Agrega aquí las validaciones adicionales según tus necesidades
    ]);
    $data = $request->except('_token');

    // Verificar si el campo "fecha" está vacío y asignar un valor predeterminado
    if (empty($data['fecha'])) {
        $data['fecha'] = Carbon::createFromDate(2023, 1, 1)->toDateString(); // Fecha inválida;
    }
                
   // Verificar si el campo "enlace" está vacío y asignar un valor predeterminado
    if (empty($data['enlace'])) {
        $data['enlace'] = 'no disponible';
    }
             // Guardar la imagen si se ha cargado
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $rutaImagen = 'images/imagenes-eventos/';
            $filename= time().'-'.$imagen->getClientOriginalName();
            $subir=$request->file('imagen')->move($rutaImagen,$filename);
            $data['imagen']=$rutaImagen .$filename;
        }else {
            $data['imagen']='no disponible por el momento';//si no se agrega una imagen al instante 
        }
          // Ejecutar la consulta SQL para insertar los datos en la tabla
    DB::table('eventos')->insert($data);
        return redirect()->back()->with('success', 'Se a registrado con exito');
    

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
        $evento = Evento::find($id);
        return view('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventos = DB::table('eventos')->where('id', $id)->first();
        return view('modales.eventosEdicion', ['eventos' => $eventos]);
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
        $eventos = DB::table('eventos')->where('id', $id)->first();
    
        // Validar si se ha enviado una nueva imagen
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen actual si existe
            if ($eventos->imagen) {
                $rutaImagenAnterior = public_path($eventos->imagen);
                if (file_exists($rutaImagenAnterior)) {
                    unlink($rutaImagenAnterior);
                }
            }
    
            // Subir la nueva imagen
            $imagen = $request->file('imagen');
            $rutaImagen = 'images/imagenes-eventos/';
            $filename = time() . '-' . $imagen->getClientOriginalName();
            $subir = $imagen->move($rutaImagen, $filename);
            $fecha1 = $request->fecha;
    
            DB::table('eventos')
                ->where('id', $id)
                ->update([
                    'titulo' => $request->titulo,
                    'subtitulo' => $request->subtitulo,
                    'descripcion' => $request->descripcion,
                    'fecha' => $fecha1,
                    'imagen' => $rutaImagen . $filename,
                    'enlace'=>$request->enlace
                ]);
        } else {
            // No se ha enviado una nueva imagen, conservar la imagen actual o asignar el mensaje predeterminado
            $imagen = $eventos->imagen ? $eventos->imagen : 'la imagen no está disponible';
            $fecha = $request->fecha ? $request->fecha : $eventos->fecha; // Obtener la fecha de la solicitud o mantener el valor existente
    
            DB::table('eventos')
                ->where('id', $id)
                ->update([
                    'titulo' => $request->titulo,
                    'subtitulo' => $request->subtitulo,
                    'descripcion' => $request->descripcion,
                    'fecha' => $fecha,
                    'imagen' => $imagen,
                    'enlace'=>$request->enlace
                ]);
    
           
        }
        return redirect()->back()->with('success', 'Se ha actualizo con éxito');
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
        DB::table('eventos')
        ->where('id', $id)
        ->update(['deleted_at' => now()]);
        return redirect()->back()->with('danger1', 'Se ha eliminado con éxito');
    }
}
