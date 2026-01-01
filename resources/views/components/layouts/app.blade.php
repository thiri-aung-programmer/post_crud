<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @vite('resources/css/app.css')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <title>{{ $title ?? 'Page Title' }}</title>
          @livewireStyles
       
    </head>
    <body class="bg-gray-100 text-gray-800 min-h-screen">
        <div class="container mx-auto px-4 py-6">
             {{ $slot }}
              @livewireScripts
        </div>
    </body>
</html>
