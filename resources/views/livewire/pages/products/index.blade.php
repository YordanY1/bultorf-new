<section class="py-20 px-4">
    <div class="container mx-auto">
        <div class="text-center mb-10 max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-[var(--color-primary)] mb-4">
                Нашите Продукти
            </h2>
            <p class="text-[var(--color-text)] text-lg leading-relaxed">
                Разгледайте нашата гама от торфове и почвени продукти, създадени да подхранват вашата земя и да
                подобряват реколтата.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <livewire:product-filters />
            </div>

            <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </div>
</section>
