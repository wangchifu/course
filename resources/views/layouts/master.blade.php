<!doctype html>
<html>
<head>
    <title>
        @yield('title') | {{ env('APP_NAME') }}
    </title>
    @include('layouts.head')
</head>
<body>
@include('layouts.nav',['bg'=>$bg])
@yield('content')
<br>
@include('layouts.foot_js')
@include('layouts.footer',['bg'=>$bg])
</body>
</html>
