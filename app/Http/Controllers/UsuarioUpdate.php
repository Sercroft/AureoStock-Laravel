<?php
namespace App\Http\Controllers;

use DB;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioUpdate{ 
    public function Editar(Request $request, $id){
        $datosUsuario = request()->except(['_token', '_method']);
        Usuario::where('id', '=', $id)->update($datosUsuario);
        echo "<script>alert('El usuario fue editado.')</script>";
    }
}
?>