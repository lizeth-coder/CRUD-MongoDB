@extends('layouts.main')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col">
        <h1>Crear nuevo registro</h1>

        <form action="{{ route('store') }}" method="post">

            @csrf

            @method("POST")

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">

            <br>

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control">

            <br>

            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control">

            <br>

            <button class="btn btn-primary">
                Guardar
            </button>

        </form>

    </div>
</div>

</div>

@endsection

