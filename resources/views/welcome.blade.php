<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Basics</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <body class="p-4">
        {{-- <livewire:hello-world /> --}}
        {{-- @livewire('hello-world') --}}

        {{-- <livewire:headings.home /> --}}

        <livewire:headings.user />

        {{-- <livewire:counter /> --}}

        <livewire:todos />
    </body>
</html>
