@extends('layouts.main')

@section('contenido')

<div class="container">
    <div class="row mt-4">
        <div class="col">


        <h2>CRUD - MongoDB</h2>

        @if (session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif

        <a href="{{ route('create') }}" class="btn btn-primary">
            Agregar nueva persona
        </a>
        <hr>
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($item as $i)

                <tr>

                    <td>{{ $i->nombre }}</td>

                    <td>{{ $i->apellido }}</td>

                    <td>{{ $i->edad }}</td>

                    <td>
                        <a href="{{ route('edit', $i->id) }}" class="btn btn-warning">
                            Editar
                        </a>
                    </td>

                    <td>
                        <a href="{{ route('show', $i->id) }}" class="btn btn-danger">
                            Eliminar
                        </a>
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>
</div>

@endsection
