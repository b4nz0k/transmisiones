<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('title')
        </title>
        <link href="/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="min-w-screen min-h-screen bg-gradient-to-r bg-gray-900 to-white bg-opacity-40 flex flex-col flex-wrap  items-center justify-center px-5 py-5">

            <main>
                @yield('contenido')
            </main>
            <footer class="mt-10 text-center p-5  text-gray-50 font-bold uppercase">
                <div class="p-2 rounded-lg bg-indigo-500 shadow-lg m-2" >
                    Charly's full transmission S.A de C.V - Todos los derechos reservdos {{ now()->year }}
                </div>
            </footer>
        </div>
    </body>
</html>
