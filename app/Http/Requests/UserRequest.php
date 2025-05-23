<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userid=$this->route('user');
        return [
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.($userid?$userid->id:null),
            'password'=>'required|min:6',
            'cargo_id'=>'required'
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'Campo nome é obrigatório!',
            'email.required'=>'Campo email é obrigatório',
            'email.email'=>'Necessário enviar email válido',
            'email.unique'=>'O email já está cadastrado',
            'password.required'=>'Campo senha é obrigatório',
            'password.min'=>'senha com no mínimo :min caracteres!',
            'cargo_id'=>'Campo cargo é obrigatório',
        ];
    }
}
