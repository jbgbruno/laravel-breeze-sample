<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">


        {{-- <title>{{ $page->title }}</title> --}}

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="{{ mix('js/app.js') }}"></script>
        @livewireStyles
    </head>
    <body>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('layouts.sidebar')

            <div class="flex-1 flex flex-col overflow-hidden">
                @include('layouts.header')

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                        @yield('body')
                    </div>
                     <div class="flex justify-between items-center py-4 px-6 bg-white filter drop-shadow-lg">
                <p>© 2021 Bruno Gomes</p>
                </div>
                </main>

            </div>
        </div>
        @livewireScripts
    </body>
</html>
