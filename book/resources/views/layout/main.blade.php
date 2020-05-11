<!doctype html>
<html lang="en">
<head>
@include('layout.head')
</head>
<body>
<div id="app">
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
</div>

</body>
</html>
