<?php

namespace App\Services\User;

use App\DataTransferObject\UserDto;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function register(UserDto $dto)
    {
        $user = User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => Hash::make($dto->password),
        ]);

        $user->assignRole('customer');

        if (!$user->email_verified_at) {
            event(new Registered($user));
        }

        return $user;
    }
}
