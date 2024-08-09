<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />


    <title>{{ $title ?? 'Site' }}</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/unsemantic/1.2.3/unsemantic-grid-responsive.min.css">

    @vite(['resources/css/site/site.scss'], 'assets')

</head>

<body>
    <div class="container padding-top-3 padding-bottom-3">
        {{ $slot }}
    </div>

    @vite(['resources/js/site/site.js'], 'assets')

</body>

</html>
