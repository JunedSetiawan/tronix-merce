<x-splade-toggle data="isProfileOpen">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex flex-col">
            <!-- Page content here -->
            <x-navbar>
                {{ $headerNav ?? '' }}
            </x-navbar>

            {{ $slot }}
        </div>
        @if (!Request::routeIs('customer.*'))
            <x-sidebar />
        @endif
    </div>
</x-splade-toggle>
