<div class="font-primary bg-[var(--color-card)] text-[var(--color-text)]">

    {{-- Hero Section --}}
    <section class="w-full bg-cover bg-center text-white py-28 px-4"
        style="background-image: url('{{ asset('images/hero-background.jpg') }}');">
        <div class="container mx-auto text-center">
            <div class="flex flex-col items-center justify-center space-y-4">
                <h1 class="text-4xl sm:text-5xl font-bold">Добре дошли в
                    <span class="text-[var(--color-accent)]">Bultorf</span>
                </h1>
                <p class="text-lg max-w-2xl text-white/90">
                    Каталог за качествени торове – органични, минерални и NPK решения за земеделие и градинарство.
                </p>

                <a wire:navigate href="{{ route('products.index') }}"
                    class="mt-6 inline-block bg-white text-[var(--color-accent)] hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition">
                    Разгледай каталога
                </a>
            </div>
        </div>
    </section>

    {{-- Top Products --}}
    <section class="py-20 px-4">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-10 text-[var(--color-primary)]">Топ продукти</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                @foreach ($topProducts as $product)
                    <x-product-card :product="$product" />
                @endforeach

            </div>
        </div>
    </section>


    {{-- Google Maps --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 text-[var(--color-primary)]">Нашата локация</h2>
            <div class="w-full h-[450px] overflow-hidden rounded-lg shadow">
                <iframe class="w-full h-full border-0"
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2954.82498528466!2d24.723535376574485!3d42.21818504405238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDLCsDEzJzA1LjUiTiAyNMKwNDMnMzQuMCJF!5e0!3m2!1sen!2sbg!4v1717501987092!5m2!1sen!2sbg"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

</div>
