<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.header')
</head>
<body>
    @include('includes.nav')
    <div class="container">
        @yield('content')
        @include('includes.footer')
    </div>
    <script src="js/app.js"></script>
    @yield('scripts-after')

</body>

</html>