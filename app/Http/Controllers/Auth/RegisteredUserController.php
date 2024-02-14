<?php

namespace App\Http\Controllers\Auth;

use App\DataTransferObject\UserDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\User\UserService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use ProtoneMedia\Splade\Facades\Toast;

class RegisteredUserController extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {
        $user = $this->userService->register(
            UserDto::register($request)
        );
        if (!$user->email_verified_at) {
            event(new Registered($user));
        }
        Auth::login($user);
        Toast::info('Please Verify your email address!');
        return redirect()->route('verification.notice');
    }
}
