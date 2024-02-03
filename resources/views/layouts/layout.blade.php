<!DOCTYPE html>
<html lang="pt-Ao">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ? $title . ' - Ghetto Music': 'Ghetto Music' }}</title>

        <!-- Fonts -->

        <!-- Styles -->

        <!-- Scripts -->

    </head>
    <body>
        <div class="appLayout">
           <aside id="sidebar">
              SidBar
           </aside>
           <div id="leftLayout">
                <header>
                   header
                </header>
                <div id="centerLayout">
                    <main id="main">
                        {{ $slot }}
                    </main>
                    <footer class="global-footer">
                    footer
                    </footer>
                </div>
           </div>
        </div>
    </body>
</html>


