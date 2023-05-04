<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tactica;
use Illuminate\Support\Facades\Storage;

class TacticasController extends Controller
{
    public function show()
    {
        $tacticas = Tactica::all();
        return view('tactica.show_tactica', ['tacticas' => $tacticas]);

    }
    public function create()
    {
        return view('tactica.create_tactica');

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
            'descripcion' => 'required|string|max:2000',
            'file' => 'nullable|image', // Tamaño máximo de 10 MB
        ]);

        // Almacenar la nueva táctica
        $tactica = new Tactica();
        $tactica->titulo = $request->input('titulo');
        $tactica->descripcion = $request->input('descripcion');

// Almacenar la imagen de la táctica, si se proporcionó
        if ($request->hasFile('file')) {
            $file= $request->file('file');
            $nombreImagen = time() . '_' . $file->getClientOriginalName();
            $rutaImagen = $file->storeAs('public/tacticas', $nombreImagen);
            $tactica->file = $nombreImagen; // Cambiar 'imagen' por 'file'
        }

        $user = Auth::user();
        $tactica->user_id = $user->id;
        $tactica->save();
        return redirect('/');

    }
    }
