<?php
namespace App\Http\Controllers;

use DB;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioStore{
    public function Crear(Request $request){
        $datosUsuario = request()->except('_token'); //Obtener los datos del usuario mediante el request, excepto el token.
        
        $cedula = $request->input('Cedula');
        if(DB::table('usuarios')->where('cedula', $cedula)->first()){
            echo "<script>alert('La cédulá ya está registrada. Intenta de nuevo.'); window.history.back();</script>";
        }else{
            echo "<script>alert('El usuario se creó'); window.history.back();</script>";
            Usuario::insert($datosUsuario);
            return view('usuarios.create');
        }
    }
}
?>