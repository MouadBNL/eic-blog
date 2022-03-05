<x-layouts.base-layout>
    <section class="py-24 bg-dark text-white">
        <div class="container">
            <div class="pt-8 grid grid-cols-2 gap-x-8 mb-24">
                <div class="flex items-center">
                    <article>
                        <div class="flex space-x-2 mb-4">
                            <span class="block px-4 py-1 rounded-full transition bg-primary text-white bg-opacity-100 hover:bg-opacity-90">news</span>
                            <span class="block px-4 py-1 rounded-full transition bg-primary text-white bg-opacity-100 hover:bg-opacity-90">contest</span>
                            <span class="block px-4 py-1 rounded-full transition bg-primary text-white bg-opacity-100 hover:bg-opacity-90">competitive programming</span>
                            <span class="block px-4 py-1 rounded-full transition bg-primary text-white bg-opacity-100 hover:bg-opacity-90">ensak</span>
                        </div>
                        <h2>Managing Secrets in Laravel with AWS Parameter Store</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae non et in tristique aliquam. A eget euismod arcu et. Id ultricies ac sem sagittis. Amet sagittis, faucibus in ut mauris, ligula. Interdum non.
                        </p>
                    </article>
                </div>

                <div class="pl-24">
                    <div class="ratio-720 bg-gray-300">

                    </div>
                </div>
            </div>


            <div class="grid grid-cols-4 gap-8">
                @for ($i = 0; $i < 4; $i++)
                    <article>
                        <div class="ratio-720 bg-gray-300 mb-3"></div>
                        <div class="flex space-x-2 mb-3 text-sm">
                            <span class="block px-4 py-1 rounded-full transition bg-primary text-white bg-opacity-100 hover:bg-opacity-90">news</span>
                            <span class="block px-4 py-1 rounded-full transition bg-primary text-white bg-opacity-100 hover:bg-opacity-90">contest</span>
                            <span class="block px-4 py-1 opacity-70">December 1st, 2021</span>
                        </div>
                        <h3>Most popular IT certifications for 2022</h3>
                    </article>
                @endfor
            </div>
        </div>
    </section>


    <section class="py-24">
        <div class="container">
            <h2 class="text-primary mb-16">Latest articles</h2>
            <div class="grid grid-cols-4 gap-x-8 gap-y-16">
                @for ($i = 0; $i < 16; $i++)
                    <article>
                        <div class="ratio-720 bg-gray-300 mb-3"></div>
                        <div class="flex flex-wrap gap-2 mb-3 text-sm">
                            <span class="block px-4 py-1 rounded-full transition bg-primary text-white bg-opacity-100 hover:bg-opacity-90">news</span>
                            <span class="block px-4 py-1 rounded-full transition bg-primary text-white bg-opacity-100 hover:bg-opacity-90">contest</span>
                            <span class="block py-1 opacity-70">December 1st, 2021</span>
                        </div>
                        <h3>Most popular IT certifications for 2022</h3>
                    </article>
                @endfor
            </div>
        </div>
    </section>
</x-layouts.base-layout>