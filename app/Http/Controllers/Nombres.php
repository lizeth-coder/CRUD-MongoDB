<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nombre;

class Nombres extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Nombre::all();

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
        $item = new Nombre();

        $item->nombre = $request->nombre;
        $item->apellido = $request->apellido;
        $item->edad = $request->edad;

        $item->save();

        return to_route("index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Nombre::find($id);

        return view("show", compact("item"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Nombre::find($id);

        return view("edit", compact("item"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Nombre::find($id);

        $item->nombre = $request->nombre;
        $item->apellido = $request->apellido;
        $item->edad = $request->edad;
        $item->save();
        return to_route("index");
    }

   
    public function destroy(string $id)
    {
        $item = Nombre::find($id);
        $item->delete();
        return to_route("index");
    }
}
