<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.compatibility')
    <meta name="description" content="">
    <title>Muller Phipps</title>
    @include("includes.style")
</head>
<body>
@include("includes.header")

<section class="innerBanner" style="background-image:url(assets/images/banner/career-banner.jpg)">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Join Our
            <span>Journey<b>.</b></span>
        </h5>
    </div>
</section>

<section class="careerSection-inner">
    <div class="container">
        <div class="cs-inner-hd mn-hd">
        @if(count($data) > 0)
            <h5>We Are
                <span>Hiring<b>.</b></span>
            </h5>
         @else
             <h5>No Job Found!</h5>
         @endif
        </div>

        <div class="row">
           
           @foreach($data as $job)
            <div class="col-md-12">
                <div class="csi-main">
                    <div class="csi-sub">
                        <span>
                           <h2>Job Title</h2>

                           <h1>{{$job->title}}</h1>
                        </span>

                        <span>
                           <h2>Deparment</h2>

                           <h1>{{$job->department}}</h1>
                        </span>

                        <span>
                           <h2>Number of Jobs</h2>

                           <h1>{{$job->jobs}}</h1>
                        </span>

                        <span>
                           <h2>City</h2>

                           <h1>{{$job->location_id}}</h1>
                        </span>

                        <span>
                           <a href="{{route('careers_apply',['career'=>$job->id])}}">Apply Now!</a>
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
         

            <!-- <div class="col-md-12">
                <div class="csi-main">
                    <div class="csi-sub">
                        <span>
                           <h2>Job Title</h2>

                           <h1>Web Developer</h1>
                        </span>

                        <span>
                           <h2>Deparment</h2>

                           <h1>IT</h1>
                        </span>

                        <span>
                           <h2>Number of Jobs</h2>

                           <h1>05</h1>
                        </span>

                        <span>
                           <h2>City</h2>

                           <h1>Karachi</h1>
                        </span>

                        <span>
                           <a href="{{route("careers_apply")}}">Apply Now!</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="csi-main">
                    <div class="csi-sub">
                        <span>
                           <h2>Job Title</h2>

                           <h1>Web Developer</h1>
                        </span>

                        <span>
                           <h2>Deparment</h2>

                           <h1>IT</h1>
                        </span>

                        <span>
                           <h2>Number of Jobs</h2>

                           <h1>05</h1>
                        </span>

                        <span>
                           <h2>City</h2>

                           <h1>Karachi</h1>
                        </span>

                        <span>
                           <a href="{{route("careers_apply")}}">Apply Now!</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="csi-main">
                    <div class="csi-sub">
                        <span>
                           <h2>Job Title</h2>

                           <h1>Web Developer</h1>
                        </span>

                        <span>
                           <h2>Deparment</h2>

                           <h1>IT</h1>
                        </span>

                        <span>
                           <h2>Number of Jobs</h2>

                           <h1>05</h1>
                        </span>

                        <span>
                           <h2>City</h2>

                           <h1>Karachi</h1>
                        </span>

                        <span>
                           <a href="{{route("careers_apply")}}">Apply Now!</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="csi-main">
                    <div class="csi-sub">
                        <span>
                           <h2>Job Title</h2>

                           <h1>Web Developer</h1>
                        </span>

                        <span>
                           <h2>Deparment</h2>

                           <h1>IT</h1>
                        </span>

                        <span>
                           <h2>Number of Jobs</h2>

                           <h1>05</h1>
                        </span>

                        <span>
                           <h2>City</h2>

                           <h1>Karachi</h1>
                        </span>

                        <span>
                           <a href="{{route("careers_apply")}}">Apply Now!</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="csi-main">
                    <div class="csi-sub">
                        <span>
                           <h2>Job Title</h2>

                           <h1>Web Developer</h1>
                        </span>

                        <span>
                           <h2>Deparment</h2>

                           <h1>IT</h1>
                        </span>

                        <span>
                           <h2>Number of Jobs</h2>

                           <h1>05</h1>
                        </span>

                        <span>
                           <h2>City</h2>

                           <h1>Karachi</h1>
                        </span>

                        <span>
                           <a href="{{route("careers_apply")}}">Apply Now!</a>
                        </span>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>


@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")
</body>
</html>
