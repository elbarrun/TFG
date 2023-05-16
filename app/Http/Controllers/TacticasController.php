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
            $imagen = $request->file('file');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = $imagen->storeAs('public/tacticas', $nombreImagen);
            $tactica->file = $nombreImagen;
        }
        $user = Auth::user();
        $tactica->user_id = $user->id;
        $tactica->save();
        return redirect (route('tacticas.show'));

    }
    public function edit(Tactica $tactica)
    {
        return view('tactica.edit_tactica', compact('tactica'));
    }

    public function update(Request $request, Tactica $tactica)
    {
        // Verificar si el usuario tiene permisos para editar la táctica
        $this->authorize('update', $tactica);

        // Validar los datos del formulario
        $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:2000',
            'file' => 'nullable|image', // Tamaño máximo de 10 MB
        ]);

        // Actualizar la táctica
        $tactica->titulo = $request->input('titulo');
        $tactica->descripcion = $request->input('descripcion');

        // Almacenar la imagen de la táctica, si se proporcionó
        if ($request->hasFile('file')) {
            $imagen = $request->file('file');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = $imagen->storeAs('public/tacticas', $nombreImagen);
            $tactica->file = $nombreImagen;
        }

        $tactica->save();

        return redirect()->route('tacticas.show', $tactica);
    }

    public function destroy(Tactica $tactica)
    {
        // Verificar si el usuario tiene permisos para eliminar la táctica
        $this->authorize('delete', $tactica);

        // Eliminar la táctica
        $tactica->delete();

        return redirect (route('tacticas.show'));
    }

}
