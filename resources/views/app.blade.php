<html>
<head>
    <meta charset="UTF-8"/>
    <title>@yield('title', 'Home Page')</title>
</head>
<body>
@include('header')
@yield('contents')
@include('footer')
</body>
</html>
