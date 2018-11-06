<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Messagerie pour etablissements scolaires">
    <meta name="author" content="Daniel Rubango">
    <title>SchoolMessenger - @yield('title', 'Acceuil')</title>

    <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <!-- Sidenav -->
    @include('layouts.partials.sidebar_nav')

    <!-- Main content -->
    <div class="main-content">

        <!-- Top navbar -->
        @include('layouts.partials.nav')

        <!-- Header -->
        @include('layouts.partials.header')

        <!-- Page content -->
        <div class="container-fluid mt--4 mt-md--7">
            @yield('content')

            <!-- Footer -->
            <footer class="footer">
                @include('layouts.partials.footer')
            </footer>
        </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Argon JS -->
    <script src="/assets/js/argon.js?v=1.0.0"></script>
</body>

</html>
