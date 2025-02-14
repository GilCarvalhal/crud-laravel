<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/topo.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>

<body>
    @include('layouts.topo')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')
    @yield('scripts')
</body>

</html>
