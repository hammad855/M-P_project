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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/brown-box.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Brown Box
            <span>Facility<b>.</b></span>
        </h5>
    </div>
</section>

<section class="cellophaneSection">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-7 wow fadeInleft animated" data-wow-delay="0.4s">
                <div class="cellsec-cont mn-hd">
                    <h5>If You Want
                        <span>To Make Your Packaging<b>.</b></span>

                        <p>
                            Going green is a big part of today’s evolving world. As we battle over growing climatic change we also play our part to give back to nature. Our courier services have brown box facility service not only to make sure your product reaches its destination safely without any hurdle but also the brown box packaging is bio-sourced, compostable, and biodegradable. <br><br>
                            The brown box ensures the safety of your product and after using it ensures no harm to the environment.
                        </p>
                    </h5>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="cellsec-img">
                    <img src="{{asset("assets/images/value-add/img2.jpg")}}" alt="">
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
