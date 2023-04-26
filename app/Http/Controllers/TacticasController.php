<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tactica;

class TacticasController extends Controller
{
    public function create()
    {
        return view('tacticas.create_tactica');
    }

    /**
     * Almacena una nueva táctica en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Verificar si el usuario tiene permisos para crear tácticas
      //  }
        $this->authorize('create', Tactica::class);
        // Validar los datos del formulario
        $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:2000',
            'file' => 'nullable|image', // Tamaño máximo de 10 MB
        ]);

        // Almacenar la nueva táctica
        $tactica = new Tactica();
        $tactica->titulo = $request->input('titulo');
        $tactica->descripcion = $request->input('descripcion');

        // Almacenar la imagen de la táctica, si se proporcionó
        if ($request->hasFile('file')) {
            $imagen = $request->file('file');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = $imagen->storeAs('public/tacticas', $nombreImagen);
            $tactica->imagen = $nombreImagen;
        }
        $user = Auth::user();
        $tactica->user_id = $user->id;
        $tactica->save();
    }
}
