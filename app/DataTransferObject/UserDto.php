<?php

namespace App\DataTransferObject;

use App\Http\Requests\Auth\RegisterRequest;

class UserDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password
    ) {
    }

    public static function register(RegisterRequest $request)
    {
        return new self(
            name: $request->validated('name'),
            email: $request->validated('email'),
            password: $request->validated('password')
        );
    }
}
