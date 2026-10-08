<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Obtiene todos los libros de la base de datos
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $libros = Libro::all();
        return response()->json($libros, 200);
    }

    /**
     * Crea un nuevo libro en la base de datos
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'nullable|string|max:255',
            'anio_publicacion' => 'nullable|integer',
        ]);

        $libro = Libro::create($validated);

        return response()->json($libro, 201);
    }

    /**
     * Muestra un libro específico por su ID
     * 
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id);

        return response()->json($libro, 200);
    }

    /**
     * Actualiza un libro existente
     * 
     * @param \Illuminate\Http\Request $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);

        $validated = $request->validate([
            'titulo' => 'string|max:255',
            'autor' => 'string|max:255',
            'genero' => 'nullable|string|max:255',
            'anio_publicacion' => 'nullable|integer',
        ]);

        $libro->update($validated);

        return response()->json($libro, 200);
    }

    /**
     * Elimina un libro de la base de datos
     * 
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);

        $libro->delete();

        return response()->json(null, 204);
    }
}

