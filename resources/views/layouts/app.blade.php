<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield("metas")

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield("scripts")

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield("links")

</head>

<body>
    <div id="app" class="h-100">
        @if(isset($__header) && isset($user))
        @include("components.header", ["profileImagePath" => $user->profile_image_path])
        <div id="app-content">
            @yield('app-content')
        </div>
        @else
        <div class="h-100">
            @yield('app-content')
        </div>
        @endif
    </div>
</body>

</html>
