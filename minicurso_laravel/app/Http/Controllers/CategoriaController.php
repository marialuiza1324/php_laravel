<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        return Categoria::all(); // puxa tudo do model
    }

    public function store(Request $request){ // create all from categoria
        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201); // retorna a criação das categorias em json, com o status 201
    }

    public function show($id){
        return Categoria::find($id);
    }

    public function update(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return response()->json($categoria, 200); // retorna a atualização da categoria em json, com o status 200
    }

    public function destroy($id){
        Categoria::destroy($id);
        return response()->json("Deletado com sucesso!"); // retorna a mensagem de sucesso em json
    }
}
