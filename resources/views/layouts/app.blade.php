<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>@yield('title')</title>
    @include('includes.style')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('includes.navbar')
                @yield('content')
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('includes.footer')
    @include('includes.script')
</body>

</html>
