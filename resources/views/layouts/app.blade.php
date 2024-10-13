<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/topo.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/edit.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/show.css') }}">
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
