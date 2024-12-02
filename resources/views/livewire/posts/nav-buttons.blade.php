<div class="flex flex-row space-x-4">
    <button type="button" wire:click='generate_posts()'
        class="text-white p-1 bg-emerald-500 rounded-md hover:scale-105 hover:transition-all mb-2 shadow-md shadow-green-200 h-fit">
        Quick Generate Posts
    </button>
    <a type="button" href="{{ route('posts.create') }}"
        class="text-white p-1 bg-violet-500 rounded-md hover:scale-105 hover:transition-all mb-2 shadow-md shadow-violet-200 h-fit">
        Create Posts
    </a>
</div>