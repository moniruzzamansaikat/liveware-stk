<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />


    <title>{{ $title ?? 'Admin' }}</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/unsemantic/1.2.3/unsemantic-grid-responsive.min.css">


    @vite(['resources/css/admin/admin.scss'], 'assets')

</head>

<body>
    <nav>
        <ul>
            <li><a  href="/">Home</a></li>
            <li><a wire:navigate href="/about">About</a></li>
            <li><a wire:navigate href="/contact">Contact</a></li>
        </ul>
    </nav>

    {{ $slot }}

    @vite(['resources/js/admin/admin.js'], 'assets')

    <script>
        document.addEventListener("livewire:navigated", () => {
            console.log("Navigated");
            console.log(Livewire);
        });
    </script>

</body>

</html>
