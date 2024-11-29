<form wire:submit.live='add'>
    {{-- <input type="text" wire:model.live.debounce.100ms='todo' class="border border-3 rounded-md px-1"> --}}
    {{-- <input type="text" wire:model.live.throttole='todo' class="border border-3 rounded-md px-1"> --}}
    {{-- <input type="text" wire:model.live.change='todo' class="border border-3 rounded-md px-1"> --}}

    <select wire:model.fill="status">
        <option value="1" selected>Todo</option>
        <option value="2">Done</option>
        <option value="3">Suspended</option>
    </select>

    @error('status')
        <div class="text-red-500 text-sm">*{{ $message }}</div>
    @enderror

    <input type="text" wire:model.live.change='todo' class="border border-3 rounded-md px-1">

    @error('todo')
        <div class="text-red-500 text-sm">*{{ $message }}</div>
    @enderror

    <button type="submit" class="bg-emerald-400 p-2 py-1 rounded-md border-2 border-emerald-600">Add</button>
    @if ($preview !== '')
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $loop->iteration }}. {{ $status }} | {{ $todo }}</li>
            @endforeach
        </ul>
    @endif

</form>
