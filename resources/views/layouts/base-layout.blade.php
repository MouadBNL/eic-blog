<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased flex flex-col min-h-screen">

        <header class="bg-dark text-light">
            <div class="container flex items-center justify-between py-4">
                <a href="{{ route('home') }}">
                    <h1 class="text-2xl font-extrabold">EIC Blog</h1>
                </a>

                <nav>
                    <ul class="flex space-x-2">
                        <li><a href="/tag/blog" class="px-6 py-2 transition bg-white bg-opacity-0 hover:bg-opacity-10">Blog</a></li>
                        <li><a href="/tag/eic-talk" class="px-6 py-2 transition bg-white bg-opacity-0 hover:bg-opacity-10">EIC Talks</a></li>
                        <li><a href="/tag/project" class="px-6 py-2 transition bg-white bg-opacity-0 hover:bg-opacity-10">Projects</a></li>
                        {{-- <li><a href="#" class="px-6 py-2 transition bg-white bg-opacity-0 hover:bg-opacity-10">About the club</a></li> --}}
                    </ul>
                </nav>
            </div>
        </header>

        

        <main>
            {{ $slot }}
        </main>

        <footer class="bg-dark py-16 text-light mt-auto">
            <div class="container flex items-center justify-between mb-16">
                <div class="">
                    <h4 class="text-2xl font-medium mb-4">Follow EIC on</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 text-sm">
                        <a href="#" class="bg-white bg-opacity-10 p-2 flex space-x-4 items-center transition hover:bg-opacity-25">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7188 9C17.7188 4.18359 13.8164 0.28125 9 0.28125C4.18359 0.28125 0.28125 4.18359 0.28125 9C0.28125 13.3516 3.46957 16.9587 7.6377 17.6133V11.5204H5.42285V9H7.6377V7.07906C7.6377 4.8941 8.93848 3.68719 10.9308 3.68719C11.8849 3.68719 12.8827 3.85734 12.8827 3.85734V6.00187H11.783C10.7002 6.00187 10.3623 6.67406 10.3623 7.36348V9H12.7804L12.3936 11.5204H10.3623V17.6133C14.5304 16.9587 17.7188 13.3516 17.7188 9Z" fill="#FAFAFA"/>
                            </svg>
                            <span>Facebook</span>                                
                        </a>
                        <a href="#" class="bg-white bg-opacity-10 p-2 flex space-x-4 items-center transition hover:bg-opacity-25">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7188 9C17.7188 4.18359 13.8164 0.28125 9 0.28125C4.18359 0.28125 0.28125 4.18359 0.28125 9C0.28125 13.3516 3.46957 16.9587 7.6377 17.6133V11.5204H5.42285V9H7.6377V7.07906C7.6377 4.8941 8.93848 3.68719 10.9308 3.68719C11.8849 3.68719 12.8827 3.85734 12.8827 3.85734V6.00187H11.783C10.7002 6.00187 10.3623 6.67406 10.3623 7.36348V9H12.7804L12.3936 11.5204H10.3623V17.6133C14.5304 16.9587 17.7188 13.3516 17.7188 9Z" fill="#FAFAFA"/>
                            </svg>
                            <span>Facebook</span>                                
                        </a>
                        <a href="#" class="bg-white bg-opacity-10 p-2 flex space-x-4 items-center transition hover:bg-opacity-25">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7188 9C17.7188 4.18359 13.8164 0.28125 9 0.28125C4.18359 0.28125 0.28125 4.18359 0.28125 9C0.28125 13.3516 3.46957 16.9587 7.6377 17.6133V11.5204H5.42285V9H7.6377V7.07906C7.6377 4.8941 8.93848 3.68719 10.9308 3.68719C11.8849 3.68719 12.8827 3.85734 12.8827 3.85734V6.00187H11.783C10.7002 6.00187 10.3623 6.67406 10.3623 7.36348V9H12.7804L12.3936 11.5204H10.3623V17.6133C14.5304 16.9587 17.7188 13.3516 17.7188 9Z" fill="#FAFAFA"/>
                            </svg>
                            <span>Facebook</span>                                
                        </a>
                        <a href="#" class="bg-white bg-opacity-10 p-2 flex space-x-4 items-center transition hover:bg-opacity-25">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7188 9C17.7188 4.18359 13.8164 0.28125 9 0.28125C4.18359 0.28125 0.28125 4.18359 0.28125 9C0.28125 13.3516 3.46957 16.9587 7.6377 17.6133V11.5204H5.42285V9H7.6377V7.07906C7.6377 4.8941 8.93848 3.68719 10.9308 3.68719C11.8849 3.68719 12.8827 3.85734 12.8827 3.85734V6.00187H11.783C10.7002 6.00187 10.3623 6.67406 10.3623 7.36348V9H12.7804L12.3936 11.5204H10.3623V17.6133C14.5304 16.9587 17.7188 13.3516 17.7188 9Z" fill="#FAFAFA"/>
                            </svg>
                            <span>Facebook</span>                                
                        </a>
                    </div>
                </div>

                <div class="h-24 w-80 bg-white bg-opacity-20">

                </div>
            </div>

            <div class="container flex gap-8 sm:gap-0 flex-wrap items-center justify-between">
                <div class="flex space-x-4 text-sm">
                    <a href="#" class="hover:underline">Blog</a>
                    <a href="#" class="hover:underline">Blog</a>
                    <a href="#" class="hover:underline">Blog</a>
                    <a href="#" class="hover:underline">Blog</a>
                    <a href="#" class="hover:underline">Blog</a>
                </div>

                <div class="text-xs">
                    <span>made with ❤️ by Mouad Benali, © 2021 - 2022 EIC</span>
                </div>
            </div>
        </footer>

    </body>
</html>
