<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NoticiasController extends Controller
{
    public function show()
    {
        $noticias = Noticia::all();
        return view('noticia.show_noticia', ['noticias' => $noticias]);

    }
    public function create()
    {
        return view('noticia.create_noticia');

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
        $this->authorize('create', Noticia::class);

        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:2000',
            'file' => 'nullable|image', // Tamaño máximo de 10 MB
        ]);

        if ($validator->fails()) {
            return json_encode($validator->errors());
        }
        // Almacenar la nueva táctica
        $noticia = new Noticia();
        $noticia->titulo = $request->input('titulo');
        $noticia->descripcion = $request->input('descripcion');

// Almacenar la imagen de la táctica, si se proporcionó
        if ($request->hasFile('file')) {
            $file= $request->file('file');
            $nombreImagen = time() . '_' . $file->getClientOriginalName();
            $rutaImagen = $file->storeAs('public/noticias', $nombreImagen);
            $noticia->file = $nombreImagen; // Cambiar 'imagen' por 'file'
        }

        $user = Auth::user();
        //$tactica->user_id = $user->id;
        $noticia->user()->associate($user);
        $noticia->save();
        return redirect(route('noticias.show'));

    }
    public function edit(Noticia $noticia)
    {
        return view('noticia.edit_noticia', compact('noticia'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        // Verificar si el usuario tiene permisos para editar la táctica
        $this->authorize('update', $noticia);

        // Validar los datos del formulario
        $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:2000',
            'file' => 'nullable|image', // Tamaño máximo de 10 MB
        ]);

        // Actualizar la táctica
        $noticia->titulo = $request->input('titulo');
        $noticia->descripcion = $request->input('descripcion');

        // Almacenar la imagen de la táctica, si se proporcionó
        if ($request->hasFile('file')) {
            $imagen = $request->file('file');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = $imagen->storeAs('public/noticias', $nombreImagen);
            $noticia->file = $nombreImagen;
        }

        $noticia->save();

        return redirect()->route('noticias.show', $noticia);
    }

    public function destroy(Noticia $noticia)
    {
        // Verificar si el usuario tiene permisos para eliminar la táctica
        $this->authorize('delete', $noticia);

        // Eliminar la táctica
        $noticia->delete();

        return redirect()->route('noticias.show', $noticia);
    }

}
