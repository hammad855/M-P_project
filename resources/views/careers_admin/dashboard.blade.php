<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.ico">
        <title>M&P | Supper Admin</title>
        <link href="{{ asset("careers_assets/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/animate.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/style.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/colors/blue.css") }}" id="theme" rel="stylesheet">
        <link href="{{ asset("careers_assets/plugins/bower_components/morrisjs/morris.css") }}" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            @include("careers_admin.includes.header")
          
            @include("careers_admin.includes.sidebar")


            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Dashboard</h4> 
                        </div>

                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>

                    <!-- BODY START HERE -->
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-xs-12">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">Open Jobs</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">75</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">New Appleid</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash2"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7581</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">Extra Appleid</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash3"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">1500</span><span class="text-info">+</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box">
                                <h3 class="box-title">Monthly Report
                                  <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                    <select class="form-control pull-right row b-none">
                                      <option>March 2016</option>
                                      <option>March 2016</option>
                                      <option>May 2016</option>
                                      <option>June 2016</option>
                                      <option>July 2016</option>
                                    </select>
                                  </div>
                                </h3>
                                <div class="row sales-report">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h2>March 2016</h2>
                                        <p>REPORT</p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 ">
                                        <h1 class="text-right text-success m-t-20">7</h1> </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Position</th>
                                                <th>STATUS</th>
                                                <th>DATE</th>
                                                <th>Department</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="txt-oflo">Sale Executive</td>
                                                <td><span class="label label-default label-rounded" style="color: #000;">Keep For Future</span> </td>
                                                <td class="txt-oflo">March 18</td>
                                                <td><span class="text-info">Sales</span></td>
                                            </tr>
                                            <tr>
                                                <td class="txt-oflo">IT Deparat Manager</td>
                                                <td><span class="label label-info label-rounded">Interview</span></td>
                                                <td class="txt-oflo">March 19</td>
                                                <td><span class="text-info">IT</span></td>
                                            </tr>
                                            <tr>
                                                <td class="txt-oflo">HR Manager</td>
                                                <td><span class="label label-success label-rounded">Hired</span></td>
                                                <td class="txt-oflo">March 20</td>
                                                <td><span class="text-success">HR</span></td>
                                            </tr>
                                            <tr>
                                                <td class="txt-oflo">FLoor Support</td>
                                                <td><span class="label label-warning label-rounded">Selection</span></td>
                                                <td class="txt-oflo">March 21</td>
                                                <td><span class="text-success">Admin</span></td>
                                            </tr>
                                            <tr>
                                                <td class="txt-oflo">IT Support</td>
                                                <td><span class="label label-success label-rounded">Hired</span></td>
                                                <td class="txt-oflo">March 22</td>
                                                <td><span class="text-success">IT</span></td>
                                            </tr>
                                            <tr>
                                                <td class="txt-oflo">Customer Support</td>
                                                <td><span class="label label-primary label-rounded">Other Depart</span> </td>
                                                <td class="txt-oflo">March 23</td>
                                                <td><span class="text-success">Sales</span></td>
                                            </tr>
                                            <tr>
                                                <td class="txt-oflo">Social Media</td>
                                                <td><span class="label label-danger label-rounded">Rejecteds</span></td>
                                                <td class="txt-oflo">March 22</td>
                                                <td><span class="text-danger">Marketing</span></td>
                                            </tr>
                                        </tbody>
                                    </table> <a href="#">Check all the details</a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="white-box">
                                <h3 class="box-title  pb-5">Opens Jobs</h3>
                                <ul class="feeds">
                                    <li>
                                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> Job Tittle <span class="text-muted">1 Hours Ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> Job Tittle <span class="text-muted">8 Hours Ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> Job Tittle <span class="text-muted">1 Day Ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> Job Tittle <span class="text-muted">2 Day 35 Minutes Ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> Job Tittle <span class="text-muted">1 Month 5 Days Ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> Job Tittle <span class="text-muted">1 Month 2 Weeks Ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> Job Tittle <span class="text-muted">3 Months Ago</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="white-box">
                                <h3 class="box-title">Recent Activity</h3>
                                <div class="comment-center">
                                    <div class="comment-body">
                                        <div class="user-img"> <img src="../plugins/images/users/1.jpg" alt="user" class="img-circle"></div>
                                        <div class="mail-contnet">
                                            <h5>Ali Ali</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">March 14, 2016</span></div>
                                    </div>
                                    <div class="comment-body">
                                        <div class="user-img"> <img src="../plugins/images/users/6.jpg" alt="user" class="img-circle"> </div>
                                        <div class="mail-contnet">
                                            <h5>Alia </h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. </span><span class="label label-rounded label-danger">REJECTED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">March 14, 2016</span></div>
                                    </div>
                                    <div class="comment-body b-none">
                                        <div class="user-img"> <img src="../plugins/images/users/5.jpg" alt="user" class="img-circle"></div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span> <a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">March 14, 2016</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="white-box">
                                <ul class="list-inline text-center m-t-40">
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: rgb(175, 186, 205);"></i>Open Jobs</h5> </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: rgb(13, 219, 228);"></i>New Employee</h5> </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: rgb(250, 207, 195);"></i>Leave Employee</h5> </li>
                                </ul>
                                <div id="morris-area-chart" style="height: 380px;"></div>
                            </div>
                                
                        </div>
                    </div>
                    <!-- BODY END HERE -->

                </div>

                @include("careers_admin.includes.footer")
            </div>
        </div>


        <script src="{{ asset("careers_assets/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
        <script src="{{ asset("careers_assets/bootstrap/dist/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js") }}"></script>
        <script src="{{ asset("careers_assets/js/jquery.slimscroll.js") }}"></script>
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
    </body>

</html>