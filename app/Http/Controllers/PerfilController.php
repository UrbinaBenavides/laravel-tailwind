<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PerfilController extends Controller
{
    public function index(User $user){
        return view('perfil.index');
    }

    public function store(Request $request){
        
        $request->request->add(['username' => Str::slug($request->username)]);
        
        $request->validate([
            'username' => 'required|unique:users,username,'.Auth::user()->id.'|min:3|max:20|not_in:editar-perfil'
        ]);
        
        if($request->imagen){
            $imagen = $request->file('imagen');
            $nombreImagen = Str::uuid(). "." . $imagen->getClientOriginalExtension();

            $maker = new ImageManager(new Driver());
        
            $imagenServidor = $maker->read($imagen);
            $imagenServidor->resize(10000, 10000); 

            $imagenPath = public_path('perfiles') . '/' . $nombreImagen;
            $imagenServidor->save($imagenPath);
        }

        $usuario = User::find(Auth::user()->id);
        $usuario->username = $request->username;
        $usuario->imagen = $nombreImagen ?? Auth::user()->imagen ?? null;
        $usuario->save();

        return redirect()->route('posts.index', $usuario->username);

    }
}
