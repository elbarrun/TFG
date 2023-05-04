<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:2000',
            'file' => 'nullable|image', // Tamaño máximo de 10 MB
        ]);

        // Almacenar la nueva táctica
        $noticia = new Noticia();
        $noticia->titulo = $request->input('titulo');
        $noticia->descripcion = $request->input('descripcion');

        // Almacenar la imagen de la táctica, si se proporcionó
        if ($request->hasFile('file')) {
            $imagen = $request->file('file');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = $imagen->storeAs('public/noticias', $nombreImagen);
            $noticia->imagen = $nombreImagen;
        }
        $user = Auth::user();
        $noticia->user_id = $user->id;
        $noticia->save();
        return redirect()->route('noticias.show_noticia')->with('success', 'Noticia creada correctamente.');

    }
}
