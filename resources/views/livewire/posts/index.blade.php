<div class="overflow-x-auto relative w-full">
    <nav class="flex flex-row space-x-4 mb-5">
        @if ($nav ?? false)
            <livewire:posts.nav-buttons />
        @endif
        <livewire:posts.search :results="$results" />
    </nav>
    <div class="shadow-md shadow-violet-300 overflow-hidden border-b border-violet-200 sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="bg-violet-200">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Body</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created
                        At</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Updated
                        At</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($results as $post)
                    <tr wire:key='"{{ $post->id }}'>
                        <td class="px-6 py-4 whitespace-nowrap flex flex-wrap gap-5">
                            <button type="button" wire:navigate.hover href="{{ route('posts.show', $post->id) }}">
                                <ion-icon name="eye-outline"
                                    class="text-white p-1 bg-sky-500 rounded-md hover:scale-125 hover:transition-all"></ion-icon>
                            </button>
                            <button type="button" wire:click='delete({{ $post->id }})'
                                wire:confirm='Are you sure?'>
                                <ion-icon name="trash-outline"
                                    class="text-white p-1 bg-red-500 rounded-md hover:scale-125 hover:transition-all"></ion-icon>
                            </button>
                            <button type="button" wire:click='update({{ $post->id }})'>
                                <ion-icon name="pencil-outline"
                                    class="text-white bg-amber-500 p-1 rounded-md hover:scale-125 hover:transition-all"></ion-icon>
                            </button>
                        </td>
                        <td class="px-6 py-4">{{ $post->id }}</td>
                        <td class="px-6 py-4">{{ $post->title }}</td>
                        <td class="px-6 py-4">{{ $post->slug }}</td>
                        <td class="px-6 py-4">{{ $post->body }}</td>
                        <td class="px-6 py-4">{{ $post->created_at->format('d/m/Y H:i') }}</td>
                        <td class="px-6 py-4">{{ $post->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
