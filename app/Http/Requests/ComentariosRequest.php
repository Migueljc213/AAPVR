<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentariosRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer essa solicitação.
     */
    public function authorize()
    {
        return true; // Deixe como true para permitir a criação
    }

    /**
     * Define as regras de validação para o formulário.
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'url' => 'nullable|url',
            'conteudo' => 'required|string|max:1000',
            'noticia_id' => 'required|exists:noticias,id',
        ];
    }

    /**
     * Mensagens de erro personalizadas para cada regra de validação.
     */
    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.string' => 'O campo Nome deve ser um texto.',
            'nome.max' => 'O campo Nome não pode ter mais que 255 caracteres.',

            'email.required' => 'O campo Email é obrigatório.',
            'email.email' => 'O campo Email deve ser um endereço de email válido.',

            'url.url' => 'O campo URL deve ser um link válido.',

            'conteudo.required' => 'O campo Conteúdo é obrigatório.',
            'conteudo.string' => 'O campo Conteúdo deve ser um texto.',
            'conteudo.max' => 'O campo Conteúdo não pode ter mais que 1000 caracteres.',

            'noticia_id.required' => 'O campo Notícia é obrigatório.',
            'noticia_id.exists' => 'A notícia selecionada não existe.',
        ];
    }
}
