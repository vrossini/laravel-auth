<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdutoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'categoria.required'=>'Preencha uma categoria',
            'categoria.max'=>'Categoria deve ter até 255 caracteres',
            'nome.required'=>'Preencha um nome',
            'nome.max'=>'Nome deve ter até 255 caracteres',
            'descricao.required'=>'Preencha uma descrição',
            'descricao.max'=>'Descrição deve ter até 255 caracteres',
            'valor.required'=>'Valor incorreto'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'categoria'=>'required|max:255',
            'nome'=>'required|max:255',
            'descricao'=>'required|max:255',
            'valor'=>'required|numeric'
        ];
    }
}
