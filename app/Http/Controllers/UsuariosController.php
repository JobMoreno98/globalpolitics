<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    //

    public function index()
    {
        //vista de noticias
        $usuarios = DB::table('users')
         ->whereNull('deleted_at')
         ->get();
     
     return view('vistas_Back-end.Usuarios', ['usuarios' => $usuarios]);
    }
    public function edit($id)
    {
        $usuarios2 = DB::table('users')->where('id', $id)->first();
        return view('modales.UsuarioEdicion', ['usuarios2' => $usuarios2]);
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
        $user = DB::table('users')->where('id', $id)->first();
    
        if (!$user) {
            return redirect()->back()->with('danger', 'El usuario no existe');
        }
    
        // Validar los campos del formulario antes de actualizar
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'tipo' => 'required'
        ]);
    
        // Verificar si algún campo está vacío
        if (empty($request->name) || empty($request->email) || empty($request->tipo)) {
            return redirect()->back()->with('warning', 'Algún campo está vacío, revisa la información');
        }
    
        // Obtener la contraseña actual
        $currentPassword = $user->password;
    
        // Verificar si se proporcionó una nueva contraseña
        if (!empty($request->new_password)) {
            // Actualizar la contraseña en caso de que se haya proporcionado una nueva
            $validatedData['new_password'] = Hash::make($request->new_password);
        } else {
            // Conservar la contraseña actual
            $validatedData['new_password'] = $currentPassword;
        }
    
        // Actualizar el usuario en la base de datos
        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $validatedData['new_password'],
                'tipo' => $request->tipo
            ]);
    
        return redirect()->back()->with('success', 'Usuario actualizado exitosamente');
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
        DB::table('users')
        ->where('id', $id)
        ->update(['deleted_at' => now()]);
        return redirect()->back()->with('danger', 'Se ha Eliminado con éxito');
    }

}
