<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class RequisitosConhorteController extends Controller
{
    //Agregar

    public function create(Request $request)
    {
        //

        // Validar los datos del formulario
        $request->validate([
            'generacion' => 'required',
            'ingreso' => 'required',
            'tasa' => 'required',
            'eficiencia' => 'required',

            // Agrega aquí las validaciones adicionales según tus necesidades
        ]);
        $data = $request->except('_token');

        // Ejecutar la consulta SQL para insertar los datos en la tabla
        DB::table('requisitosconhortes')->insert($data);
        return redirect()->back()->with('success', 'Se a registrado con exito');
    }
    public function edit($id)
    {
        $requisitosconhortes = DB::table('requisitosconhortes')->where('id', $id)->first();
        return view('modales.RequisitosConhorteEdicion', ['requisitosconhortes' => $requisitosconhortes]);
        //
    }


    public function update(Request $request, $id)
    {
        // Se hace la consulta a la base de datos con el mismo ID
        $requisitosconhortes = DB::table('requisitosconhortes')->where('id', $id)->first();

        if (!$requisitosconhortes) {
            return redirect()->back()->with('danger', 'El dato no existe');
        }

        // Validar los campos antes de actualizar
        $request->validate([
            'generacion' => 'required',
            'ingreso' => 'required',
            'tasa' => 'required',
            'eficiencia' => 'required'
        ]);
        // Verificar si algún campo está vacío
        if (empty($request->generacion) || empty($request->ingreso) || empty($request->tasa) || empty($request->eficiencia)) {
            return redirect()->back()->with('warning', 'Algún campo está vacío, revisa la información');
        }

        DB::table('requisitosconhortes')
            ->where('id', $id)
            ->update([
                'generacion' => $request->generacion,
                'ingreso' => $request->ingreso,
                'tasa' => $request->tasa,
                'eficiencia' => $request->eficiencia,
                'graduados' => $request->graduados
            ]);

        return redirect()->back()->with('success', 'Se ha registrado con éxito');
    }

    public function destroy($id)
    {
        //se hace borrado lógico
        DB::table('requisitosconhortes')
            ->where('id', $id)
            ->update(['deleted_at' => now()]);
        return redirect()->back()->with('danger', 'Se ha Eliminado con éxito');
    }
}
