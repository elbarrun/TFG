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
            $equipo->imagen = $nombreImagen;
        }
        $user = Auth::user();
        $equipo->user_id = $user->id;
        $equipo->save();
    }

    public function crear(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required|image',
        ]);

        // Procesamiento de la imagen subida
        $imagePath = $request->file('imagen')->store('public/tacticas');
        $imageUrl = Storage::url($imagePath);

        // Creación de la nueva táctica
        $equipo = new Equipo;
        $equipo->titulo = $validatedData['titulo'];
        $equipo->descripcion = $validatedData['descripcion'];
        $equipo->imagen = $imageUrl;
        $equipo->save();


    }
}
