<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!--Custom Css-->
    <link rel="stylesheet" href="/frontend/CSS/style.css">
    <link href="/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/frontend/CSS/bootstrap/css/bootstrap.min.css">
    <!--End Custom Css-->
</head>

<body>

    @include('layout.fe.top-nav')

    <main id="main">
        @yield('content')
    </main>

    @include('layout.fe.footer')

    <script src="/frontend/CSS/bootstrap.min.js"></script>
    <script src="/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="/frontend/CSS/js/main.js"></script>

</body>

</html>
