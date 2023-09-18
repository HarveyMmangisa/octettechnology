<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Default Title')</title>
    <!-- Other head elements -->
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- ... -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
