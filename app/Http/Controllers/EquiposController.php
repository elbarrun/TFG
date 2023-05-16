<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EquiposController extends Controller
{
    public function show()
    {
        $equipos = Equipo::all();
        return view('equipo.show_equipo', ['equipos' => $equipos]);

    }
    public function create()
    {
        return view('equipo.create_equipo');

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
            $rutaImagen = $imagen->storeAs('public/equipos', $nombreImagen);
            $equipo->file = $nombreImagen;
        }
        $user = Auth::user();
        $equipo->user_id = $user->id;
        $equipo->save();
        return redirect (route('equipos.show'));
    }
    public function edit(Equipo $equipo)
    {
        return view('equipo.edit_equipo', compact('equipo'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        // Verificar si el usuario tiene permisos para editar la táctica
        $this->authorize('update', $equipo);

        // Validar los datos del formulario
        $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:2000',
            'file' => 'nullable|image', // Tamaño máximo de 10 MB
        ]);

        // Actualizar la táctica
        $equipo->titulo = $request->input('titulo');
        $equipo->descripcion = $request->input('descripcion');

        // Almacenar la imagen de la táctica, si se proporcionó
        if ($request->hasFile('file')) {
            $imagen = $request->file('file');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = $imagen->storeAs('public/equipo', $nombreImagen);
            $equipo->file = $nombreImagen;
        }

        $equipo->save();

        return redirect()->route('equipos.show', $equipo);
    }

    public function destroy(Equipo $equipo)
    {
        // Verificar si el usuario tiene permisos para eliminar la táctica
        $this->authorize('delete', $equipo);

        // Eliminar la táctica
        $equipo->delete();

        return redirect (route('equipos.show'));
    }


}
