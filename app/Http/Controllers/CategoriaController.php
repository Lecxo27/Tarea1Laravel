<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Models\Categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        $categoria = $request->input('categoria'); // Obtener el valor del parámetro de consulta "categoria"
    
        $productos = Categoria::where('id', $categoria)->get(); // Filtrar los productos por la categoría
    
        return new CategoriaCollection($productos);
    }

}
