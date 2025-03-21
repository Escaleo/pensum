<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Unique;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'ci_card' => ['required', 'int', 'min:8', 'unique:users'],
            'city' =>['required', 'string', 'max:255'],
            'address' =>['required', 'string','max:255'],
            'phone' =>['required', 'int', 'min:10','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'ci_card' => $input['ci_card'],
            'city' => $input['city'],
            'address' => $input['address'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
