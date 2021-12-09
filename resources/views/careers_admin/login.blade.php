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
        <link href="{{asset("careers_assets/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
        <link href="{{asset("careers_assets/css/animate.css")}}" rel="stylesheet">
        <link href="{{asset("careers_assets/css/style.css")}}" rel="stylesheet">
        <link href="{{asset("careers_assets/css/colors/blue.css")}}" id="theme"  rel="stylesheet">
        <style>
          .btn-info{
            background-color: #f26522;
            border-color: #f26522;
            transition: all 0.4s ease-in-out;
          }

          .btn-info:hover{
            background-color: #77787b;
            border-color: #77787b;
          }
        </style>
    </head>

    <body>
        <section id="wrapper" class="login-register">
          <div class="login-box login-sidebar">
            <div class="white-box">
              <form class="form-horizontal form-material" id="loginform" action="{{ url('/loginprocess') }}" method="post">
                @csrf
                <a href="javascript:void(0)" class="text-center db loging-mylogo">
                    <!-- <img src="../plugins/images/eliteadmin-logo-dark.png" alt="Home" /><br/> -->
                    <img src="{{ asset("careers_assets/plugins/images/eliteadmin-text-dark.png") }}" alt="Home" />
                </a>  
                
                <div class="form-group m-t-40">
                  <div class="col-xs-12">
                    <input class="form-control" type="text" required="" placeholder="Username" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-12">
                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="checkbox checkbox-primary pull-left p-t-0">
                      <input id="checkbox-signup" type="checkbox">
                      <label for="checkbox-signup"> Remember me </label>
                    </div>
                    <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                </div>
                <div class="form-group text-center m-t-20">
                  <div class="col-xs-12">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                  </div>
                </div>
              </form>
              <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                  <div class="col-xs-12">
                    <h3>Recover Password</h3>
                    <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                  </div>
                </div>
                <div class="form-group ">
                  <div class="col-xs-12">
                    <input class="form-control" type="text" required="" placeholder="Email">
                  </div>
                </div>
                <div class="form-group text-center m-t-20">
                  <div class="col-xs-12">
                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>


        <script src="{{asset("careers_assets//plugins/bower_components/jquery/dist/jquery.min.js")}}"></script>
        <script src="{{asset("careers_assets/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <script src="{{asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js")}}"></script>
        <script src="{{asset("careers_assets/js/jquery.slimscroll.js")}}"></script>
        <script src="{{ asset("careers_assets/js/waves.js") }}"></script>
        <script src="{{ asset("careers_assets/js/custom.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js") }}"></script>
    </body>

</html>