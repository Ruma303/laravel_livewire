<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Livewire' }}</title>
</head>

<body class="flex flex-raw gap-4 h-screen">
    <livewire:aside :title="$title" />
    <main class="p-4 flex flex-col items-center gap-4">
        {{ $slot }}
    </main>
</body>

</html>