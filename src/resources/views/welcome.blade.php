<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/reset.css">
        <link id="id-to-link" rel="stylesheet" href="/themes/aura-light-green/theme.css">
        <title>Laravel</title>
        @vite(['resources/ts/app.ts'])
    </head>
    <body>
        <div id="app" />
    </body>
</html>
