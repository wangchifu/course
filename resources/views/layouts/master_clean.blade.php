<!doctype html>
<html>
<head>
    <title>
        @yield('title') | {{ env('APP_NAME') }}
    </title>
    @include('layouts.head')
    @yield('script')
</head>
<body>
@yield('content')
<br>
@include('layouts.foot_js')
</body>
</html>
