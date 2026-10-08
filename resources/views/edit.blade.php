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
                <label for="nombre">Nombre</label>

                <input
                    type="text"
                    class="form-control"
                    id="nombre"
                    name="nombre"
                    value="{{ $item->nombre }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>

                <input
                    type="text"
                    class="form-control"
                    id="apellido"
                    name="apellido"
                    value="{{ $item->apellido }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>

                <input
                    type="number"
                    class="form-control"
                    id="edad"
                    name="edad"
                    value="{{ $item->edad }}"
                    required
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
