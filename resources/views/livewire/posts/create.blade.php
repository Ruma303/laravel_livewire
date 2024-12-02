<div class="overflow-x-auto relative w-4/6 h-full px-4">
    <form wire:submit='save()' class="flex flex-col items-start space-y-4 w-full h-full">
        <h1 class="text-4xl font-medium">Create Post</h1>
        <input type="text" wire:model="title" class="border-2 border-gray-200 rounded-md" placeholder="title">
        @error('title')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <textarea wire:model="body" cols="30" rows="3" class="border-2 border-gray-200 rounded-md"
            placeholder="Descrizione"></textarea>
        @error('body')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <button type="submit"
            class="text-white p-1 bg-violet-500 rounded-md hover:scale-105 hover:transition-all mb-2 shadow-md shadow-violet-200 h-fit">Submit
            new post</button>
    </form>
</div>
