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
                            <h4 class="page-title">View A Jobs</h4> 
                        </div>

                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Dashboard</a></li>
                                <li class="active">View A Jobs</li>
                            </ol>
                        </div>
                    </div>

                    <!-- BODY START HERE -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Job Title</th>
                                                <th>City</th>
                                                <th>No. of Vicancy</th>
                                                <th>No. of Applyer</th>
                                                <th>No. of Hiring</th>
                                                <th>Opening Date</th>
                                                <th>Closing Date</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Job Title</th>
                                                <th>City</th>
                                                <th>No. of Vicancy</th>
                                                <th>No. of Applyer</th>
                                                <th>No. of Hiring</th>
                                                <th>Opening Date</th>
                                                <th>Closing Date</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($data as $job)
                                            <tr>
                                                <td><a href="javascript:void(0)">#26589</a></td>
                                                <td>{{$job->title}}</td>
                                                <td>{{$job->location_id}}</td>
                                                <td>{{$job->jobs}}</td>
                                                <td>{{count($job->apply)}}</td>
                                                <td>{{count($job->hired)}}</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2021</span> </td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Dec 31, 2021</span> </td>
                                                <td>
                                                    <div class="label label-table @if($job->status == 'open') label-success @else label-danger @endif">{{$job->status}}</div>
                                                </td>
                                                <td>
                                                    <a href="{{route('joblistedit',$job->id)}}"><button class="fcbtn btn btn-success btn-1f editjobbtn" 
                                                    id="{{$job->id}}" data-toggle="modal" data-target="#responsive-modal"><i class="fa fa-edit"></i> Eidt</button>
                                                    </a>
                                                    <a href="{{url('/joblistingdelete/'.$job->id)}}" onclick="return confirm('Are you sure you want to close this job ? ')" />
                                                        <button class="fcbtn btn btn-danger btn-1f"><i class="fa fa-minus-square"></i> Close</button>
                                                    </a>
                                                </td> 
                                            </tr> 
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Responsive Table </h3>
                                <p class="text-muted m-b-20">Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive </code></p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Job Title</th>
                                                <th>City</th>
                                                <th>No. of Vicancy</th>
                                                <th>No. of Applyer</th>
                                                <th>No. of Hiring</th>
                                                <th>Opening Date</th>
                                                <th>Closing Date</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0)">#26589</a></td>
                                                <td>Manager Of IT</td>
                                                <td>Karachi</td>
                                                <td>01</td>
                                                <td>100</td>
                                                <td>00</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2021</span> </td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Dec 31, 2021</span> </td>
                                                <td>
                                                    <div class="label label-table label-success">Paid</div>
                                                </td>
                                                <td>$45.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- BODY END HERE -->

                </div>


                <!-- <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Edit Job</h4> </div>
                                        <div class="modal-body">
                                            <form id="editjobform">
                                            <input type="hidden" name="record_id" id="record_id" value="" />
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Title</label>
                                                <input type="text" name="title" class="form-control" id="title">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Location</label>
                                                <input type="text" name="location" class="form-control" id="location">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">No of Vicancy</label>
                                                <input type="text" name="jobs" class="form-control" id="jobs">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Status</label>
                                                <select class="form-control" name="status" id="status">
                                                    <option>Open</option>
                                                    <option>Close</option>
                                                </select>
                                                <!-- <input type="text" name="department_code" class="form-control" id="recipient-name"> -->
                                            </div>
                                            </form>
                                            
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" id="closemodal">Close</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light departmentSubmit">Edit Job</button>
                                    </div>
                                </div>
                            </div>
                        </div>  -->


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
    <script src="{{ asset("careers_assets/plugins/bower_components/datatables/jquery.dataTables.min.js") }}"></script>
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
        $(document).ready(function () {


            // $('.editjobbtn').on('click',function(){
            //     var id = $(this).attr('id')
            //     $('#record_id').val(id)
            //     $.ajax({
            //         url:"{{url('/joblistingedit')}}",
            //         type:'POST',
            //         data: {"_token": "{{ csrf_token() }}","id": id},
            //         success:function(res){
            //             $('#title').val(res.data[0].title);
            //             $('#location').val(res.data[0].location_id);
            //             $('#jobs').val(res.data[0].jobs);
            //             $('#status option[value="'+res.data[0].status+'"]').attr('selected','true');

            //             // $('#status').val(res.data[0].status);
                        
            //         }
            //     })
                
            // });

            // $('#responsive-modal').on('hidden.bs.modal', function () {
            //     $('#responsive-modal form')[0].reset();
            // });

            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    </script>
    

    </body>

</html>