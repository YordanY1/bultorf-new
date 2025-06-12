<section class="py-20 px-4 bg-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <div>
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                class="w-full max-h-[400px] object-contain rounded-xl shadow-md">
        </div>

        <div>
            <h1 class="text-3xl font-bold text-[var(--color-primary)] mb-4">
                {{ $product->name }}
            </h1>

            <p class="text-gray-600 text-base mb-6 leading-relaxed">
                {{ $product->description }}
            </p>

            <p class="text-xl font-bold text-[var(--color-accent)] mb-6">
                Цена: {{ number_format($product->price, 2) }} лв
            </p>

            <a wire:navigate href="{{ route('contact.index') }}"
                class="inline-block bg-[var(--color-cta)] hover:bg-[var(--color-accent-2)] text-white font-semibold px-6 py-3 rounded-lg transition">
                Запитване
            </a>
        </div>

    </div>
</section>
