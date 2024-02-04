<!DOCTYPE html>
<html lang="pt-Ao">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ? $title . ' - Ghetto Music': 'Ghetto Music' }}</title>
        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('assets/styles/css/global.css') }}" media="screen" rel="stylesheet" />

        <!-- Scripts -->

    </head>
    <body>
        <div id="appLayout" @if(request()->exists('search') && !empty(request('search'))) x-data="{ showModal: true }"   @else   x-data="{ showModal: false }"    @endif   >
           <x-app.sidebar />
           <div id="leftLayout">
                <livewire:components.navegation >
                <div id="centerLayout">
                    <main id="main">
                        {{ $slot }}
                    </main>
                    <x-app.footer-global />
                </div>
           </div>
           <livewire:components.search-container />
        </div>
    </body>
</html>


