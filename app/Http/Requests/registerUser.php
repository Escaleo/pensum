<?php

namespace App\Http\Requests;

use App\Models\User;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;

class registerUser extends FormRequest
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
            'name'     => ['required', 'string', 'max:255'],
            'ci_card'  => ['required', 'int', 'unique:' . User::class],
            'city'     => ['required', 'string', 'max:255'],
            'address'  => ['required', 'string', 'max:255'],
            'phone'    => ['required', 'int'], 'unique:' . User::class,
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}
