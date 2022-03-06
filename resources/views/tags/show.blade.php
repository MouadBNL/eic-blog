<x-layouts.base-layout>
    <section class="py-16 bg-dark">
        <div class="container text-white">
            <h2 class="text-center">#{{ $tag->name }}</h2>
        </div>
    </section>
    <section class="py-24">
        <div class="container">
            @if($posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-16 mb-16">
                    @foreach ($posts as $post)
                        <x-post-card :post="$post" />
                    @endforeach
                </div>
                <div>
                    {{ $posts->links('pagination::tailwind') }}
                </div>
            @else
                <p>il n'y a pas d'articles disponibles pour le moment, revenez plus tard.</p>
            @endif
        </div>
    </section>
</x-layouts.base-layout>