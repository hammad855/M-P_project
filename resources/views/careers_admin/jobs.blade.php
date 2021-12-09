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
        <!-- Editable CSS -->
        <link type="text/css" rel="stylesheet" href="{{ asset("careers_assets/plugins/bower_components/jsgrid/dist/jsgrid.min.css") }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset("careers_assets/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css") }}" />
        <link href="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/plugins/bower_components/morrisjs/morris.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/animate.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/style.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/colors/blue.css") }}" id="theme" rel="stylesheet">
        <!-- Footable CSS -->
        <link href="{{ asset("careers_assets/plugins/bower_components/footable/css/footable.core.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css") }}" rel="stylesheet" />

        <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div id="wrapper">
            
        @include("careers_admin.includes.header")
          
          @include("careers_admin.includes.sidebar")

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Users Applied</h4> 
                        </div>

                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Dashboard</a></li>
                                <li class="active">Users Applied</li>
                            </ol>
                        </div>
                    </div>

                    <!-- BODY START HERE -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box myClass46">
                                <h3 class="box-title m-b-0">Users Applied Details</h3>

                                <table id="demo-foo-row-toggler" class="table Table_ID toggle-circle table-hover jsgrid ">
                                    <thead>
                                        <tr>
                                           <th> Name </th>
                                            <th data-hide="all"> Gender </th>
                                            <th data-hide="all"> CNIC# </th>
                                           <th> Email </th>
                                           <th > Contact# </th>
                                           <th> Job Title</th>
                                            <th data-hide="all"> Current Address </th>
                                           <th> City </th>
                                            <th data-hide="all"> Province </th>
                                            <th data-hide="all"> Country </th>
                                           <th> Total Experience </th>
                                            <th data-hide="all"> Salary Expectation </th>
                                            <th data-hide="all"> Last Designation </th>
                                            <th data-hide="all"> Last Company Name</th>
                                            <th data-hide="all"> Last Job Joing Date</th>
                                            <th data-hide="all"> Last Job Leaving Date </th>
                                            <th data-hide="all"> Salary </th>
                                            <th data-hide="all"> Benefits </th>
                                            <th data-hide="all"> Name of Institute </th>
                                            <th data-hide="all"> Degree </th>
                                            <th data-hide="all"> Year of start </th>
                                            <th data-hide="all"> Year of completion </th>
                                            <th data-hide="all"> CGPA</th>
                                            <th data-hide="all"> Province </th>
                                            <th data-hide="all"> Country </th>
                                            <th data-hide="all"> Name of Institute </th>
                                            <th> Status </th>
                                            <th> CV </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($applications as $key => $app)
                                        <tr>
                                            <td> {{$app->name}} </td>
                                            <td> {{$app->gender}} </td>
                                            <td> {{$app->phone}} </td>
                                            <td> {{$app->email}} </td>
                                            <td> <p>{{$app->phone}}</p><p>{{$app->mobile}}</p><p>{{$app->contact}}</p></td>
                                            <td>{{$app->job_title}}</td>
                                            <td> {{$app->address}} </td>
                                            <td> {{$app->city}} </td>
                                            <td> {{$app->province}} </td>
                                            <td> {{$app->country}} </td>
                                            <td> {{$app->experience}} </td>
                                            <td> {{$app->salary_expectation}} </td>
                                            <td> Rider </td>
                                            <td> TCS </td>
                                            <td> {{$app->joining}}</td>
                                            <td> {{$app->leaving}} </td>
                                            <td> {{$app->old_salary}} </td>
                                            <td> {{$app->benefits}} </td>
                                            <td> {{$app->institute}} </td>
                                            <td> {{$app->degree}} </td>
                                            <td> {{$app->year_start}} </td>
                                            <td> {{$app->year_completion}} </td>
                                            <td> {{$app->cgpa}}</td>
                                            <td> {{$app->qualification_province}} </td>
                                            <td> {{$app->qualification_country}} </td>
                                            <td> NaNa </td>
                                            <td> <!-- Default unchecked -->

 <select name="status" class="statusbox" id="{{$app->id}}">
    <option @if($app->status == "pending") selected @endif>Pending</option>
    <optgroup label="Shortlisted">
        <option value="interview" @if($app->status == "interview") selected @endif>Interview</option>
        <option value="selection" @if($app->status == "selection") selected @endif>Selection</option>
        <option value="hired" @if($app->status == "hired") selected @endif>Hired</option>
    </optgroup>
    <optgroup label="Not Shortlisted">
        <option value="rejected" @if($app->status == "rejected") selected @endif>Rejected</option>
        <option value="future" @if($app->status == "future") selected @endif>Kept the future reference</option>
        <option value="others" @if($app->status == "others") selected @endif>Suitable for others</option>
    </optgroup>
</select>


 </td>

                                            <input type="hidden" id="usercv" value="{{$app->cv}}" />
                                            <td><a href="{{ url('/downloadcv',$app->cv) }}" id="downloadcv"><button class="down-cv">Download cv</button> </a></td>
                                            <!-- <td></td> -->
                                        </tr>
                                        @endforeach

                                        
                                    </tbody>
                                </table>
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


        <script src="{{ asset("careers_assets/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
        <script src="{{ asset("careers_assets/bootstrap/dist/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js") }}"></script>
        <script src="{{ asset("careers_assetsjs/jquery.slimscroll.js") }}"></script>
        <script src="{{ asset("careers_assets/js/waves.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/skycons/skycons.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/counterup/jquery.counterup.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/raphael/raphael-min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/morrisjs/morris.js") }}"></script>
        <script src="{{ asset("careers_assets/js/custom.min.js") }}"></script>
        <script src="{{ asset("careers_assets/js/dashboard4.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js") }}"></script>
        <!-- Editable -->
        <script src="{{ asset("careers_assets/plugins/bower_components/jsgrid/db.js") }}"></script>
        <script type="text/javascript" src="{{ asset("careers_assets/plugins/bower_components/jsgrid/dist/jsgrid.min.js") }}"></script>
        <script src="{{ asset("careers_assets/js/jsgrid-init.js") }}"></script>

        <!-- Footable -->
       <script src="{{ asset("careers_assets/plugins/bower_components/footable/js/footable.all.min.js") }}"></script>
       <script src="{{ asset("careers_assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js") }}" type="text/javascript"></script>
       <!--FooTable init-->
       <script src="{{ asset("careers_assets/js/footable-init.js") }}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset("careers_assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
    <script src="{{ asset("careers_assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js") }}"></script>
    <script src="{{ asset("careers_assets/plugins/bower_components/toast-master/js/jquery.toast.js") }}"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function () {
            $.toast({
                heading: 'Welcome to Elite admin'
                , text: 'Use the predefined ones, or specify a custom position object.'
                , position: 'top-right'
                , loaderBg: '#ff6849'
                , icon: 'info'
                , hideAfter: 3500
                , stack: 6
            })
        });
    </script>  -->
    <!--Style Switcher -->
    <script src="{{ asset("careers_assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js") }}"></script>
    <script src="{{ asset("careers_assets/plugins/bower_components/sweetalert/sweetalert.min.js") }}"></script>
    <script src="{{ asset("careers_assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js") }}"></script>
    <script src="{{ asset("careers_assets/plugins/bower_components/jsgrid/db.js") }}"></script>
    <script type="text/javascript" src="{{ asset("careers_assets/plugins/bower_components/jsgrid/dist/jsgrid.min.js") }}"></script>
    <script src="{{ asset("careers_assets/js/jsgrid-init.js") }}"></script>

    <script>



        $('.myclass92').click(function(){
        this.removeClass('footable-detail-show');
    });


    $('.statusbox').change(function(){
        var application_id = $(this).attr('id');
        var status = $(this).val();
        $.ajax({
            url:"{{url('/changeapplicationstatus')}}",
            type:"POST",
            data:{"_token": "{{ csrf_token() }}","app_id":application_id,"status":status},
            success:function(res){
            //    console.log(res);
            }
        });
    });

    // $('#downloadcv').click(function(){
    //     var cv = $('#usercv').val();
    //     $.ajax({
    //         url:"{{url('/downloadcv')}}",
    //         type:"POST",
    //         data:{"_token": "{{ csrf_token() }}","cv":cv},
    //         success:function(res){
    //             var blob = new Blob([res]);
    //             var link = document.createElement('a');
    //             link.href = window.URL.createObjectURL(blob);
    //             link.download = "Sample.pdf";
    //             link.click();
    //         }
    //     })
    //     // console.log(cv);
    // })

    </script>


<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>

$(document).ready( function () {
    $('.Table_ID').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false
    });
});


</script>

    </body>

</html>