@extends("layouts.main")

@section("contenido")

<div class="container">
    <div class="row">
        <div class="col">
        <h2>persona a eliminar</h2>

        <h4>
            Si se elimina no se podra recuperar,
        </h4>
        <hr>
        
        <p>
            <strong>Nombre:</strong> {{ $item->nombre }}
        </p>

        <p>
            <strong>Apellido:</strong> {{ $item->apellido }}
        </p>

        <p>
            <strong>Edad:</strong> {{ $item->edad }}
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
