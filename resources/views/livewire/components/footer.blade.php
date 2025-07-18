<footer class="bg-[var(--color-card)] text-[var(--color-text)] py-10 mt-20 border-t border-gray-700">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">

        <div>
            <h4 class="text-lg font-bold mb-4 text-[var(--color-primary)]">За Булторф</h4>
            <p class="text-sm text-[var(--color-text)] leading-relaxed">
                Булторф е ваш доверен партньор за висококачествени почвени продукти и торове за устойчиво земеделие.
            </p>
        </div>

        <div>
            <h4 class="text-lg font-bold mb-4 text-[var(--color-primary)]">Навигация</h4>
            <ul class="space-y-2 text-sm text-[var(--color-text)]">
                <li><a wire:navigate href="{{ route('home') }}" class="hover:text-[var(--color-accent)]">Начало</a></li>
                <li><a wire:navigate href="{{ route('products.index') }}"
                        class="hover:text-[var(--color-accent)]">Продукти</a></li>
                <li><a wire:navigate href="{{ route('about.index') }}" class="hover:text-[var(--color-accent)]">За
                        нас</a></li>
                <li><a wire:navigate href="{{ route('contact.index') }}"
                        class="hover:text-[var(--color-accent)]">Контакти</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-lg font-bold mb-4 text-[var(--color-primary)]">Последвайте ни</h4>
            <div class="flex justify-center md:justify-start space-x-4 text-2xl text-[var(--color-text)]">
                <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook-f"></i></a>
                {{-- <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-red-600"><i class="fab fa-youtube"></i></a> --}}
            </div>
        </div>


        <div>
            <h4 class="text-lg font-bold mb-4 text-[var(--color-primary)]">Телефон за поръчки</h4>
            <p class="text-[var(--color-text)] text-sm">
                <i class="fas fa-phone-alt mr-2 text-[var(--color-accent)]"></i>
                <a href="tel:+359888363913" class="hover:text-[var(--color-accent)] font-semibold">
                    +359 888 363 913
                </a>
            </p>
        </div>

    </div>

    <div class="mt-8 text-center text-xs text-gray-500">
        © {{ date('Y') }} Bultorf. Всички права запазени.
    </div>

    <div class="mt-2 text-center text-xs text-gray-500">
        <a wire:navigate href="{{ route('privacy') }}" class="underline hover:text-[var(--color-accent)]">
            Политика за поверителност
        </a>
    </div>
</footer>
