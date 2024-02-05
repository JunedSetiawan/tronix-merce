<x-guest-layout>
    <!-- Login card  -->
    <section class="mx-auto flex-grow w-full mt-10 mb-10 max-w-[1200px] px-5">
        <div class="container mx-auto border px-5 py-5 shadow-sm md:w-1/2">
            <div class="">
                <p class="text-4xl font-bold">CREATE AN ACCOUNT</p>
                <p>Register for new customer</p>
            </div>

            <x-splade-form action="{{ route('register') }}" class="mt-6 flex flex-col">
                <label for="name">Full Name</label>
                <input v-model="form.name" id="name" class="mb-3 mt-3 border px-4 py-2" type="text"
                    placeholder="John Doe" />
                <p class="text-error" v-text="form.errors.name" />

                <label for="email">Email Address</label>
                <input v-model="form.email" class="mb-3 mt-3 border px-4 py-2" id="email" type="email"
                    placeholder="youremail@domain.com" />
                <p class="text-error" v-text="form.errors.email" />

                <label for="password">Password</label>
                <input v-model="form.password" class="mt-3 border px-4 py-2" id="password" type="password"
                    placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;" />
                <p class="text-error" v-text="form.errors.password" />

                <label class="mt-5" for="password_confirmation">Confirm password</label>
                <input v-model="form.password_confirmation" id="password_confirmation" class="mt-3 border px-4 py-2"
                    type="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;" />
                <p class="text-error" v-text="form.errors.password_confirmation" />


                <button type="submit" class="my-5 w-full bg-violet-900 py-2 text-white">
                    CREATE ACCOUNT
                </button>
                <p class="text-center">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-violet-900">Login now</a>
                </p>
            </x-splade-form>
        </div>
    </section>
    <!-- /Login Card  -->
</x-guest-layout>

{{-- <x-auth-card>
    <div class="">
        <h2 class="text-2xl font-bold tracking-wide">Sign Up</h2>
        <hr class="border border-secondary my-4">
        <p class="text-dark">Hello, please sign up to continue.</p>

        <div class="mt-6">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" />
            <x-splade-form action="{{ route('register') }}" class="space-y-4">
                <x-splade-input id="name" type="text" name="name" :label="__('Name')" required autofocus />
                <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
                <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="new-password" />
                <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" required />

                <x-splade-submit class="w-full" :label="__('Sign Up')" />

                <div class="mt-6 text-center">
                    <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already have an account?') }}
                    </Link>
                </div>
            </x-splade-form>
        </div>
</x-auth-card> --}}
