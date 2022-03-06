<x-layouts.base-layout>
    <section class="relative">
        <div class="bg-dark py-36">
            <div class="container text-light flex-wrap-reverse lg:flex-nowrap flex gap-8">
                <div class="w-full lg:w-7/12">
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach ($post->tags as $tag)
                            <x-tag :tag="$tag"/>
                        @endforeach
                        <span class="block py-1 opacity-70">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <a href="{{ route('posts.show', $post->slug) }}">
                        <h2 class="hover:underline">{{ $post->title }}</h2>
                    </a>
                </div>
                <div class="lg:pl-24 relative w-2/3 lg:w-5/12">
                    <div class=" lg:absolute inset-0">
                        <div class="ratio-720 bg-gray-300 relative overflow-hidden shadow-xl">
                            <img class="absolute inset-0 object-fill object-center" src="{{ $post->featured_image ?? 'https://dummyimage.com/16:9x720&text=No+Image' }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="grid grid-cols-2 gap-x-8">
                <div class="flex">
                    <article class="mt-16">
                        
                        @if($post->excerpt)
                            <p class="opacity-80 text-sm md:text-base">
                                {{ $post->excerpt }}
                            </p>
                        @endif
                    </article>
                </div>
    
                
            </div>
        </div>
    </section>

    <section class=" py-24">
        <div class="container">
            <div class="w-full lg:w-2/3 mx-auto">
                {!! $post->content !!}
            </div>
        </div>
    </section>
</x-layouts.base-layout>