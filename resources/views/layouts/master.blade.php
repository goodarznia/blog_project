<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="{{ @mix('css/app.css') }}" rel="stylesheet">

</head>

<body>

@include('layouts.navbar')

<main role="main">
    @yield('content')
</main>
@include('layouts.footer')
</body>
</html>
