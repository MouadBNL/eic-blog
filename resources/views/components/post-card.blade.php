<article>
    <div class="ratio-720 bg-gray-300 mb-3 relative overflow-hidden">
        <img class="absolute inset-0 object-fill object-center" src="{{ $post->featured_image ?? 'https://dummyimage.com/16:9x720&text=No+Image' }}" alt="image">
    </div>
    <div class="flex flex-wrap gap-2 mb-3 text-sm">
        @foreach ($post->tags as $tag)
            <x-tag>{{ $tag->name }}</x-tag>
        @endforeach
        <span class="block py-1 opacity-70">{{ $post->created_at->diffForHumans() }}</span>
    </div>
    <a href="{{ route('posts.show', $post->slug) }}">
        <h3 class="hover:underline">{{ $post->title }}</h3>
    </a>
</article>