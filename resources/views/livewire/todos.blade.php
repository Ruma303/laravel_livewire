<form wire:submit.live='add'>
    <input type="text" wire:model.live.change='todo' class="border border-3 rounded-md px-1">
    @error('todo')
        <div class="text-red-500 text-sm">*{{ $message }}</div>
    @enderror

    <button type="submit" class="bg-emerald-400 p-2 py-1 rounded-md border-2 border-emerald-600">Add</button>
    @if ($preview !== '')
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $loop->iteration }}. {{ $todo }}</li>
            @endforeach
        </ul>
    @endif
</form>
