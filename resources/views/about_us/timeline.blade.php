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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/Timeline.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>M&P
            <span>Timeline<b>.</b></span>
        </h5>
    </div>
</section>

<section class="timelineSection">
    <div class="container">
        @foreach($timelines as $index => $timeline)
            @if(($index +1) % 2 === 0)
                <div class="timelinesec-right {{$loop->last ? "last" : ""}}">
                    <div class="row align-items-center">
                        <div class="col-md-9 col-sm-9 mobleDiv-pull">
                            <div class="tlsec-cont mn-hd tl{{$index+1}}">
                                <p>
                                    {{$timeline->description}}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 mobleDiv-push wow flip animated" data-wow-delay="0.4s">
                            <div class="tlsec-hd" data-mytime="tl{{$index+1}}">
                                <span>{{$timeline->year}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="timelinesec-left {{$loop->last ? "last" : ""}}">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-3 wow flip animated" data-wow-delay="0.4s">
                            <div class="tlsec-hd" data-mytime="tl{{$index+1}}">
                                <span>{{$timeline->year}}</span>
                            </div>
                        </div>

                        <div class="col-md-9 col-sm-9">
                            <div class="tlsec-cont mn-hd tl{{$index+1}}">
                                </h5>
                                <p>
                                    {{$timeline->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach




{{--        <div class="timelinesec-left">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-md-3 col-sm-3 wow flip animated" data-wow-delay="0.4s">--}}
{{--                    <div class="tlsec-hd" data-mytime="tl3">--}}
{{--                        <span>2015</span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-9 col-sm-9">--}}
{{--                    <div class="tlsec-cont mn-hd tl3">--}}
{{--                        <p>--}}
{{--                            Over 2400+ Employees including 900+ Couriers Courier, Logistics, International Express,--}}
{{--                            Expressions Over 1200+ delivery locations with 13+ million annual deliveries across Pakistan--}}
{{--                            Providing services to 2,000+ Corporate customers 350+ Courier centers A fleet of 70+ rented--}}
{{--                            vehicles--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="timelinesec-right last">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-md-9 col-sm-9">--}}
{{--                    <div class="tlsec-cont mn-hd tl4">--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt--}}
{{--                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
{{--                            laboris nisi ut aliquip ex ea commodo consequat....--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3 col-sm-3 wow flip animated" data-wow-delay="0.4s">--}}
{{--                    <div class="tlsec-hd" data-mytime="tl4">--}}
{{--                        <span>2021</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>

@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")
</body>
</html>
