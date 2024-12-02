<aside class="bg-slate-100 p-4 border-r-2 border-violet-200 min-w-44">
    <h3 class="text-4xl font-bold mb-4">{{ $title ?? 'Livewire' }}</h3>
    <nav class="p-1 flex flex-col items-start gap-1">
        <a href="{{ route('users') }}" @class([
            'font-semibold text-violet-600 text-xl' => request()->routeIs('users')
        ])>Users</a>
        <a href="{{ route('posts.index') }}" @class([
            'font-semibold text-violet-600 text-xl' => request()->routeIs('posts.*')
        ])>Posts</a>
        <a href="{{ route('todos') }}" @class([
            'font-semibold text-violet-600 text-xl' => request()->routeIs('todos')
        ])>Todos</a>
        <a href="{{ route('counter') }}" @class([
            'font-semibold text-violet-600 text-xl' => request()->routeIs('counter')
        ])>Counter</a>
    </nav>
</aside>