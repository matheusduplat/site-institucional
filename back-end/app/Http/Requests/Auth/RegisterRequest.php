<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required','email',Rule::unique('users')],
            'password' => ['required','confirmed'],
            'name' => ['required','string']
        ];
    }
    public function messages()
    {
         return [      
             'email.required' => 'Email não informado',
             'email.unique' => 'Email já cadastrado',
             'password.required' => 'Senha não informada',
             'password.confirmed' => 'Senha de confirmação diferente da outra',
             'name.required' => 'Nome não informado'
         ];
    }
}
