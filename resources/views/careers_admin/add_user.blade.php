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
        <link href="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css") }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset("careers_assets/plugins/bower_components/dropify/dist/css/dropify.min.css") }}">


        <link href="{{ asset("careers_assets/css/animate.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/style.css") }}" rel="stylesheet">
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
                            <h4 class="page-title">Add User</h4> 
                        </div>

                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Dashboard</a></li>
                                <li class="active">Add User</li>
                            </ol>
                        </div>
                    </div>

                    <!-- BODY START HERE -->
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="white-box">

                                
                                <div class="tab-content">
                                    <form class="form-horizontal form-material">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-12">User ID# Auto</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">User Name</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="User Name" class="form-control form-control-line" name="name"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" placeholder="demo@admin.com" class="form-control form-control-line" name="email" id="example-email"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" placeholder="Password" class="form-control form-control-line" name="password"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Confirm Password</label>
                                            <div class="col-md-12">
                                                <input type="password" placeholder="Confirm Password" class="form-control form-control-line" name="confirmPassword"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Role</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Role" class="form-control form-control-line" name="role"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Department</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Department" class="form-control form-control-line" name="department_id"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label class="col-md-12">Profile Update</label>
                                                <input type="file" id="input-file-now-custom-1" class="dropify" name="image" /> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="fcbtn btn btn-primary btn-outline btn-1f">Save</button>
                                            </div>                                            
                                        </div>
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
                <!-- <div id="users-root"></div> -->
            </div>
        </div>

        
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
        <script src="{{ asset("careers_assets/bootstrap/dist/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js") }}"></script>
        <script src="{{ asset("careers_assets/js/jquery.slimscroll.js") }}"></script>
        <script src="{{ asset("careers_assets/js/waves.js") }}"></script>
        <script src="{{ asset("careers_assets/js/custom.min.js") }}"></script>
        <script src="{{ asset("careers_assets/js/jasny-bootstrap.js") }}"></script>
    <!-- jQuery file upload -->
    <script src="{{ asset("careers_assets/plugins/bower_components/dropify/dist/js/dropify.min.js") }}"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();
            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez'
                    , replace: 'Glissez-déposez un fichier ou cliquez pour remplacer'
                    , remove: 'Supprimer'
                    , error: 'Désolé, le fichier trop volumineux'
                }
            });
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                }
                else {
                    drDestroy.init();
                }
            })
        });
    </script>
        <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>

</html>