<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|integer|min:1'
        ];
    }
    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Email является обязательным полем.',
            'email.email' => 'Email должен быть корректным адресом электронной почты.',
            'email.unique' => 'Этот email уже существует.',
            'age.required' => 'Возраст является обязательным полем.',
            'age.integer' => 'Возраст должен быть числом.',
            'age.min' => 'Возраст должен быть больше 0.'
        ];
    }
}
