<div class="bg-white rounded-lg shadow-md p-5 sticky top-24">
    <h3 class="text-xl font-semibold mb-4 text-[var(--color-primary)]">Категории</h3>

    <div class="flex flex-col space-y-2">
        <label class="flex items-center gap-2">
            <input type="checkbox" value="" wire:click="clearCategories" :checked="count($selectedSlugs) === 0"
                class="form-checkbox rounded text-[var(--color-accent)]" />
            <span class="text-sm">Всички</span>
        </label>

        @foreach ($categoryList as $category)
            <label class="flex items-center gap-2">
                <input type="checkbox" wire:model.defer="selectedSlugs" wire:change="applyCategoryFilter"
                    value="{{ $category->slug }}" class="form-checkbox rounded text-[var(--color-accent)]" />
                <span class="text-sm">{{ $category->name }}</span>
            </label>
        @endforeach

    </div>

    @if (count($selectedSlugs) === 0)
        <div class="mt-4 text-sm text-gray-500">Няма избрани категории.</div>
    @endif
</div>
