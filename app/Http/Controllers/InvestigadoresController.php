<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Investigadore;


class InvestigadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        //
         //filtrar los datos dependiendo de lo borrados logicos que haya de por medio
         $investigadores = DB::table('investigadores')
         ->whereNull('deleted_at')
         ->get();
     
     return view('vistas_Back-end.investigadores', ['investigadores' => $investigadores]);
         //
        


    }
    public function view($id)
    {
        $investigadores = DB::table('investigadores')->where('id', $id)->first();
        return view('modales.EdicionNab', ['investigadores' => $investigadores]);
        //
       
    


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
       // Validar los datos del formulario
       $validatedData = $request->validate([
        'nombre' => 'required',
        'especialidad' => 'required',
        'correo'=>'required',
        'puesto'=>'required',   
        'biografia'=>'required',
        'linea'=>'required',
        'proyectos'=>'required',
        'publicaciones'=>'required',
        'descripcion'=>'required',
        'orientacion'=>'nullable',
        
        // Agrega aquí las validaciones adicionales según tus necesidades
    ]);
    $data = $request->except('_token');
 // Verificar si el campo "enlace" está vacío y asignar un valor predeterminado
 if (empty($data['orientacion'])) {
    $data['orientacion'] = 'no disponible'; 
}
                

             // Guardar la imagen si se ha cargado
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $rutaImagen = 'images/imagenes-NAB/';
            $filename= time().'-'.$imagen->getClientOriginalName();
            $subir=$request->file('imagen')->move($rutaImagen,$filename);
            $data['imagen']=$rutaImagen .$filename;
        }else {
            $data['imagen']='no disponible por el momento';//si no se agrega una imagen al instante 
        }
          // Ejecutar la consulta SQL para insertar los datos en la tabla
    DB::table('investigadores')->insert($data);
        return redirect()->back()->with('success', 'NAB registrado con exito');

        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        
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
 // Obtener el investigador actual de la base de datos
$investigador = DB::table('investigadores')->where('id', $id)->first();

// Validar si se ha enviado una nueva imagen
if ($request->hasFile('imagen')) {
    // Eliminar la imagen actual si existe
    if ($investigador->imagen) {
        $rutaImagenAnterior = public_path($investigador->imagen);
        if (file_exists($rutaImagenAnterior)) {
            unlink($rutaImagenAnterior);
        }
    }

    // Subir la nueva imagen
    $imagen = $request->file('imagen');
    $rutaImagen = 'images/imagenes-NAB/';
    $filename = time() . '-' . $imagen->getClientOriginalName();
    $subir = $imagen->move($rutaImagen, $filename);

    // Actualizar los datos del investigador, incluyendo la nueva imagen
    DB::table('investigadores')
        ->where('id', $id)
        ->update([
            'nombre' => $request->nombre,
            'especialidad' => $request->especialidad,
            'correo' => $request->correo,
            'puesto' => $request->puesto,
            'biografia' => $request->biografia,
            'linea' => $request->linea,
            'proyectos' => $request->proyectos,
            'publicaciones' => $request->publicaciones,
            'descripcion' => $request->descripcion,
            'orientacion' => $request->orientacion,
            'imagen' => $rutaImagen . $filename
        ]);
} else {
    // No se ha enviado una nueva imagen, conservar la imagen actual o asignar el mensaje predeterminado
    $imagen = $investigador->imagen ? $investigador->imagen : 'la imagen no está disponible';

    DB::table('investigadores')
        ->where('id', $id)
        ->update([
            'nombre' => $request->nombre,
            'especialidad' => $request->especialidad,
            'correo' => $request->correo,
            'puesto' => $request->puesto,
            'biografia' => $request->biografia,
            'linea' => $request->linea,
            'proyectos' => $request->proyectos,
            'publicaciones' => $request->publicaciones,
            'descripcion' => $request->descripcion,
            'orientacion' => $request->orientacion,
            'imagen' => $imagen
        ]);
}


return redirect()->back()->with('update', ' NAB actualizado con éxito');

    
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('investigadores')
        ->where('id', $id)
        ->update(['deleted_at' => now()]);
        return redirect()->back()->with('danger1', 'NAB eliminado con éxito');
    }
}
