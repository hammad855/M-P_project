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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/holiday-delivery.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Holiday
            <span>Delivery<b>.</b></span>
        </h5>
    </div>
</section>

<section class="cellophaneSection">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="cellsec-cont mn-hd">
                    <h5>If You Want
                        <span>To Make Your Packaging<b>.</b></span>

                        <p>
                            Receiving a package on a festive day or holiday is a cherry on top to make that day more special. There is always a crazy rush a week before any festivals/ holidays as everyone wants their packages to reach their destination before the occasion/weekend. We stand out from the crowd as we have dedicated teams that make package delivery even on holidays possible. <br><br>
                            Our holiday delivering service makes certain to deliver products and packages around the clock regardless of the holidays as well as keeping the packages safe and secure.
                        </p>
                    </h5>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="cellsec-img">
                    <img src="{{asset("assets/images/value-add/img4.jpg")}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")
</body>
</html>
