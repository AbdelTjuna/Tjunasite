<html>

<head>
    @include ('components.head')
</head>

<body>
    @include ('components.header')

    @yield ('content')

    @include('components.vendors')
</body>

</html>