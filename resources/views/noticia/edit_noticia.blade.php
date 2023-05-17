<form action="{{ route('noticia.update', $noticia) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" value="{{ $noticia->titulo }}" required>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion" required>{{ $noticia->descripcion }}</textarea>

    <label for="file">Imagen:</label>
    <input type="file" name="file" id="file">

    <button type="submit">Guardar cambios</button>
</form>
