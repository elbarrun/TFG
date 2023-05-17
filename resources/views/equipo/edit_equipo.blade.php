<form action="{{ route('equipos.update', $equipo) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" value="{{ $equipo->titulo }}" required>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion" required>{{ $equipo->descripcion }}</textarea>

    <label for="file">Imagen:</label>
    <input type="file" name="file" id="file">

    <button type="submit">Guardar cambios</button>
</form>
