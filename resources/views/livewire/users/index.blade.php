<div class="container mx-auto px-4">
    <button type="button" wire:click='generate_users()' class="text-white p-1 bg-emerald-500 rounded-md hover:scale-105 hover:transition-all mb-2 shadow-md shadow-green-200">Generate Users</button>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow-md shadow-violet-300 overflow-hidden border-b border-violet-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-violet-200">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email Verified At
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr wire:key='"{{ $user->id }}'>
                                    <td class="px-6 py-4 whitespace-nowrap flex flex-wrap gap-5">
                                        <button type="button"
                                            wire:click='delete({{ $user->id }})'
                                            wire:confirm='Are you sure?'>
                                            <ion-icon name="trash-outline" class="text-white p-1 bg-red-500 rounded-md hover:scale-125 hover:transition-all"></ion-icon>
                                        </button>
                                        <button type="button" wire:click='update({{ $user->id }})'>
                                            <ion-icon name="pencil-outline" class="text-white bg-amber-500 p-1 rounded-md hover:scale-125 hover:transition-all"></ion-icon>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ str($user->name)->words(2) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->email_verified_at ? str($user->email_verified_at->format('Y-m-d H:i:s'))->limit(10) : 'Not verified' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>