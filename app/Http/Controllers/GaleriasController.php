<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class GaleriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
                //vista de Eventos
                $galerias = DB::table('galerias')
                ->whereNull('deleted_at')
                ->get();
            
            return view('vistas_Back-end.galerias', ['galerias' => $galerias]);
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
           //

        // Validar los datos del formulario
       $validatedData = $request->validate([
        'nombre' => 'required',
        'tipo' => 'required',
        // Agrega aquí las validaciones adicionales según tus necesidades
    ]);
    $data = $request->except('_token');

                

             // Guardar la imagen si se ha cargado
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $rutaImagen = 'images/imagenes-galerias/';
            $filename= time().'-'.$imagen->getClientOriginalName();
            $subir=$request->file('imagen')->move($rutaImagen,$filename);
            $data['imagen']=$rutaImagen .$filename;
        }else {
            $data['imagen']='no disponible por el momento';//si no se agrega una imagen al instante 
        }
          // Ejecutar la consulta SQL para insertar los datos en la tabla
    DB::table('galerias')->insert($data);
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
        $galerias = DB::table('galerias')->where('id', $id)->first();
        return view('modales.Editarimagen', ['galerias' => $galerias]);
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
        //
          // Se hace la consulta a la base de datos con el mismo ID
          $galerias = DB::table('galerias')->where('id', $id)->first();
    
          // Validar si se ha enviado una nueva imagen
          if ($request->hasFile('imagen')) {
              // Eliminar la imagen actual si existe
              if ($galerias->imagen) {
                  $rutaImagenAnterior = public_path($galerias->imagen);
                  if (file_exists($rutaImagenAnterior)) {
                      unlink($rutaImagenAnterior);
                  }
              }
      
              // Subir la nueva imagen
              $imagen = $request->file('imagen');
              $rutaImagen = 'images/imagenes-galerias/';
              $filename = time() . '-' . $imagen->getClientOriginalName();
              $subir = $imagen->move($rutaImagen, $filename);
      
              DB::table('galerias')
                  ->where('id', $id)
                  ->update([
                      'nombre' => $request->nombre,
                      'tipo' => $request->tipo,
                      'imagen' => $rutaImagen . $filename
                  ]);
          } else {
              // No se ha enviado una nueva imagen, conservar la imagen actual o asignar el mensaje predeterminado
              $imagen = $galerias->imagen ? $galerias->imagen : 'la imagen no está disponible';
      
              DB::table('galerias')
                  ->where('id', $id)
                  ->update([
                      'nombre' => $request->nombre,
                      'tipo' => $request->tipo,
                      'imagen' => $imagen
                  ]);
      
             
          }
          return redirect()->back()->with('update', 'Se ha actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         //se hace borrado lógico
         DB::table('galerias')
         ->where('id', $id)
         ->update(['deleted_at' => now()]);
         return redirect()->back()->with('danger', 'Se ha eliminado con éxito');
    }
}
