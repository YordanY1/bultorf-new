<div wire:navigate x-data="{ open: false }">
    <header class="bg-white text-[var(--color-primary)] shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">

            <a wire:navigate href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logo.webp') }}" alt="Bultorf Logo" class="h-20 sm:h-16">
            </a>

            <!-- Toggle button -->
            <button @click="open = !open" class="sm:hidden focus:outline-none">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Desktop nav -->
            <nav class="hidden sm:flex gap-6 text-[var(--color-primary)] text-base font-medium">
                <a wire:navigate href="{{ route('home') }}"
                    class="hover:underline underline-offset-4 transition text-2xl">Начало</a>
                <a wire:navigate href="{{ route('products.index') }}"
                    class="hover:underline underline-offset-4 transition text-2xl">Продукти</a>
                <a wire:navigate href="{{ route('about.index') }}"
                    class="hover:underline underline-offset-4 transition text-2xl">За нас</a>
                <a wire:navigate href="{{ route('contact.index') }}"
                    class="hover:underline underline-offset-4 transition text-2xl">Контакти</a>
            </nav>
        </div>

        <!-- Mobile nav -->
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="sm:hidden bg-white text-[var(--color-primary)] border-t border-gray-200">
            <nav class="flex flex-col items-center py-4 space-y-4 text-base font-medium">
                <a wire:navigate href="{{ route('home') }}"
                    class="hover:underline underline-offset-4 transition text-2xl">Начало</a>
                <a wire:navigate href="{{ route('products.index') }}"
                    class="hover:underline underline-offset-4 transition text-2xl">Продукти</a>
                <a wire:navigate href="{{ route('about.index') }}"
                    class="hover:underline underline-offset-4 transition text-2xl">За нас</a>
                <a wire:navigate href="{{ route('contact.index') }}"
                    class="hover:underline underline-offset-4 transition text-2xl">Контакти</a>
            </nav>
        </div>
    </header>
</div>
