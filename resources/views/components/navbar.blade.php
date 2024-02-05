@if (Request::routeIs('backdash.*'))
    <div class="w-full navbar bg-base-100 shadow">
        <div class="flex-none lg:hidden">
            <label for="my-drawer-2" class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </label>
        </div>
        <x-navbar-content>
            {{ $slot }}
        </x-navbar-content>
    </div>
@else
    <x-splade-toggle data="mobileMenuOpen,desktopMenuOpen">
        <!-- Header -->
        <header class="mx-auto flex h-16 max-w-[1200px] items-center justify-between px-5">
            <a href="{{ route('home') }}">
                <h1 class="font-mono text-3xl font-bold">Tech Tronix</h1>
            </a>

            <div class="md:hidden">
                <button @click.prevent="toggle('mobileMenuOpen')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <form class="hidden h-9 w-2/5 items-center border md:flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mx-3 h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>

                <input class="hidden w-11/12 outline-none md:block" type="search" placeholder="Search" />

                <button class="ml-auto h-full bg-amber-400 px-4 hover:bg-yellow-300">
                    Search
                </button>
            </form>
            @auth
                <div class="hidden gap-3 md:!flex">
                    <a href="wishlist.html" class="flex cursor-pointer flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                        <p class="text-xs">Wishlist</p>
                    </a>

                    <a href="cart.html" class="flex cursor-pointer flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                                clip-rule="evenodd" />
                        </svg>

                        <p class="text-xs">Cart</p>
                    </a>

                    <a href="account-page.html" class="relative flex cursor-pointer flex-col items-center justify-center">
                        <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>

                        <p class="text-xs">Account</p>
                    </a>
                </div>
            @endauth
        </header>
        <!-- /Header -->

        <!-- Burger menu  -->
        <section v-if="mobileMenuOpen" class="absolute left-0 right-0 z-50 h-screen w-full bg-white">
            <div class="mx-auto">
                @auth
                    <div class="mx-auto flex w-full justify-center gap-3 py-4">
                        <a href="wishlist.html" class="flex cursor-pointer flex-col items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <p class="text-xs">Wishlist</p>
                        </a>

                        <a href="cart.html" class="flex cursor-pointer flex-col items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                <path fill-rule="evenodd"
                                    d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                                    clip-rule="evenodd" />
                            </svg>

                            <p class="text-xs">Cart</p>
                        </a>

                        <a href="account-page.html"
                            class="relative flex cursor-pointer flex-col items-center justify-center">
                            <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
                                <span
                                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                                <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
                            </span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>

                            <p class="text-xs">Account</p>
                        </a>
                    </div>
                @endauth

                <form class="my-4 mx-5 flex h-9 items-center border">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="mx-3 h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>

                    <input class="hidden w-11/12 outline-none md:block" type="search" placeholder="Search" />

                    <button type="submit" class="ml-auto h-full bg-amber-400 px-4 hover:bg-yellow-300">
                        Search
                    </button>
                </form>
                <ul class="text-center font-medium">
                    <li class="py-2"><a href="{{ route('home') }}">Home</a></li>
                    <li class="py-2"><a href="catalog.html">Catalog</a></li>
                    <li class="py-2"><a href="about-us.html">About Us</a></li>
                    <li class="py-2"><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
        </section>
        <!-- /Burger menu  -->

        <!-- Nav bar -->
        <!-- hidden on small devices -->

        <nav class="relative bg-violet-900">
            <div class="mx-auto hidden h-12 w-full max-w-[1200px] items-center md:flex">
                <button @click.prevent="toggle('desktopMenuOpen')"
                    class="ml-5 flex h-full w-40 cursor-pointer items-center justify-center bg-amber-400">
                    <div class="flex justify-around" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="mx-1 h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        All categories
                    </div>
                </button>

                <div class="mx-7 flex gap-8">
                    <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                        href="{{ route('home') }}">Home</a>
                    <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                        href="catalog.html">Catalog</a>
                    <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                        href="about-us.html">About Us</a>
                    <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                        href="contact-us.html">Contact Us</a>
                </div>

                <div class="ml-auto flex gap-4 px-5">
                    @guest

                        <Link class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                            href="{{ route('login') }}">Login</Link>

                        <span class="text-white">&#124;</span>

                        <Link class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                            href="{{ route('register') }}">Sign Up</Link>
                    @endguest
                    @auth
                        <h5 class="text-yellow-300 font-bold">{{ Auth::user()->name }}</h5>
                        <span class="text-white">&#124;</span>
                        <Link class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                            href="{{ route('logout') }}" method="POST">Logout</Link>

                    @endauth
                </div>
            </div>
        </nav>

        <!-- Menu  -->

        <x-splade-toggle
            data="isLaptops, isPhone, isTablets, isMonitors, isPrinters, isCameras, isTv, isSmartwatch, isAccessories, isOthers">
            <section v-if="desktopMenuOpen"
                class="absolute left-0 right-0 z-10 w-full border-b border-r border-l bg-white">
                <div class="mx-auto flex max-w-[1200px] py-10">
                    <div class="w-[300px] border-r">
                        <ul class="px-5">
                            <x-mega-menu-content
                                @click.prevent="setToggle('isPhone',true), setToggle('isLaptops', false), setToggle('isTablets', false), setToggle('isMonitors', false), setToggle('isPrinters', false), setToggle('isCameras', false), setToggle('isTv', false), setToggle('isSmartwatch', false), setToggle('isAccessories', false), setToggle('isOthers', false)">
                                <x-heroicon-o-device-phone-mobile class="w-5 h-5" />
                                SmartPhone
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isLaptops',true), setToggle('isPhone', false), setToggle('isTablets', false), setToggle('isMonitors', false), setToggle('isPrinters', false), setToggle('isCameras', false), setToggle('isTv', false), setToggle('isSmartwatch', false), setToggle('isAccessories', false), setToggle('isOthers', false)">
                                <x-heroicon-o-computer-desktop class="w-5 h-5" />
                                Laptops
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isTablets',true), setToggle('isLaptops', false), setToggle('isPhone', false), setToggle('isMonitors', false), setToggle('isPrinters', false), setToggle('isCameras', false), setToggle('isTv', false), setToggle('isSmartwatch', false), setToggle('isAccessories', false), setToggle('isOthers', false)">
                                <x-heroicon-o-device-tablet class="w-5 h-5" />
                                Tablets
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isMonitors',true), setToggle('isLaptops', false), setToggle('isTablets', false), setToggle('isPhone', false), setToggle('isPrinters', false), setToggle('isCameras', false), setToggle('isTv', false), setToggle('isSmartwatch', false), setToggle('isAccessories', false), setToggle('isOthers', false)">
                                <x-heroicon-o-computer-desktop class="w-5 h-5" />
                                Monitors
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isPrinters',true), setToggle('isLaptops', false), setToggle('isTablets', false), setToggle('isMonitors', false), setToggle('isPhone', false), setToggle('isCameras', false), setToggle('isTv', false), setToggle('isSmartwatch', false), setToggle('isAccessories', false), setToggle('isOthers', false)">
                                <x-heroicon-o-printer class="w-5 h-5" />
                                Printers
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isCameras',true), setToggle('isLaptops', false), setToggle('isTablets', false), setToggle('isMonitors', false), setToggle('isPrinters', false), setToggle('isPhone', false), setToggle('isTv', false), setToggle('isSmartwatch', false), setToggle('isAccessories', false), setToggle('isOthers', false)">
                                <x-heroicon-o-camera class="w-5 h-5" />
                                Cameras
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isTv',true), setToggle('isLaptops', false), setToggle('isTablets', false), setToggle('isMonitors', false), setToggle('isPrinters', false), setToggle('isCameras', false), setToggle('isPhone', false), setToggle('isSmartwatch', false), setToggle('isAccessories', false), setToggle('isOthers', false)">
                                <x-heroicon-o-tv class="w-5 h-5" />
                                TV's
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isSmartwatch',true), setToggle('isLaptops', false), setToggle('isTablets', false), setToggle('isMonitors', false), setToggle('isPrinters', false), setToggle('isCameras', false), setToggle('isTv', false), setToggle('isPhone', false), setToggle('isAccessories', false), setToggle('isOthers', false)">
                                <x-heroicon-o-clock class="w-5 h-5" />
                                Smartwatch
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isAccessories',true), setToggle('isLaptops', false), setToggle('isTablets', false), setToggle('isMonitors', false), setToggle('isPrinters', false), setToggle('isCameras', false), setToggle('isTv', false), setToggle('isSmartwatch', false), setToggle('isPhone', false), setToggle('isOthers', false)">
                                <x-heroicon-o-finger-print class="w-5 h-5" />
                                Accessories
                            </x-mega-menu-content>
                            <x-mega-menu-content
                                @click.prevent="setToggle('isOthers',true), setToggle('isLaptops', false), setToggle('isTablets', false), setToggle('isMonitors', false), setToggle('isPrinters', false), setToggle('isCameras', false), setToggle('isTv', false), setToggle('isSmartwatch', false), setToggle('isPhone', false), setToggle('isAccessories', false)">
                                <x-heroicon-o-gift class="w-5 h-5" />
                                Others
                            </x-mega-menu-content>
                        </ul>
                    </div>
                    <x-mega-menu-sub-content />
                </div>
            </section>
        </x-splade-toggle>
        <!-- /Menu  -->
        <!-- /Nav bar -->
    </x-splade-toggle>
@endif
