<section>
    <header>
        <h2 class="text-lg font-medium text-base-content">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-base-content">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <x-splade-form method="put" :action="route('backdash.profile.update')" class="mt-6 space-y-6" preserve-scroll>
        <x-splade-input id="current_password" name="current_password" type="password" :label="__('Current Password')"
            autocomplete="current-password" placeholder="current password" />
        <x-splade-input id="password" name="password" type="password" :label="__('New Password')" autocomplete="new-password"
            placeholder="new password" />
        <x-splade-input id="password_confirmation" name="password_confirmation" type="password" :label="__('Confirm Password')"
            autocomplete="new-password" placeholder="password confirmation" />

        <div class="flex items-center gap-4">
            <x-splade-submit :label="__('Save')" />

            @if (session('status') === 'password-updated')
                <p class="text-sm text-base-content">{{ __('Saved.') }}</p>
            @endif
        </div>
    </x-splade-form>
</section>
