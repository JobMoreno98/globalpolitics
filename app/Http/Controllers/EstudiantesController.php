<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class EstudiantesController extends Controller
{
    //
    public function index()
    {
        //vista de noticias
        $estudiantes = DB::table('estudiantes')
         ->whereNull('deleted_at')
         ->get();

         $requisitosconhortes = DB::table('requisitosconhortes')->whereNull('deleted_at')
         ->get();
     
     return view('vistas_Back-end.Estudiantes', ['estudiantes' => $estudiantes,'requisitosconhortes'=>$requisitosconhortes]);
    }
    public function edit($id)
    {
        $estudiantes = DB::table('estudiantes')->where('id', $id)->first();
        return view('modales.EstudiantesEdicion', ['estudiantes' => $estudiantes]);
        //
    }


    public function update(Request $request, $id)
    {
        // Se hace la consulta a la base de datos con el mismo ID
        $estudiantes = DB::table('estudiantes')->where('id', $id)->first();
    
            DB::table('estudiantes')
                ->where('id', $id)
                ->update([
                    'especializacion' => $request->especializacion,
                    'tutor'=>$request->tutor,
                    'estudiante'=>$request->estudiante,
                    'proyecto'=>$request->proyecto
                ]);
       
        return redirect()->back()->with('success', 'Se ha registrado con éxito');
    }

    public function create(Request $request)
    {
        //

        // Validar los datos del formulario
       $validatedData = $request->validate([
        'especializacion' => 'required',
        'tutor' => 'required',
        'estudiante'=>'required',
        'proyecto'=>'required',   
         
        
        // Agrega aquí las validaciones adicionales según tus necesidades
    ]);
    $data = $request->except('_token');

          // Ejecutar la consulta SQL para insertar los datos en la tabla
    DB::table('estudiantes')->insert($data);
        return redirect()->back()->with('success1', 'Se a registrado con exito');
      

    }
    public function destroy($id)
    {
        //se hace borrado lógico
        DB::table('estudiantes')
        ->where('id', $id)
        ->update(['deleted_at' => now()]);
        return redirect()->back()->with('danger1', 'Se ha Eliminado con éxito');
    }

}
