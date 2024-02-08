<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $message = 'User registered successfully.';

        return [
            'message' => $message,
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
