<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Game List</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="font-sans">

        <div class="min-h-screen">
            <!-- Page Content -->
            <div class="h-screen w-full flex overflow-hidden select-none" x-data="{menu:false}">
                <x-menu></x-menu>

                <main class="p-5 px-2 md:px-10 flex-1 bg-gray-100 transition duration-500 ease-in-out overflow-y-auto">
                    <div class="mb-5 md:hidden cursor-pointer" @click="{menu = true}">
                        <i class="fa fa-bars fa-2x"></i>
                    </div>

                    <x-topbar>{{$title}}</x-topbar>

                    {{ $slot }}
                </main>
            </div>
        </div>

        {{-- Alertas --}}
        <x-alertas></x-alertas>
        @livewireScripts
    </body>
</html>
