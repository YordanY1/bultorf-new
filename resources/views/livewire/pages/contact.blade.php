<section class="py-20 px-4 bg-[var(--color-card)] rounded-3xl shadow-xl text-[var(--color-text)]">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-extrabold text-center text-[var(--color-accent)] mb-10">
            Свържете се с нас
        </h1>

        @if (session()->has('success'))
            <div class="bg-green-700/20 border border-green-600 text-white px-4 py-3 rounded-xl mb-8 text-center">
                {{ session('success') }}
            </div>
        @endif


        <form wire:submit.prevent="submit"
            class="space-y-6 bg-[var(--color-card)] p-8 rounded-2xl border border-gray-700 shadow-inner">

            <div>
                <label class="block text-sm font-semibold mb-1">Име</label>
                <input type="text" wire:model="name"
                    class="w-full rounded-lg bg-gray-800 text-white border border-gray-600 px-4 py-3 focus:ring-2 focus:ring-[var(--color-accent)] focus:outline-none"
                    placeholder="Вашето име">
                @error('name')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label class="block text-sm font-semibold mb-1">Имейл</label>
                <input type="email" wire:model="email"
                    class="w-full rounded-lg bg-gray-800 text-white border border-gray-600 px-4 py-3 focus:ring-2 focus:ring-[var(--color-accent)] focus:outline-none"
                    placeholder="you@example.com">
                @error('email')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label class="block text-sm font-semibold mb-1">Съобщение</label>
                <textarea wire:model="message" rows="5"
                    class="w-full rounded-lg bg-gray-800 text-white border border-gray-600 px-4 py-3 focus:ring-2 focus:ring-[var(--color-accent)] focus:outline-none"
                    placeholder="Вашето съобщение..."></textarea>
                @error('message')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit"
                class="w-full bg-[var(--color-accent)] hover:bg-[var(--color-accent-2)] text-white text-lg font-bold py-3 rounded-lg transition-all duration-200 shadow-md">
                Изпрати съобщението
            </button>
        </form>
    </div>
</section>
