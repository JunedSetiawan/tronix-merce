<div class="font-sans text-base-content antialiased">
    <x-navbar />
    <div class="flex flex-col justify-between min-h-screen">
        <main>
            {{ $slot }}
        </main>
        <x-footer />
        {{-- <footer class="footer footer-center p-4 bg-base-300 text-base-content">
                <div>
                    <p>Copyright © {{ \Carbon\Carbon::now()->format('Y') }} - All right reserved by
                        {{ env('COPY_RIGHT') }}
                    </p>
                </div>
            </footer> --}}
    </div>
</div>
