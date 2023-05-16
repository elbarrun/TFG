@extends('layout.public')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Create Post</h1>
            <form method="POST" action="{{ route('tacticas.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="titulo">
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" name="descripcion" cols="3" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>file</label>
                    <input type="file" class="form-control" name="file">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
@endsection
