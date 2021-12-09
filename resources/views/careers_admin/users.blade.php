<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="{{ asset("careers_assets/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/plugins/bower_components/datatables/jquery.dataTables.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
        <!-- Menu CSS -->
        <link href="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css") }}" rel="stylesheet">
        <!-- animation CSS -->
        <link href="{{ asset("careers_assets/css/animate.css") }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset("careers_assets/css/style.css") }}" rel="stylesheet">
        <!-- color CSS -->
        <link href="{{ asset("careers_assets/css/colors/blue.css") }}" id="theme" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            @include("careers_admin.includes.header")
          
            @include("careers_admin.includes.sidebar")
          
            <div id="page-wrapper">
               <div id="users-root"></div>

                @include("careers_admin.includes.footer")
            </div>
        </div>


        <!-- jQuery -->
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset("careers_assets/bootstrap/dist/js/bootstrap.min.js") }}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js") }}"></script>
        <!--slimscroll JavaScript -->
        <script src="{{ asset("careers_assets/js/jquery.slimscroll.js") }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset("careers_assets/js/waves.js") }}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset("careers_assets/js/custom.min.js") }}"></script>
        <script src="{{ asset("careers_assets//plugins/bower_components/datatables/jquery.dataTables.min.js") }}"></script>
        <!-- start - This is for export functionality only -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script async src="{{ asset("js/hr/index.js") }}"></script>
        <!--Style Switcher -->
        {{-- <script src="careers_assets//plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script> --}}

        <!-- end - This is for export functionality only -->
        <script>
            $('#example23').DataTable({
                dom: 'Bfrtip'
                , buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
            });
        </script>
    </body>

</html>