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
<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/insurance.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Insurance
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
                    </h5>
                    <p>
                        Here at M&P we are greatly concerned about the shipments which our customers entrust us with; we also realize that these shipments are of the utmost importance to them and are of great value as well. To ensure all the shipments from any unforeseen and unfortunate losses, we offer insurance of:
                    </p>
                    <br>
                    <br>
                    <br>
                    <div class="sds-bottom">
                        <div class="row">
                            <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">
                                <div class="sds-cont mn-hd">
                                    <div class="visionsec-cont mn-hd">
                                        <ul>
                                            <li>Non-electronic items and</li>
                                            <li>Electronic items</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="cellsec-img">
                    <img src="{{asset("assets/images/value-add/img7.jpg")}}" alt="">
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
