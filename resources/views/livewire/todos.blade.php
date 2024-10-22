    <form wire:submit.live='add'>
        <input type="text" wire:model.live.debounce.100ms='todo' class="border border-3 rounded-md px-1">
        <input type="text" wire:model.live.throttole='todo' class="border border-3 rounded-md px-1">
        <input type="text" wire:model.live.change='todo' class="border border-3 rounded-md px-1">
        <input type="text" wire:model.live.blur='todo' class="border border-3 rounded-md px-1">
        <button type="button" class="bg-emerald-400 p-2 py-1 rounded-md border-2 border-emerald-600">Add</button>
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $loop->iteration }}. {{ $todo }}</li>
            @endforeach
        </ul>
    </form>


