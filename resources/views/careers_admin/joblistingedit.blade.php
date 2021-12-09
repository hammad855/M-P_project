<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("careers_assets/plugins/images/favicon.ico") }}">
        <title>M&P | Supper Admin</title>

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
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Edit Job</h4> 
                        </div>

                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Dashboard</a></li>
                                <li class="active">Edit Job</li>
                            </ol>
                        </div>
                    </div>

                    <!-- BODY START HERE -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <div class="editfrom">
                                    <form method="post" action="{{url('/joblistingupdate')}}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$job->id}}" />
                                        <!-- <input type="text" name="title" value="{{$job->title}}" /> -->
                                        
                                        <!-- <input type="text" name="location" value="{{$job->location_id}}" /> -->


                                        <div class="form-group">
                                            <label class="col-md-12">
                                                                    Job title 
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <div id="bloodhound">
                                                                        <!-- <input class="typeahead form-control" type="text" placeholder="Job Location">  -->
                                                                        <input type="text" name="title" value="{{$job->title}}" class="typeahead form-control" placeholder="Job title"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                        
                                              

                                        <div class="form-group">
                                            <label class="col-md-12">
                                                                    Job location 
                                                                    
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <div id="bloodhound">
                                                                        <!-- <input class="typeahead form-control" type="text" placeholder="Job Location">  -->
                                                                        <select class="form-control" name="location" id="location">
                                                                        <option selected="selected" disabled>Choose Location</option>
                                                                        @foreach($locations as $row)
                                                                        <option value='{{$row->Field1}}' @if($job->location_id == $row->Field1) selected @endif>{{$row->Field1}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                    

                                            <div class="form-group">
                                            <label class="col-md-12">
                                                                    No of vacancies 
                                                                     
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <div id="bloodhound">
                                                                        <input type="text" name="jobs" value="{{$job->jobs}}" class="typeahead form-control" placeholder="No of vacancies "/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <br /><br />

                                        
                                            <div class="form-group">
                                            <label class="col-md-12">
                                                                    Status 
                                                                     
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <div id="bloodhound">
                                                                     <select class="form-control" name="status" id="status">
                                                                        <option value='open' @if($job->status == "open") selected @endif)>Open</option>
                                                                        <option value='close' @if($job->status == "close") selected @endif>Close</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


<!--                                         
                                        <input type="text" name="jobs" value="{{$job->jobs}}" />
                                        <input type="text" name="status" value="{{$job->status}}" /> -->
                                        <input type="submit" value="submit" class="fcbtn btn btn-success btn-1f" />
                                        <a href="{{url('/hr-admin/joblisting')}}"><button  class="fcbtn btn btn-success btn-1f">Back</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>

                
                    </div>
                    <!-- BODY END HERE -->

                </div>


                                     

                <footer class="footer foss-logo text-center"> 
                    2021 © All rights reserved. Made Love by <a href="https://fossphorus.com/"> <img src="{{ asset("careers_assets/plugins/images/foss.png") }}" alt="">Fossphorus</a> 
                </footer>
            </div>
        </div>


        <!-- /#wrapper -->
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
    <!-- <script src="{{ asset("careers_assets/plugins/bower_components/datatables/jquery.dataTables.min.js") }}"></script> -->
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <!--Style Switcher -->
    <script src="{{ asset("careers_assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js") }}"></script>

    <!-- end - This is for export functionality only -->
    <script>
      

     
    </script>
    

    </body>

</html>