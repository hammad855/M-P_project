<html lang="en">
    @include('careers_admin.includes.head')
    <body>
        <div id="wrapper">
            @include('careers_admin.includes.header')
            @include('careers_admin.includes.sidebar')
            <div id="page-wrapper">
                <!-- Content Wrapper. Contains page content -->
                @yield('content')
                <!-- /.content-wrapper -->
                @include('careers_admin.includes.footer')
            </div>
        </div>
        @include('careers_admin.includes.scripts')
    </body>

</html>