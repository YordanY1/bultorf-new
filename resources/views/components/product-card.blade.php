@props(['product'])

<div
    class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition border border-gray-100 overflow-hidden flex flex-col">

    <div class="bg-gray-50">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
            class="w-full object-contain h-64 p-4 transition-transform duration-300 group-hover:scale-105">
    </div>

    <div class="flex flex-col justify-between flex-grow p-5">
        <div>
            <div class="flex items-center gap-2 text-[var(--color-accent)] mb-1">
                <i class="fas fa-seedling"></i>
                <span class="uppercase text-xs tracking-widest font-medium">Продукт</span>
            </div>

            <h3 class="text-lg font-semibold text-[var(--color-primary)] leading-tight mb-2">
                {{ $product->name }}
            </h3>

            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                {{ Str::limit($product->description, 90) }}
            </p>
        </div>

        <div class="flex items-center justify-between mt-auto">
            <div class="text-[var(--color-accent)] font-bold text-lg">
                {{ number_format($product->price, 2) }} лв
            </div>

            <a wire:navigate href="{{ route('products.show', $product) }}"
                class="inline-block bg-[var(--color-cta)] hover:bg-[var(--color-accent-2)] text-white text-sm font-semibold px-4 py-2 rounded-lg transition">
                Разгледай продукта
            </a>
        </div>
    </div>

</div>
