<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquiposController extends Controller
{
    public function create(Request $request)
    {;
        //$this->authorize('create', Peticiones::class);
        return view('equipo.create_equipos');
    }
    public function store(Request $request)
    {
        // Verificar si el usuario tiene permisos para crear tácticas
        //  }
        $this->authorize('create', Equipo::class);
        // Validar los datos del formulario
        $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:2000',
            'file' => 'nullable|image', // Tamaño máximo de 10 MB
        ]);

        // Almacenar la nueva táctica
        $equipo = new Equipo();
        $equipo->titulo = $request->input('titulo');
        $equipo->descripcion = $request->input('descripcion');

        // Almacenar la imagen de la táctica, si se proporcionó
        if ($request->hasFile('file')) {
            $imagen = $request->file('file');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = $imagen->storeAs('public/tacticas', $nombreImagen);
            $equipo->imagen = $nombreImagen;
        }
        $user = Auth::user();
        $equipo->user_id = $user->id;
        $equipo->save();
    }

}
