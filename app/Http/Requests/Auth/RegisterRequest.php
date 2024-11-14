<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::default()],
        ];
    }

    public function messages(): array
    {
        if(app()->getLocale() !== 'ru') return [];

        return [
            'name' => [
                'max' => 'Имя не должно превышать 255 символов.',
            ],
            'email' => [
                'max' => 'Email не должен превышать 255 символов.',
                'unique' => 'Введенный email уже существует.',
            ],
            'password' => [
                'confirmed' => 'Введенные пароли не совпадают.',
                'min' => 'Пароль должен быть не менее :min символов.',
                'max' => 'Пароль должен быть не более :max символов.',
            ],
        ];
    }
}
