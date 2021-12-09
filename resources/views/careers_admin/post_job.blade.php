<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="careers_assets/plugins/images/favicon.ico">
        <title>M&P | Supper Admin</title>
        <!-- Typehead CSS -->
        <link href="{{ asset("careers_assets/plugins/bower_components/typeahead.js-master/dist/typehead-min.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/plugins/bower_components/jquery-wizard-master/css/wizard.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/animate.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/style.css") }}" rel="stylesheet">
        <link href="{{ asset("careers_assets/css/colors/blue.css") }}" id="theme" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset("careers_assets/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css") }}" />

        <!-- page CSS -->
        <link href="{{ asset("careers_assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("careers_assets/plugins/bower_components/custom-select/custom-select.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("careers_assets/plugins/bower_components/switchery/dist/switchery.min.css") }}" rel="stylesheet" />
        <link href="{{ asset("careers_assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css") }}" rel="stylesheet" />
        <link href="{{ asset("careers_assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css") }}" rel="stylesheet" />
        <link href="{{ asset("careers_assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css") }}" rel="stylesheet" />
        <link href="{{ asset("careers_assets/plugins/bower_components/multiselect/css/multi-select.css") }}" rel="stylesheet" type="text/css" />
        <!--alerts CSS -->
        <link href="{{ asset("careers_assets/plugins/bower_components/sweetalert/sweetalert.css") }}" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="wrapper">
            @include("careers_admin.includes.header")
          
            @include("careers_admin.includes.sidebar")

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Post A Job</h4> 
                        </div>

                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Dashboard</a></li>
                                <li class="active">Post A Job</li>
                            </ol>
                        </div>
                    </div>

                    <!-- BODY START HERE -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">With Icon</h3>
                                <p class="text-muted m-b-30 font-13"> This is the Icon wizrd without validation.</p>
                                <div id="exampleBasic2" class="wizard">
                                    <ul class="wizard-steps" role="tablist">
                                        <li class="active" role="tab">
                                            <h4><span><i class="ti-user"></i></span>Job Infomation</h4> </li>
                                        <li role="tab">
                                            <h4><span><i class="ti-credit-card"></i></span>Job Details</h4> </li>
                                        <li role="tab">
                                            <h4><span><i class="ti-check"></i></span>Applicant Options</h4> </li>
                                    </ul>
                                    <form  id="jobpostform" class="form-horizontal">
                                    <div class="wizard-content">
                                        <div class="wizard-pane active" role="tabpanel">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="white-box">
                                                        <h3 class="box-title m-b-0">Find a great hire, fast</h3>
                                                        <p class="text-muted m-b-30 font-13"> Rated #1 in delivering quality hires </p>
                                                        <!-- <form  id="validation" class="form-horizontal " action=""> -->
                                                            <div class="form-group">
                                                                <label class="col-md-12">
                                                                    Job Title
                                                                </label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="title" placeholder="Job Title" id="title"> 
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-12">
                                                                    Number of Occupancies
                                                                </label>
                                                                <div class="col-md-12">
                                                                    <input type="number" class="form-control" name="occ" placeholder="Job Occupancies" id="occ"> 
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-12">
                                                                    Company 
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <div id="bloodhound">
                                                                        <input class="typeahead form-control" type="text" placeholder="mpmain" readonly> 
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-12">
                                                                    Job location 
                                                                    <span>
                                                                        <button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="right" title="" data-original-title="This job will be shown to job seekers searching for hybrid jobs in this location.">?</button>
                                                                    </span>  
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <div id="bloodhound">
                                                                        <!-- <input class="typeahead form-control" type="text" placeholder="Job Location">  -->
                                                                    
                                                                        <select class="form-control" name="location" id="location">
                                                                        <option selected="selected" disabled>Choose Location</option>
                                                                        @foreach($locations as $row)
                                                                        <option value='{{$row->Field1}}'>{{$row->Field1}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-12">
                                                                    Employment Type  
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <select class="form-control" name="type" id="type">
                                                                        <option disabled selected>Choose one…</option>
                                                                        <option value="fulltime">
                                                                            Full-time
                                                                        </option>
                                                                        <option value="parttime">
                                                                            Part-time
                                                                        </option>
                                                                        <option value="contract">
                                                                            Contract
                                                                        </option>
                                                                        <option value="temporary">
                                                                            Temporary
                                                                        </option>
                                                                        <option value="volunteer">
                                                                            Volunteer
                                                                        </option>
                                                                        <option value="internship">
                                                                            Internship
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label class="col-md-12">
                                                                    Deparment  
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <select class="form-control" name="department" id="department">
                                                                        <option disabled selected>Choose one…</option>
                                                                        @foreach($departments as $dep)
                                                                            <option value="{{$dep->id}}">
                                                                                {{$dep->department}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>


                                                        <!-- </form> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                        </div>

                                        <div class="wizard-pane active" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="white-box">
                                                        <h3 class="box-title m-b-0">Add a job description</h3>
                                                        <p class="text-muted m-b-30">Description</p>
                                                        <!-- <form method="post"> -->
                                                            <div class="form-group">
                                                                <textarea class="textarea_editor form-control" id="description" name="description" style="width: 100%;" rows="15" placeholder="Enter text careers_assets.">
                                                                    <p>The ideal candidate will be responsible for conceptualizing and executing clear, quality code to develop the best software. You will test your code, identify errors, and iterate to ensure quality code. You will also support our customers and partners by troubleshooting any of their software issues.&nbsp;</p><p>&nbsp;</p><p><strong>Responsibilities</strong></p><ul><li>Detect and troubleshoot software issues</li><li>Write clear quality code for software and applications and perform test reviews</li><li>Develop, implement, and test APIs</li><li>Provide input on software development projects</li></ul><p><br></p><p><strong>Qualifications</strong></p><ul><li>Comfort using programming languages and relational databases</li><li>Strong debugging and troubleshooting skills</li><li>3+ years' of development experience</li></ul><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>
                                                                </textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <h3 class="box-title">Add Skills</h3>
                                                                <p class="text-muted">Add skill keywords to make your job more visible to the right candidates (Select up to 10)</p>

                                                                <div class="tags-default mywidth-100">
                                                                    <input type="text" name="skills" id="skills" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="Add Skills" style="width:100%;" /> 
                                                                </div>
                                                            </div> 

                                                            <!-- <div class="form-group">
                                                                <label class="col-md-12">
                                                                    How did you hear about us?
                                                                </label>
                                                                <div class="col-md-12">
                                                                     <select class="form-control">
                                                                        <option disabled selected>Choose one…</option>
                                                                        <option value="STREAMING_AUDIO" data-test-hear-about-us-option="">
                                                                            Streaming Audio (Spotify/Pandora/iHeart/Deezer)
                                                                        </option>
                                                                        <option value="TV" data-test-hear-about-us-option="">
                                                                            TV
                                                                        </option>
                                                                        <option value="SIRIUSXM_SATELLITE_RADIO" data-test-hear-about-us-option="">
                                                                            SiriusXM Satellite Radio
                                                                        </option>
                                                                        <option value="MAIL" data-test-hear-about-us-option="">
                                                                            In the mail
                                                                        </option>
                                                                        <option value="ONLINE_AD" data-test-hear-about-us-option="">
                                                                            Online ad / Search engine
                                                                        </option>
                                                                        <option value="RADIO" data-test-hear-about-us-option="">
                                                                            Radio
                                                                        </option>
                                                                        <option value="PODCAST" data-test-hear-about-us-option="">
                                                                            Podcast
                                                                        </option>
                                                                        <option value="LNKD" data-test-hear-about-us-option="">
                                                                            Ad on M&P.com
                                                                        </option>
                                                                        <option value="OTHER" data-test-hear-about-us-option="">
                                                                            Other
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>  -->
                                                        <!-- </form> -->


                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>

                                            </div>
                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="white-box">
                                                        <h3 class="box-title m-b-0">How would you like to receive your applicants?</h3>
                                                        
                                                        <!-- <form method="post"> -->
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            Receive applicants by 
                                                                        </label>
                                                                        <div>
                                                                             <select class="form-control" id="rec" name="rec">
                                                                                <option disabled selected>Choose one…</option>
                                                                                <option value="email">
                                                                                    Email
                                                                                </option>
                                                                                <option value="external">
                                                                                    External Website
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <label>
                                                                            Email Address  
                                                                        </label>
                                                                        <div>
                                                                            <input class="typeahead form-control" type="email" placeholder="Email Address" name="email" id="email">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <h3 class="box-title m-b-0">Add screening questions</h3>
                                                                    <p>We recommend adding 3 or more questions. Applicants must answer each question.</p>

                                                                    <div class="expertise-question" style="display: none;">
                                                                        <div class="panel panel-inverse">
                                                                        <input type="hidden" name="question[]" value="How many years of work experience do you have using [Tool or Technology] ?" />
                                                                            <div class="panel-heading"> How many years of work experience do you have using [Tool or Technology] ?
                                                                            <span class="badge badge-success">Recommended</span>

                                                                                <div class="pull-right">
                                                                                    <a href="#" data-skillbtn="btn-expertise"><i class="ti-close"></i></a> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-4">
                                                                                            <label>
                                                                                                Tool or Technology:  
                                                                                            </label>
                                                                                            <div id="bloodhound">
                                                                                                <input class="typeahead form-control" type="text" placeholder="Tool or Technology:" name="answer[]"> 
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-5">

                                                                                        <label>
                                                                                                Ideal Answer:  
                                                                                            </label>
                                                                                            <div id="bloodhound">
                                                                                                <input class="typeahead form-control" type="text" placeholder="1" name="idealanswer[]"> 
                                                                                            </div>


                                                                                            <!-- <label class="control-label">Ideal Answer: </label>
                                                                                            <div class="row align-items-center">
                                                                                                <div class="col-xs-6">
                                                                                                    <input id="tch3" type="text" value="1" min="1" max="100" class="text-center" name="tch3" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">
                                                                                                </div>
                                                                                                <div class="col-xs-6 my-pt-3">
                                                                                                    <span>minimum</span>
                                                                                                </div>
                                                                                            </div> -->
                                                                                             
                                                                                        </div>

                                                                                        <div class="col-md-3">
                                                                                            <div class="checkbox checkbox-inverse my-pt-4">
                                                                                                <input id="checkbox6c" type="checkbox">
                                                                                                <label for="checkbox6c"> Must-have qualification </label>
                                                                                            </div>
                                                                                        </div>               
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ques-education" style="display: none;">
                                                                        <div class="panel panel-inverse">
                                                                            <div class="panel-heading"> 
                                                                            <input type="hidden" name="question[]" value="Are you willing to take a drug test, in accordance with local law/regulations?" />
                                                                                Are you willing to take a drug test, in accordance with local law/regulations?

                                                                                <div class="pull-right">
                                                                                    <a href="javascript:;" data-skillbtn="btn-education"><i class="ti-close"></i></a> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label>
                                                                                                    Answer:  
                                                                                                </label>

                                                                                                <select class="form-control" name="answer[]">
                                                                                                    <option disabled selected>Choose one…</option>
                                                                                                      <option value="yes">
                                                                                                        Yes
                                                                                                      </option>
                                                                                                      <option value="no">
                                                                                                        No
                                                                                                      </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>  

                                                                                        <div class="col-md-4">
                                                                                            <label>
                                                                                                Ideal Answer:  
                                                                                            </label>
                                                                                            <p>Yes</p>
                                                                                            <input type="hidden" name="idealanswer[]" value="yes" />
                                                                                        </div>

                                                                                        <!-- <div class="col-md-4">
                                                                                            <div class="checkbox checkbox-inverse my-pt-4">
                                                                                                <input id="checkbox6c" type="checkbox">
                                                                                                <label for="checkbox6c"> Must-have qualification </label>
                                                                                            </div>
                                                                                        </div>                -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ques-backgroundCheck" style="display: none;">
                                                                        <div class="panel panel-inverse">
                                                                            <div class="panel-heading"> 
                                                                            <input type="hidden" name="question[]" value="Are you willing to undergo a background check, in accordance with local law/regulations?" />
                                                                                Are you willing to undergo a background check, in accordance with local law/regulations?

                                                                                <div class="pull-right">
                                                                                    <a href="javascript:;" data-skillbtn="btn-backgroundCheck"><i class="ti-close"></i></a> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                    <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label>
                                                                                                    Answer:  
                                                                                                </label>

                                                                                                <select class="form-control" name="answer[]">
                                                                                                    <option disabled selected>Choose one…</option>
                                                                                                      <option value="yes">
                                                                                                        Yes
                                                                                                      </option>
                                                                                                      <option value="no">
                                                                                                        No
                                                                                                      </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div> 

                                                                                        <div class="col-md-4">
                                                                                            <label>
                                                                                                Ideal Answer:  
                                                                                            </label>
                                                                                            <p>Yes</p>
                                                                                            <input type="hidden" name="idealanswer[]" value="yes" />
                                                                                        </div>

                                                                                        <!-- <div class="col-md-4">
                                                                                            <div class="checkbox checkbox-inverse my-pt-4">
                                                                                                <input id="checkbox6c" type="checkbox">
                                                                                                <label for="checkbox6c"> Must-have qualification </label>
                                                                                            </div>
                                                                                        </div>                -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- <div class="ques-driverLicense" style="display: none;">
                                                                        <div class="panel panel-inverse">
                                                                            <div class="panel-heading"> 
                                                                                Do you have a valid driver's license?

                                                                                <div class="pull-right">
                                                                                    <a href="javascript:;" data-skillbtn="btn-driverLicense"><i class="ti-close"></i></a> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <label>
                                                                                                Ideal Answer:  
                                                                                            </label>
                                                                                            <p>Yes</p>
                                                                                        </div>

                                                                                        <div class="col-md-6">
                                                                                            <div class="checkbox checkbox-inverse my-pt-4">
                                                                                                <input id="checkbox6c" type="checkbox">
                                                                                                <label for="checkbox6c"> Must-have qualification </label>
                                                                                            </div>
                                                                                        </div>               
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ques-drugTest" style="display: none;">
                                                                        <div class="panel panel-inverse">
                                                                            <div class="panel-heading"> 
                                                                                Are you willing to take a drug test, in accordance with local law/regulations?

                                                                                <div class="pull-right">
                                                                                    <a href="javascript:;" data-skillbtn="btn-drugTest"><i class="ti-close"></i></a> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <label>
                                                                                                Ideal Answer:  
                                                                                            </label>
                                                                                            <p>Yes</p>
                                                                                        </div>

                                                                                        <div class="col-md-6">
                                                                                            <div class="checkbox checkbox-inverse my-pt-4">
                                                                                                <input id="checkbox6c" type="checkbox">
                                                                                                <label for="checkbox6c"> Must-have qualification </label>
                                                                                            </div>
                                                                                        </div>               
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->

                                                                    <div class="clone-custom-question" style="display: none;">
                                                                        <div class="panel panel-info customQuestion">
                                                                            
                                                                            <div class="panel-heading"> 
                                                                                Write a custom screening question.

                                                                                <div class="pull-right">
                                                                                    <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Text area</label>
                                                                                                <div>
                                                                                                    <textarea class="form-control" rows="1" name="question[]" placeholder="Try asking a question like, “Will you be able to bring your own device?”" style="resize:none;"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>  

                                                                                        <div class="col-md-4">
                                                                                            <label>
                                                                                                Response type: 
                                                                                            </label>
                                                                                            <div id="bloodhound">
                                                                                                <select class="form-control" name="answer[]">
                                                                                                    <option>
                                                                                                        Yes / No
                                                                                                    </option>
                                                                                                    <option>
                                                                                                        Numeric
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-5">
                                                                                            <label class="control-label">Ideal Answer: </label>
                                                                                            <div class="row align-items-center">
                                                                                                <div class="col-xs-6">
                                                                                                    <input id="tch3" type="text" value="1" min="1" name="idealanswer[]" max="100" class="text-center" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">
                                                                                                </div>
                                                                                                <div class="col-xs-6  my-pt-3">
                                                                                                    <span>minimum</span>
                                                                                                </div>
                                                                                            </div>
                                                                                             
                                                                                        </div>

                                                                                        <div class="col-md-3">
                                                                                            <div class="checkbox checkbox-inverse my-pt-4">
                                                                                                <input id="checkbox6c" type="checkbox">
                                                                                                <label for="checkbox6c"> Must-have qualification </label>
                                                                                            </div>
                                                                                        </div>               
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                                        
                                                                    </div>

                                                                    <div class="question-plan">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="col-md-12">
                                                                            Add screening questions:
                                                                        </label>
                                                                        <div class="col-md-12">
                                                                             <button class="mymb-5 btn btn-outline btn-success waves-effect waves-light btn-expertise" data-skillquestion="expertise-question" type="button">
                                                                                <span class="btn-label"><i class="fa  fa-plus"></i></span>
                                                                                Experience
                                                                            </button>

                                                                            <button class="mymb-5 btn btn-outline btn-success waves-effect waves-light btn-education" data-skillquestion="ques-education" type="button">
                                                                                <span class="btn-label"><i class="fa  fa-plus"></i></span>
                                                                                Last Qualification
                                                                            </button>

                                                                            <button class="mymb-5 btn btn-outline btn-success waves-effect waves-light btn-backgroundCheck" data-skillquestion="ques-backgroundCheck" type="button">
                                                                                <span class="btn-label"><i class="fa  fa-plus"></i></span>
                                                                                Other Certification 
                                                                            </button>                                                                      

                                                                            <button class="mymb-5 btn btn-outline btn-success waves-effect waves-light" data-skillquestionclone="clone-custom-question" type="button">
                                                                                <span class="btn-label"><i class="fa  fa-plus"></i></span>
                                                                                Custom question
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="checkbox checkbox-inverse my-pt-4">
                                                                        <input id="checkbox6cl" type="checkbox">
                                                                        <label for="checkbox6cl">Filter out and send rejections to applicants who don’t meet any must-have qualifications.</label>
                                                                    </div>

                                                                    <span class="label-default" style="padding: 15px; display: block; border-radius: 10px; ">
                                                                        Thank you for your interest in the Developer position at Freelance in Karāchi, Sindh, Pakistan. Unfortunately, Freelance did not select your application to move forward in the hiring process. Regards, Freelance
                                                                    </span>
                                                                </div>
                                                                        
                                                            </div>
                                                        <!-- </form> -->


                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>

                                            </div>
                                        </div>
                                    </div>
</form>
                                </div>
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
        <!-- Form Wizard JavaScript -->
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js") }}"></script>
        <!-- FormValidation -->
        <link rel="stylesheet" href="{{ asset("careers_assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css") }}">
        <script src="{{ asset("careers_assets/plugins/bower_components/skycons/skycons.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/counterup/jquery.counterup.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/raphael/raphael-min.js") }}"></script>
        <script src="{{ asset("careers_assets/js/custom.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js") }}"></script>

        <!-- Typehead Plugin JavaScript -->
        <script src="{{ asset("careers_assets/plugins/bower_components/typeahead.js-master/dist/typeahead.bundle.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/typeahead.js-master/dist/typeahead-init.js") }}"></script>
        
        <!-- FormValidation plugin and the class supports validating Bootstrap form -->
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js") }}"></script>
        
        <!-- wysuhtml5 Plugin JavaScript -->
        <script src="{{ asset("careers_assets/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js") }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset("careers_assets/plugins/bower_components/switchery/dist/switchery.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/custom-select/custom-select.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js") }}"></script>
        <script src="{{ asset("careers_assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js") }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset("careers_assets/plugins/bower_components/multiselect/js/jquery.multi-select.js") }}"></script>

        <script type="text/javascript">


        (function () {

            $('#exampleBasic').wizard({
                onFinish: function () {
                    alert('finish');
                }
            });
            $('#exampleBasic2').wizard({
                onFinish: function () {
                    alert('finish');
                }
            });
            $('#exampleValidator').wizard({
                onInit: function () {
                    $('#validation').formValidation({
                        framework: 'bootstrap'
                        , fields: {
                            username: {
                                validators: {
                                    notEmpty: {
                                        message: 'The username is required'
                                    }
                                    , stringLength: {
                                        min: 6
                                        , max: 30
                                        , message: 'The username must be more than 6 and less than 30 characters long'
                                    }
                                    , regexp: {
                                        regexp: /^[a-zA-Z0-9_\.]+$/
                                        , message: 'The username can only consist of alphabetical, number, dot and underscore'
                                    }
                                }
                            }
                            , email: {
                                validators: {
                                    notEmpty: {
                                        message: 'The email address is required'
                                    }
                                    , emailAddress: {
                                        message: 'The input is not a valid email address'
                                    }
                                }
                            }
                            , password: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password is required'
                                    }
                                    , different: {
                                        field: 'username'
                                        , message: 'The password cannot be the same as username'
                                    }
                                }
                            }
                        }
                    });
                }
                , validator: function () {
                    var fv = $('#validation').data('formValidation');
                    var $this = $(this);
                    // Validate the container
                    fv.validateContainer($this);
                    var isValidStep = fv.isValidContainer($this);
                    if (isValidStep === false || isValidStep === null) {
                        return false;
                    }
                    return true;
                }
                , onFinish: function () {
                    $('#validation').submit();
                    alert('finish');
                }
            });
            $('#accordion').wizard({
                step: '[data-toggle="collapse"]'
                , buttonsAppendTo: '.panel-collapse'
                , templates: {
                    buttons: function () {
                        var options = this.options;
                        return '<div class="panel-footer"><ul class="pager">' + '<li class="previous">' + '<a href="#' + this.id + '" data-wizard="back" role="button">' + options.buttonLabels.back + '</a>' + '</li>' + '<li class="next">' + '<a href="#' + this.id + '" data-wizard="next" role="button">' + options.buttonLabels.next + '</a>' + '<a href="#' + this.id + '" data-wizard="finish" role="button">' + options.buttonLabels.finish + '</a>' + '</li>' + '</ul></div>';
                    }
                }
                , onBeforeShow: function (step) {
                    step.$pane.collapse('show');
                }
                , onBeforeHide: function (step) {
                    step.$pane.collapse('hide');
                }
                , onFinish: function () {
                    alert('finish');
                }
            });
        })();
    </script>

    <script>
        $(document).ready(function () {
            $('.textarea_editor').wysihtml5();
        });
    </script>

    <script>
            jQuery(document).ready(function () {
                // Switchery
                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                $('.js-switch').each(function () {
                    new Switchery($(this)[0], $(this).data());
                });
                // For select 2
                $(".select2").select2();
                $('.selectpicker').selectpicker();
                //Bootstrap-TouchSpin
                $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                    , verticalupclass: 'ti-plus'
                    , verticaldownclass: 'ti-minus'
                });
                var vspinTrue = $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                });
                if (vspinTrue) {
                    $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                }
                $("input[name='tch1']").TouchSpin({
                    min: 0
                    , max: 100
                    , step: 0.1
                    , decimals: 2
                    , boostat: 5
                    , maxboostedstep: 10
                    , postfix: '%'
                });
                $("input[name='tch2']").TouchSpin({
                    min: -1000000000
                    , max: 1000000000
                    , stepinterval: 50
                    , maxboostedstep: 10000000
                    , prefix: '$'
                });
                $("input[name='tch3']").TouchSpin();
                $("input[name='tch3_22']").TouchSpin({
                    initval: 40
                });
                $("input[name='tch5']").TouchSpin({
                    prefix: "pre"
                    , postfix: "post"
                });
                // For multiselect
                $('#pre-selected-options').multiSelect();
                $('#optgroup').multiSelect({
                    selectableOptgroup: true
                });
                $('#public-methods').multiSelect();
                $('#select-all').click(function () {
                    $('#public-methods').multiSelect('select_all');
                    return false;
                });
                $('#deselect-all').click(function () {
                    $('#public-methods').multiSelect('deselect_all');
                    return false;
                });
                $('#refresh').on('click', function () {
                    $('#public-methods').multiSelect('refresh');
                    return false;
                });
                $('#add-option').on('click', function () {
                    $('#public-methods').multiSelect('addOption', {
                        value: 42
                        , text: 'test 42'
                        , index: 0
                    });
                    return false;
                });
            });
        </script>

        <script>


        </script>

        <script type="text/javascript" src="{{ asset("careers_assets/js/myscript.js") }}"></script>

        <script src="{{ asset("careers_assets/plugins/bower_components/sweetalert/sweetalert.min.js") }}"></script>
    <script src="{{ asset("careers_assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js") }}"></script>
            
    <script>
        $(document).ready(function(){

            // $('[href="#"]').attr('href','javascript:;');
            $('.wizard-finish').on('click',function(){
                var title = $('#title').val();
                var type = $('#type').val();
                var location = $('#location').val();
                var description = $('#description').html();
                var skills = $('#skills').val();
                var jobs = $('#occ').val();
                // console.log(title);
                // console.log(type);
                // console.log(location);
                // console.log(description);
                // console.log(skills);

                if(title == "" || type == "" || location == "" || description == "" || skills == "" || jobs == ""){
                    alert('Please fill all required fields');
                }
                else{

                    var formData = $('#jobpostform').serialize();

                    console.log(formData);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:"{{ route('createjob') }}",
                        type:"POST",
                        data:formData,
                        success:function(res){
                            if(res){
                                window.location.reload();
                            }
                        }
                    })
                }
            });
        });
    </script>

</body>

</html>