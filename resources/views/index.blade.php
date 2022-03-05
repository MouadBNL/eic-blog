<x-layouts.base-layout>
    @foreach ($posts as $post)
        <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>,
        {{ $post->created_at->diffForHumans() }},
        {{ $post->author->name }} <br>
    @endforeach
</x-layouts.base-layout>