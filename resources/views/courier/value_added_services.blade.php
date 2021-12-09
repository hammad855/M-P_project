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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/value-added.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Value Added
            <span>Service<b>.</b></span>
        </h5>
    </div>
</section>

<section class="courierSection-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sersec-main">
                    <div class="row justify-content-center">
                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.4s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/service/img1.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Cellophane Wrapping </h3>
                                    <p>
                                        Protect your shipments from bumps, scratches, and damage by using our cellophane wrap service that surrounds your items with a cushion of air for maximum safety.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("cellophane_wrapping")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/value-add/brown_box.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Brown Box Facility</h3>
                                    <p>
                                        Securely ship your items in sturdy cardboard boxes that offer increased capacity and added protection and durability.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("brown_box_facility")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/service/img2.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Special Handling</h3>
                                    <p>
                                        Ensure special precautions for fragile and expensive items or sensitive documents by choosing our special handling services for added convenience and protection.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("special_handling")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/service/img3.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Holiday Delivery</h3>
                                    <p>
                                        Don’t let holidays and weekends keep you waiting – choose our holiday delivery service to ensure swift delivery of your shipments without delay!
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("holiday_delivery")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/service/img4.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Out Of Service Area</h3>
                                    <p>
                                        Arrange special delivery to remote locations and out-of-service areas across Pakistan with M&P.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("out_of_service_area")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.4s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/service/img5.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Attestations</h3>
                                    <p>
                                        Hassle-free attestation of formal documents from anywhere in Pakistan within one week!
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("attestation")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.4s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/service/img6.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Insurance</h3>
                                    <p>
                                        Secure your important shipments through additional insurance of up to PKR 300,000 against unforeseen circumstances or risk of loss.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("insurance")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/service/img7.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>MFS (Mobile Financial services)</h3>
                                    <p>
                                        Enjoy the convenience of online payments and financial services through popular mobile wallets and apps.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("mfs")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include("includes.footer")
@include("includes.scripts")
</body>
</body>
</html>
