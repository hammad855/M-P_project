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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>M&P
            <span>{{$location}}<b>.</b></span>
        </h5>
    </div>
</section>

<section class="locationSection">
    <div class="container">
        <div class="locsec-hd mn-hd wow fadeInLeft animated" data-wow-delay="0.2s">
            <h5>Don't Worry About <br>
                <span>Your Courier<b>.</b></span>
            </h5>
        </div>

        <div class="row align-items-center justify-content-centeru">
            @foreach($locations as $branch)
            <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.4s">
                <div class="locationsec-card">
                    <div class="locsec-img">
                        <img src="{{asset("assets/images/location/img.jpg")}}" alt="">
                    </div>
                    <div class="locsec-cont">
                        <div class="locsec-icon">
                            <span><i class="fas fa-map-marker-alt"></i></span>
                        </div>

                        <h6>{{$branch['name']}}</h6>

                        <p>{{$branch['Address']}}</p>

                        <a href="mailto:contact@multhilog.com">contact@multhilog.com</a>
                        <br>
                        <a href="Tel:{{$branch['phone']}}"> {{$branch['phone']}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")
</body>
</html>
