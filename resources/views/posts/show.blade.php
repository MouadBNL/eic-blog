<x-layouts.base-layout>
    <div>
        <ul>
            <li>{{ $post->title }}</li>
            <li>{!! $post->content !!},</li>
            <li>{{ $post->author->name }},</li>
            <li>{{ implode(', ', $post->tags->pluck('name')->toArray()) }}</li>
        </ul>
    </div>
</x-layouts.base-layout>