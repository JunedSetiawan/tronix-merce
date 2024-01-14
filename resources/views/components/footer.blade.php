<!-- Payment and copyright  -->

<section class="h-11 bg-amber-400">
    <div class="mx-auto flex max-w-[1200px] items-center justify-center px-4 pt-2">
        <p>Copyright © {{ \Carbon\Carbon::now()->format('Y') }} - by
            {{ env('APP_NAME') }}</p>
        {{-- <div class="flex items-center space-x-3">
            <img class="h-8" src="https://cdn-icons-png.flaticon.com/512/5968/5968299.png" alt="Visa icon" />
            <img class="h-8" src="https://cdn-icons-png.flaticon.com/512/349/349228.png" alt="AE icon" />
            <img class="h-8" src="https://cdn-icons-png.flaticon.com/512/5968/5968144.png" alt="Apple pay icon" />
        </div> --}}
    </div>
</section>
<!-- /Payment and copyright  -->
