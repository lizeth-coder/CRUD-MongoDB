@extends("layouts.main")

@section("contenido")

<div class="container">
    <div class="row">
        <div class="col">
        <h2>Libro a eliminar</h2>

        <h4>
            Si se elimina no se podra recuperar,
        </h4>
        <hr>
        
        <p>
            <strong>Título:</strong> {{ $item->titulo }}
        </p>

        <p>
            <strong>Autor:</strong> {{ $item->autor }}
        </p>

        <p>
            <strong>Género:</strong> {{ $item->genero }}
        </p>

        <p>
            <strong>Año de Publicación:</strong> {{ $item->anio_publicacion }}
        </p>

        <hr>

        <form action="{{ route('destroy', $item->id) }}" method="POST">

            @csrf
            @method("DELETE")

            <button class="btn btn-danger">
                Eliminar
            </button>
        </form>
        <a href="{{ route('index') }}" class="btn btn-info mt-3">
            Regresar
        </a>

    </div>
</div>


</div>

@endsection
