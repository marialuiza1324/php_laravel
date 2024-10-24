<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function index(){
        $veiculos = Veiculo::with('categorias')->get(); // trazer junto com a resposta os dados da categoria respectiva
        return response()->json($veiculos);
    }

    public function show($id){
        $veiculo = Veiculo::with('categorias')->find($id);

        if(!$veiculo){
            return response()->json(["message" => "Veículo não encontrado"], 400); // status 400 -> informar erro
        }

        return response()->json($veiculo);
    }

    public function store(StoreUpdateVeiculoRequest $request){
        $veiculo = Veiculo::create($request->all());

        $veiculo->save();

        if($request->hasFile('img') && $request->file('img')->isValid()){
            $img = $request->file('img');
            $imgName = Str::slug($request->modelo) . '.' - $img->getClientOriginalExtension(); // formatacao de texto (tira acento e pontuação)

            $imgPath = $img->storeAs("veiculos/{$veiculo->id}", $imgName, "public"); // cria a pasta em public
            $veiculo->img = "storage/veiculos/{$veiculo->id}/{$imgName}";
            $veiculo->save;
        }

        return response()->json($veiculo, 201);
    }
}
