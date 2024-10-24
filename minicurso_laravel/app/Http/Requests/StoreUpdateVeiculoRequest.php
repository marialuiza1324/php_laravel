<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateVeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // retorna os dados ao fazer requisicao
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "id_categoria" => "required|exists:categorias,id", // campo obrigatório e tem que existir o id no campo categoria
            "marca" => "required|string|max:255",
            "modelo" => "required|string|max:255",
            "ano_fabricacao" => "required|integer|min:1930",
            "marca" => "required|string|max:10",
            "status" => "required|in:disponivel,alugado,manutencao", // só chega as opções do enum
            "img" => "nullable|file"
        ];
    }
}
