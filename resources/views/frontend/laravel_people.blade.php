@extends('frontend.master')

@section('title_and_meta')
    <title>Welcome To LaravelUK Community - Celebrating Top Laravel People</title>
    <meta name="title" content="Welcome To LaravelUK Community - Celebrating Top Laravek People" />
    <meta name="description" content="Welcome To LaravelUK Community - Celebrating Top Laravek People" />
    <meta name="og_title" content="Welcome To LaravelUK Community - Celebrating Top Laravek People" />
    <meta name="og_description" content="Welcome To LaravelUK Community - Celebrating Top Laravek People" />
@stop

@section('content')
    <header class="p-6 bg-blue">
        <div class="max-w-2xl mx-auto flex justify-between ">
            <a href="/" class="w-64">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1409.44 406.89">
                    <rect class="text-blue fill-current" x="13.32" y="13.32" width="380.26" height="380.26" rx="40.69" ry="40.69" transform="rotate(-5.36 203.613 203.508)" fill="#293452"/>
                    <path class="text-grey fill-current" d="M372.07 190.65c-1.13-1.28-10.89-13.43-18.73-23.19-8.23-10.22-16-19.89-18.52-22.94-6.49-7.81-11.84-8.73-17.89-7.72l-.7.11c-3.4.5-42.25 7-45.77 7.62-6 1-9.88 3.59-11.56 7.67-.88 2.11-1.8 6.41 1.8 11.44 1.8 2.52 16.51 23.37 25.86 36.63L205 219.81 129.21 93.13l-.73-1.1c-3.77-5.64-7-9.3-17.59-8.82-7.54.34-65.48 5.16-66.07 5.21-6.63.55-9.89 3.76-11.46 6.35-1 1.58-3.85 6.37.34 16.25 2.75 6.49 32.74 71.28 52.58 114.15C94.51 243 101 257 101.52 258.14c3 6.78 9.61 13.12 19.71 13.12a27.59 27.59 0 0 0 6.45-.8c9.89-2.38 41.29-10.55 62.74-16.16 14.25 25.75 30.63 55 34.38 60.24 5.08 7.09 10.19 9.19 15.26 9.19 3.7 0 7.38-1.12 11-2.22l.32-.09c7-2.14 103.56-36.91 107.19-38.4 3.29-1.36 8.28-3.41 9.89-8.76 1-3.45.3-7.06-2.18-10.73-1.81-2.68-17.94-24.35-33.56-45.27 12.38-3.29 30.45-8.11 33-8.8 6.19-1.68 8.45-5.24 9.25-7.94.63-2.13 1.1-6.37-2.9-10.87zM85 111l22-2 68.33 118-20.39 4.87-27 6.45c-10.34-21.68-48.47-100.2-60.93-125.77zm135.57 135.41l84.08-21.88c2.84 4 8.6 11.86 18.31 25.12l7.92 10.83-26.27 8.9c-38 12.88-53.11 18-58.93 20-3.81-6.28-15.5-26.38-25.11-42.97zm73.95-79.72c8.31-1.48 19-3.41 23.74-4.31 3 3.89 10.18 13 19.92 25.35l-24 5.93z" fill="#edebe4"/>
                    <path class="text-red fill-current" d="M367.91 192.61c-2.17-2.44-32.15-40-37.44-46.34s-7.85-5.21-11.11-4.74-41.18 6.84-45.59 7.59-7.18 2.51-4.47 6.3c2.41 3.37 27.35 38.73 32.84 46.52L203 225.69 124.14 93.86c-3.14-4.66-3.79-6.28-10.93-6s-61.86 4.87-65.76 5.2-8.17 2.06-4.27 11.26 66 143.1 67.76 147 6.24 10.22 16.78 7.69c10.8-2.6 48.26-12.37 68.73-17.73 10.81 19.58 32.87 59.31 37 65 5.45 7.6 9.19 6.34 17.55 3.81 6.53-2 102.15-36.36 106.45-38.13s7-3 4.06-7.35c-2.14-3.17-27.37-37-40.58-54.64 9.05-2.41 41.23-11 44.66-11.9 3.94-1.07 4.48-3.02 2.32-5.46zm-180.25 36.85c-1.19.26-56.72 13.55-59.68 14.23s-3 .34-3.3-.68-66-136.46-66.94-138.16-.87-3 0-3 52.44-4.61 54.27-4.71 1.63.29 2.3 1.44l74 127.78c1.3 2.17.53 2.85-.65 3.1zm156.57 29.35c.89 1.4 1.77 2.28-1 3.3s-94 31.79-95.76 32.55-3.17 1-5.45-2.28-31.95-54.65-31.95-54.65l96.68-25.15c2.41-.76 3.17-1.27 4.69 1.14s31.91 43.7 32.79 45.09zm6.2-68.64c-2.17.48-37.67 9.28-37.67 9.28l-29-39.83c-.81-1.15-1.49-2.3.54-2.57s35-6.24 36.52-6.58 2.77-.74 4.6 1.77 26.94 34.27 27.88 35.49-.7 1.97-2.87 2.44z" fill="#c1271f"/>
                    <path class="text-white fill-current" d="M470.16 278.12V126.5h32.15v125.07h61.5v26.55zM649.44 278.12l-6.12-15.77h-.83q-8 10.06-16.44 13.95t-22 3.89q-16.69 0-26.28-9.54t-9.6-27.17q0-18.45 12.91-27.22t38.94-9.7l20.12-.62v-5.08q0-17.62-18-17.63-13.9 0-32.67 8.4L579 170.27q20-10.49 44.38-10.48 23.34 0 35.78 10.17t12.44 30.9v77.26zm-9.34-53.72l-12.23.41q-13.8.42-20.54 5t-6.74 13.9q0 13.38 15.35 13.38 11 0 17.58-6.33t6.58-16.8zM752.57 160a51.12 51.12 0 0 1 10.68.93l-2.38 29.66a36.36 36.36 0 0 0-9.34-1q-15.13 0-23.59 7.77t-8.45 21.78v59h-31.63V162.18h24l4.66 19.49H718A43.63 43.63 0 0 1 732.61 166a36 36 0 0 1 19.96-6zM840.13 278.12L834 262.35h-.83q-8 10.06-16.44 13.95t-22 3.89q-16.69 0-26.29-9.54t-9.59-27.17q0-18.45 12.91-27.22t38.94-9.7l20.12-.62v-5.08q0-17.62-18-17.63-13.9 0-32.67 8.4l-10.47-21.36q20-10.49 44.38-10.48 23.34 0 35.78 10.17t12.44 30.9v77.26zm-9.33-53.72l-12.23.41q-13.8.42-20.54 5t-6.74 13.9q0 13.38 15.35 13.38 11 0 17.58-6.33t6.58-16.8zM904.26 278.12l-44.18-115.94h33.08l22.4 66.06A106.47 106.47 0 0 1 920 252h.83a89.19 89.19 0 0 1 4.66-23.74l22.3-66.06h33.08l-44.16 115.92zM1032.56 280.19q-28 0-43.76-15.45T973 221q0-29.14 14.57-45.06T1027.9 160q24.57 0 38.26 14t13.69 38.68V228h-74.77q.52 13.49 8 21.05t20.94 7.57a86.47 86.47 0 0 0 19.81-2.18 99.14 99.14 0 0 0 19.5-6.94V272a74.65 74.65 0 0 1-17.74 6.17 111.64 111.64 0 0 1-23.03 2.02zm-4.46-97.69q-10 0-15.76 6.38t-6.53 18.1h44.38q-.21-11.72-6.12-18.1t-15.97-6.38zM1122.84 278.12h-31.63V116.76h31.63zM1266 126.5v98.11q0 16.8-7.52 29.45a48.91 48.91 0 0 1-21.72 19.39q-14.2 6.75-33.6 6.74-29.25 0-45.42-15t-16.18-41V126.5h32v92.82q0 17.52 7.06 25.72t23.33 8.19q15.76 0 22.87-8.25t7.1-25.87V126.5zM1409.44 278.12h-36.5l-39.72-63.88-13.59 9.76v54.14h-32.14V126.5h32.14v69.38l12.66-17.88 41.06-51.54H1409l-52.89 67.1z"/>
                </svg>
            </a>
            <nav class="flex items-center">
                <a href="/" class="text-blue-lightest hover:text-white no-underline p-3">Home</a>
                <a href="/blog" class="text-blue-lightest hover:text-white no-underline p-3">Blog</a>
                <a href="/tutorials" class="text-blue-lightest hover:text-white no-underline p-3">Tutorials</a>
                <a href="/about-us" class="text-blue-lightest hover:text-white no-underline p-3">About Us</a>
                <a href="/laravel-people" class="text-blue-lightest hover:text-white no-underline p-3">Laravel People</a>
                <a href="/join-slack" class="text-grey bg-red hover:bg-red-dark no-underline rounded-full border border-red-lighter px-4 py-2 ml-2 shadow-lg">Join us on Slack</a>
            </nav>
        </div>
    </header>

    <article class="max-w-2xl mx-auto">
        <header class="p-8 text-center">
            <h1 class="tracking-tight text-5xl text-red">Laravel People</h1>
            <h2 class="text-grey-dark font-normal">(or LaraCelebs)</h2>
        </header>

        <section class="py-8 max-w-lg mx-auto text-lg leading-normal text-grey-darkest">
            <p>These wonderful folk contribute so much to the Laravel community.
                They have also been fantastically wonderful to make a commit to our website codebase during
                <a href="https://larahack.com">Larahack</a>.</p>
        </section>

        <section class="flex max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg border border-red">
            <figure class="w-2/3 ratio-3/4 flex-no-shink bg-cover bg-center" style="background-image: url('https://placeimg.com/640/480/people')">
                {{-- Add your profile pic --}}
            </figure>
            <section class="flex flex-col justify-between">
                {{-- Your name and a bit about you --}}
                <div class="p-4 text-lg leading-normal">
                    <h3 class="text-xl mb-2">A LaraCeleb was here</h3>
                    <p>I am a Laravel Celebrity! I am a sample post that will be
                        removed when the first Laravel Person commits.</p>
                </div>
                <div class="bg-red px-4 py-3 text-right">
                    <a href="https://twitter.com/laraCeleb" class="text-white no-underline hover:underline p-2">@twitterHandle</a>
                    <a href="https://example.com" class="text-white no-underline hover:underline p-2">https://example.com</a>
                </div>
            </section>
        </section>
    </article>

@stop