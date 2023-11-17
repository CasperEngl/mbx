<header class="fixed top-0 inset-x-0 bg-white">
    <nav class="flex gap-x-4 lg:gap-x-12 container px-6 items-center lg:justify-center" aria-label="Global">
        <div class="flex flex-1 lg:flex-none">
            <div class="hidden lg:flex lg:gap-x-12">
                <x-nav-link href="#">Product</x-nav-link>
                <x-nav-link href="#">Features</x-nav-link>
                <x-nav-link href="#">Company</x-nav-link>
            </div>

            <div class="flex lg:hidden">
                <button id="menu-button" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    _="on click call #mobile-menu.showModal()">

                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>

        <x-header-logo class="-mb-8 rounded-b-lg">
            <div class="pt-1 text-xs">Når intet andet er nært nok</div>
        </x-header-logo>

        <div class="flex-1">
            <div class="hidden lg:flex lg:gap-x-12">
                <x-nav-link href="#">Sign in</x-nav-link>
                <x-nav-link href="#">Sign up</x-nav-link>
            </div>
        </div>
    </nav>

    <dialog id="mobile-menu" class="lg:hidden" aria-modal="true" _="on open call #mobile-menu-button.focus()
        on close call #menu-button.focus()
    ">
        <div class="fixed inset-0 flex min-h-full items-center justify-center p-4"
            _="on click if event.target == event.currentTarget call #mobile-menu.close()">
            >
            <div class="fixed inset-y-0 left-0 z-10 w-full max-w-xs overflow-y-auto bg-white px-6 py-6">

                <div class="grid grid-cols-3 items-center">
                    <div>
                        <button #mobile-menu-button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700"
                            _="on click call #mobile-menu.close()">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex justify-center">
                        <x-header-logo class="rounded-lg"></x-header-logo>
                    </div>
                </div>

                <div class="mt-6 space-y-2">
                    <x-mobile-nav-link href="#">Product</x-mobile-nav-link>
                    <x-mobile-nav-link href="#">Features</x-mobile-nav-link>
                    <x-mobile-nav-link href="#">Company</x-mobile-nav-link>
                </div>
            </div>
        </div>
    </dialog>
</header>

<div class="h-28"></div>
