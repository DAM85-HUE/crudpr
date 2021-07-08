<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
   //listar usuarios
public function list(){

$data['users']=Usuario::paginate(3);
return view('usuarios.list', $data);
}



    //formulario usuario
    public function userform(){

        return view('usuarios.userform');
    }

//guardar usuario
public function save(Request $request){
$validator=$this->validate($request,[
//validacion
'nombre'=>'required|string|max:255',
'apellido'=>'required|string|max:255',
'direccion'=>'required|string|max:255',
'email'=>'required|email|max:255|email|unique:usuario'
]);
$userdata=request()->except('_token');
Usuario::insert($userdata);

return redirect()->back()->with('message', 'Usuario guardado');

}

public function delete($id){
Usuario::destroy($id);
return redirect()->back()->with('usuarioEliminado', 'Usuario eliminado');


}

//actualizar usuarios formulario


 //Formulario para editar usuarios
 public function editform($id){
    $usuario = Usuario::findOrFail($id);

    return view('usuarios.editform', compact('usuario'));
}

//Edición de usuarios
public function edit(Request $request, $id){
    $datosUsuario = request()->except((['_token', '_method']));
    Usuario::where('id', '=', $id)->update($datosUsuario);

    return back()->with('usuarioModificado','Usuario modificado');
}


}
