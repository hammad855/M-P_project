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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/attestation.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Attestation
            <span>Services<b>.</b></span>
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
                            Ministry of foreign affairs (MOFA) has authorized M&P courier service as an attestation service provider. It is the fastest attestation courier service in Pakistan that has a dedicated team for attestation service so that our customers can get their attestation done in less time and less hassle and at their doorstep.
                        </p>
                    </h5>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="cellsec-img">
                    <img src="{{asset("assets/images/value-add/img6.jpg")}}" alt="">
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
