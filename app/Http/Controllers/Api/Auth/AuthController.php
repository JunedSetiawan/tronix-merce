<?php

namespace App\Http\Controllers\Api\Auth;

use App\DataTransferObject\UserDto;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Api\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Services\User\UserService;

class AuthController extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {
    }

    /*
	 * Register new user
	*/
    public function signup(RegisterRequest $request)
    {
        $user = $this->userService->register(
            UserDto::register($request)
        );

        if ($user) {
            return UserResource::make($user);
        }

        return response()->json(null, 404);
    }

    /*
	 * Generate sanctum token on successful login
	*/
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'user' => $user,
            'access_token' => $user->createToken($request->email)->plainTextToken
        ], 200);
    }


    /*
	 * Revoke token; only remove token that is used to perform logout (i.e. will not revoke all tokens)
	*/
    public function logout(Request $request)
    {

        // Revoke the token that was used to authenticate the current request
        $request->user()->currentAccessToken()->delete();
        //$request->user->tokens()->delete(); // use this to revoke all tokens (logout from all devices)
        return response()->json(null, 200);
    }


    /*
	 * Get authenticated user details
	*/
    public function getAuthenticatedUser(Request $request)
    {
        return $request->user();
    }


    public function sendPasswordResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return response()->json(['message' => __($status)], 200);
        } else {
            throw ValidationException::withMessages([
                'email' => __($status)
            ]);
        }
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return response()->json(['message' => __($status)], 200);
        } else {
            throw ValidationException::withMessages([
                'email' => __($status)
            ]);
        }
    }
}
