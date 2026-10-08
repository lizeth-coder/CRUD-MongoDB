@extends("layouts.main")

@section("contenido")

<div class="container">
    <div class="row">
        <div class="col">


        <h2>Actualizar registro</h2>

        <form action="{{ route('update', $item->id) }}" method="POST">

            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="titulo">Título</label>

                <input
                    type="text"
                    class="form-control"
                    id="titulo"
                    name="titulo"
                    value="{{ $item->titulo }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="autor">Autor</label>

                <input
                    type="text"
                    class="form-control"
                    id="autor"
                    name="autor"
                    value="{{ $item->autor }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="genero">Género</label>

                <input
                    type="text"
                    class="form-control"
                    id="genero"
                    name="genero"
                    value="{{ $item->genero }}"
                >
            </div>

            <div class="form-group">
                <label for="anio_publicacion">Año de Publicación</label>

                <input
                    type="number"
                    class="form-control"
                    id="anio_publicacion"
                    name="anio_publicacion"
                    value="{{ $item->anio_publicacion }}"
                >
            </div>

            <button type="submit" class="btn btn-warning mt-3">
                Guardar
            </button>

            <a href="{{ route('index') }}" class="btn btn-info mt-3">
                Regresar
            </a>

        </form>

    </div>
</div>

</div>

@endsection
