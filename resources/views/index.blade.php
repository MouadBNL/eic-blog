<x-layouts.base-layout>
    <section class="py-24 bg-dark text-white">
        <div class="container">
            <div class="pt-8 grid grid-cols-2 gap-x-8 mb-24">
                <div class="flex items-center">
                    <article>
                        <div class="flex space-x-2 mb-4">
                            @foreach ($latestPost->tags as $tag)
                                <x-tag>{{ $tag->name }}</x-tag>
                            @endforeach
                            <span class="block py-1 opacity-70">{{ $latestPost->created_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="hover:underline">{{ $latestPost->title }}</h2>
                        @if($latestPost->excerpt)
                            <p>
                                {{ $latestPost->excerpt }}
                            </p>
                        @endif
                    </article>
                </div>

                <div class="pl-24">
                    <div class="ratio-720 bg-gray-300 relative overflow-hidden">
                        <img class="absolute inset-0 object-fill object-center" src="{{ $latestPost->featured_image ?? 'https://dummyimage.com/16:9x720&text=No+Image' }}" alt="image">
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-4 gap-8">
                @foreach ($posts->take(4) as $post)
                    <x-post-card :post="$post" />
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-24">
        <div class="container">
            <h2 class="text-primary mb-16">Latest articles</h2>
            <div class="grid grid-cols-4 gap-x-8 gap-y-16">
                @foreach ($posts->take(16) as $post)
                    <x-post-card :post="$post" />
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.base-layout>