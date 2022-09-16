<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | DC Comics</title>
    {{-- IMPORT CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    {{-- HEADER --}}
    @include('includes.header')
    {{-- JUMBO --}}
    @include('includes.jumbo')

    <main>
        @yield('comics')
        @yield('shop')

    </main>


    {{-- FOOTER --}}
    @include('includes.footer')

    @include('includes.contacts')

</body>

</html>
