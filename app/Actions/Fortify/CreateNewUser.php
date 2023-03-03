<?php

namespace App\Actions\Fortify;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nrc' => ['required', 'string', 'max:11'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(Customer::class),
            ],
            'mobile' => [
                'required',
                'string',
                'max:255',
                Rule::unique(Customer::class),
            ],
            'place_of_work' => ['required', 'string', 'max:255'],

            'password' => $this->passwordRules(),
        ])->validate();

        return Customer::create([
            'nrc' => $input['nrc'],
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'mobile' => $input['mobile'],
            'email' => $input['email'],
            'place_of_work' => $input['place_of_work'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
