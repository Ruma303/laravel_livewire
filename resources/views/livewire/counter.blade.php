    <div class="flex flex-col items-center space-y-4">
        <h3 class="text-4xl font-bold">Counter</h3>
        <div class="buttons">
            <button wire:click="decrements" class="p-3 w-12 bg-black text-white font-bold rounded">-</button>
            <button wire:click="increments" class="p-3 w-12 bg-black text-white font-bold rounded">+</button>
        </div>
        <p class="text-2xl">Count: {{ $count }}</p>
    </div>


    