<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class RequisitosController extends Controller
{
    //
    public function index()
    {
        //vista de Requisitos
        $requisitos = DB::table('requisitos')
         ->get();
     
     return view('vistas_Back-end.Requisitos', ['requisitos' => $requisitos]);
    }

    public function edit($id)
    {
        $requisitos = DB::table('requisitos')->where('id', $id)->first();
        return view('modales.RequisitosEdicion', ['requisitos' => $requisitos]);
        //
    }


    public function update(Request $request, $id)
    {
        // Se hace la consulta a la base de datos con el mismo ID
        $eventos = DB::table('requisitos')->where('id', $id)->first();
    
            DB::table('requisitos')
                ->where('id', $id)
                ->update([
                    'descripcion' => $request->descripcion
                ]);
       
        return redirect()->back()->with('primary', 'Se actualizo con éxito');
    }
}
