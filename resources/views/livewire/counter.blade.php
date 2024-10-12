<div class="flex flex-col items-center space-y-4">
    <h3 class="text-4xl font-bold">Counter</h3>
    <div class="buttons">
        <button wire:click="decrements" class="w-12 p-3 font-bold text-white bg-black rounded">-</button>
        <button wire:click="increments" class="w-12 p-3 font-bold text-white bg-black rounded">+</button>
    </div>
    <p class="text-2xl">Count: {{ $count }}</p>
</div>