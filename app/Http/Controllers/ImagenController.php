<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImagenController extends Controller
{
    public function store(Request $request){
        
        $imagen = $request->file('file');
        $nombreImagen = Str::uuid(). "." . $imagen->getClientOriginalExtension();

        $maker = new ImageManager(new Driver());
       
        $imagenServidor = $maker->read($imagen);
        $imagenServidor->resize(10000, 10000); 

        $imagenPath = public_path('uploads') . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        return response()->json([ 'imagen' => $nombreImagen  ] );

    }
}
