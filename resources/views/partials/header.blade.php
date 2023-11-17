<header class="bg-white">
  <nav class="mx-auto flex container items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex flex-1">
      <div class="hidden lg:flex lg:gap-x-12">
        <x-nav-link href="#">Product</x-nav-link>
        <x-nav-link href="#">Features</x-nav-link>
        <x-nav-link href="#">Company</x-nav-link>
      </div>
      <div class="flex lg:hidden">
        <button id="mobile-menu-button" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" _="on click call #mobile-menu.showModal()">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
    </div>
    <x-header-logo></x-header-logo>
    <div class="flex flex-1 justify-end">
      <x-login-link></x-login-link>
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <dialog id="mobile-menu" class="lg:hidden" aria-modal="true">
    <div class="fixed inset-y-0 left-0 z-10 w-full max-w-xs overflow-y-auto bg-white px-6 py-6">
      <div class="grid grid-cols-4 items-center">
        <div class="flex flex-1">
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" _="on click call #mobile-menu.close()">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <x-header-logo class="col-span-2"></x-header-logo>
      </div>
      <div class="mt-6 space-y-2">
        <x-mobile-nav-link href="#">Product</x-mobile-nav-link>
        <x-mobile-nav-link href="#">Features</x-mobile-nav-link>
        <x-mobile-nav-link href="#">Company</x-mobile-nav-link>
      </div>
    </div>
  </dialog>
</header>
