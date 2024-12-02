<div class="max-w-4xl mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
    <p class="text-gray-700 mb-6">{{ $post->body }}</p>
    <a href="{{ route('posts.index') }}" class="text-white p-1 bg-violet-500 rounded-md hover:scale-105 hover:transition-all mb-2 shadow-md shadow-violet-200 h-fit">Torna alla lista dei post</a>
</div>