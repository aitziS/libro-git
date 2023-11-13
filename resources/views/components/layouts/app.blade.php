<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="{{ $metaDescription ?? "Descripción por defecto" }}" />
        <title>{{ $titulo ?? 'Defecto' }}</title>
    </head>
    <body>
        <x-layouts.nav/>
        {{ $suma }}
        {{ $slot }}
    </body>
</html>