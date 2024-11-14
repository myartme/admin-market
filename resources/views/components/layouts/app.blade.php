<!doctype html>
<html class="h-full bg-white" lang={{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? "Laravel" }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

        {{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="h-full">
        {{ $slot }}
    </body>
</html>