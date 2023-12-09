<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>


<body>
    <!-- Spinner Start -->
    @include('layouts.partials.spinner')
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('layouts.partials.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('layouts.partials.navbar')
    <!-- Navbar End -->


    <!-- Header Start -->
    <!-- @include('layouts.home.header') -->
    <!-- Header End -->

    @yield('content')
    <!-- Footer Start -->
    @include('layouts.partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('layouts.partials.foot')
</body>

</html>