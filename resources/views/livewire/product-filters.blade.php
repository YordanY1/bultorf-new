<div x-data="{ open: false }" class="md:block">
    <button @click="open = !open"
        class="md:hidden bg-[var(--color-accent)] text-white font-semibold px-4 py-2 rounded-xl mb-4 w-full flex items-center justify-center gap-2">
        <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="open" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
        <span>Филтри</span>
    </button>


    <div x-show="open || window.innerWidth >= 768" x-transition
        class="bg-[var(--color-card)] rounded-2xl shadow-lg p-6 border border-gray-700"
        :class="{ 'hidden': !open && window.innerWidth < 768 }">

        <h3 class="text-2xl font-bold mb-6 text-[var(--color-primary)] text-center">Филтър по категории</h3>

        <div class="flex flex-col space-y-3">

            <label class="flex items-center gap-3 cursor-pointer transition hover:bg-white/5 px-3 py-2 rounded-lg">
                <input type="checkbox" value="" wire:click="clearCategories"
                    :checked="count($selectedSlugs) === 0"
                    class="form-checkbox w-5 h-5 text-[var(--color-accent)] rounded focus:ring-[var(--color-accent)] transition" />
                <span class="text-sm text-[var(--color-text)] font-medium">Всички</span>
            </label>


            @foreach ($categoryList as $category)
                <label class="flex items-center gap-3 cursor-pointer transition hover:bg-white/5 px-3 py-2 rounded-lg">
                    <input type="checkbox" wire:model.defer="selectedSlugs" wire:change="applyCategoryFilter"
                        value="{{ $category->slug }}"
                        class="form-checkbox w-5 h-5 text-[var(--color-accent)] rounded focus:ring-[var(--color-accent)] transition" />
                    <span class="text-sm text-[var(--color-text)] font-medium">{{ $category->name }}</span>
                </label>
            @endforeach
        </div>

        @if (count($selectedSlugs) === 0)
            <div class="mt-6 text-center text-sm text-gray-400 italic">Няма избрани категории.</div>
        @endif
    </div>
</div>
