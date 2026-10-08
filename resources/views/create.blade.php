@extends('layouts.main')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col">
        <h1>Crear nuevo registro</h1>

        <form action="{{ route('store') }}" method="post">

            @csrf

            @method("POST")

            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>

            <br>

            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" required>

            <br>

            <label for="genero">Género</label>
            <input type="text" name="genero" id="genero" class="form-control">

            <br>

            <label for="anio_publicacion">Año de Publicación</label>
            <input type="number" name="anio_publicacion" id="anio_publicacion" class="form-control">

            <br>

            <button class="btn btn-primary">
                Guardar
            </button>

            <a href="{{ route('index') }}" class="btn btn-info">
                Regresar
            </a>

        </form>

    </div>
</div>

</div>

@endsection

