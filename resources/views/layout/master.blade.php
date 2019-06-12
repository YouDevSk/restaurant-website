<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'PROTOTYPE')</title>
    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="/js/uikit/uikit.js"></script>
    {{-- CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layout.navbar')
    @if (substr($view_name, 6) === 'index')
        @yield('content')
    @else
    <main class="uk-container uk-container-large">
        <div class="uk-padding-small">
            <div class="uk-padding-large uk-padding-remove-horizontal uk-text-center">
                @yield('content')
            </div>
        </div>
    </main>
    @endif
    @include('layout.footer')
    <script src="/js/custom/index.js"></script>
</body>
</html>