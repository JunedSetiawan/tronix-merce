<x-guest-layout>
    <!-- Login card  -->
    <section class="mx-auto flex-grow w-full mt-10 mb-10 max-w-[1200px] px-5">
        <div class="container mx-auto border px-5 py-5 shadow-sm md:w-1/2">
            <div class="">
                <p class="text-4xl font-bold">LOGIN</p>
                <p>Welcome back, customer!</p>
            </div>

            <x-splade-form action="{{ route('login.store') }}" class="mt-6 flex flex-col">
                <label for="email">Email Address</label>
                <input v-model="form.email" class="mb-3 mt-3 border px-4 py-2" id="email" type="email"
                    placeholder="youremail@domain.com" />
                <p class="text-error" v-text="form.errors.email" />

                <label for="password">Password</label>
                <input v-model="form.password" class="mt-3 border px-4 py-2" id="password" type="password"
                    placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;" />
                <p class="text-error" v-text="form.errors.password" />

                <div class="mt-4 flex justify-between">
                    <x-splade-checkbox class="" id="remember_me" name="remember" :label="__('Remember me')" />
                    @if (Route::has('password.request'))
                        <Link href="{{ route('password.request') }}" class="text-violet-900">Forgot password</Link>
                    @endif
                </div>

                <button type="submit" class="my-5 w-full bg-violet-900 py-2 text-white">
                    LOGIN
                </button>
                @if (Route::has('register'))
                    <p class="text-center">
                        Don`t have account?
                        <Link href="{{ route('register') }}" class="text-violet-900">Register now</Link>
                    </p>
                @endif
            </x-splade-form>
        </div>
    </section>
    <!-- /Login Card  -->
</x-guest-layout>

{{-- <x-auth-card>
    <div class="">

        <h2 class="text-2xl font-bold tracking-wide text-base-content">Sign in</h2>
        <hr class="border border-secondary my-4">
        <p class="text-base-content">Welcome back, please sign in to continue.</p>

        <div class="mt-3">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" />

            <x-splade-form action="{{ route('login') }}" class="space-y-4">
                <!-- Email Address -->
                <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus
                    float="true" />
                <x-splade-input id="password" type="password" name="password" :label="__('Password')" required
                    autocomplete="current-password" float="true" />
                <x-splade-checkbox class="" id="remember_me" name="remember" :label="__('Remember me')" />

                <x-splade-submit class="w-full" :label="__('Sign in')" />

                <div class="mt-6 text-center">
                    @if (Route::has('password.request'))
                    <Link class="underline text-sm text-base-content hover:text-neutral"
                        href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                    </Link>
                    @endif
                    <br>
                    @if (Route::has('register'))
                    <Link class="underline text-sm text-base-content hover:text-neutral" href="{{ route('register') }}">
                    {{ __('Dont have an account? Sign up') }}
                    </Link>
                    @endif
                </div>
            </x-splade-form>
        </div>

    </div>

</x-auth-card> --}}
