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
        <div id="appLayout">
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
        </div>
    </body>
</html>


