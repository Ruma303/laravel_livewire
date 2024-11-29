<div class="flex space-x-2">
    <input type="text" wire:model.live.debounce='search_post'
        class="border border-gray-300 rounded-md px-3 py-1 focus:border-violet-500 focus:border-2 focus:outline-none"
        placeholder="{{ $placeholder }}">

    @if ($search_post)
        <button type="button" wire:click.prevent="clearSearch"
            class="text-white p-1 bg-gray-500 rounded-md hover:scale-105 hover:transition-all mb-2 shadow-md shadow-gray-200 h-fit">Reset</button>
    @endif
</div>
