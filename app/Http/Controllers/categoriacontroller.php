<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriacontroller extends Controller
{
    public function getCategoria(){
        return response()->json(categoria::all(), 200);
    }

    public function getCategoriaById($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'registro no encontrado'], 404);
        }

        return response()->json($categoria::find($id),200);

    }
}


