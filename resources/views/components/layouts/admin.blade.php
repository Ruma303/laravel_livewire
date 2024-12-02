<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
</head>

<body class="h-screen min-w-sceen">
    <div class="flex flex-raw gap-4 h-screen min-w-full">
        <livewire:aside :title="$title" />
        <main class="p-4 flex flex-col items-center w-full gap-4 min-h-screen">
            {{ $slot }}
        </main>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>