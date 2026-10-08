<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class Libros extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Libro::all();

        return view("index", compact("item"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Libro();

        $item->titulo = $request->titulo;
        $item->autor = $request->autor;
        $item->genero = $request->genero;
        $item->anio_publicacion = $request->anio_publicacion;

        $item->save();

        return to_route("index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Libro::find($id);

        return view("show", compact("item"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Libro::find($id);

        return view("edit", compact("item"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Libro::find($id);

        $item->titulo = $request->titulo;
        $item->autor = $request->autor;
        $item->genero = $request->genero;
        $item->anio_publicacion = $request->anio_publicacion;

        $item->save();

        return to_route("index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Libro::find($id);

        $item->delete();

        return to_route("index");
    }
}

