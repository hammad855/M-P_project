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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/my-flyer.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>My
            <span>Flyer<b>.</b></span>
        </h5>
    </div>
</section>

<section class="samedaySection">
    <div class="container">
        <div class="sds-top">
            <div class="row align-items-center">
                <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                    <div class="sds-cont sds-cont1 mn-hd">
                        <h5>Convenient and
                            <span>Secure<b>.</b></span>
                        </h5>

                        <p>
                            Sending small parcels, packages and documents across Pakistan has never been easier before
                            M&P MyFlyer service. MyFlyer is designed to offer maximum protection and convenience for
                            your deliveries while minimizing the hassle required to send small items or documents.
                        </p>

                        <p>
                            With MyFlyer, you can choose from three sizes (small, medium, large) to perfectly match your
                            requirements depending on the items.
                        </p>

                        <p>
                            Whether you are sending fragile or expensive items that require special handling or
                            important and sensitive documents, the M&P MyFlyer service provides options for all
                            requirements.
                        </p>

                        <p>
                            The M&P MyFlyer service ensures that fragile and sensitive items such as electronics,
                            accessories, or documents reach their destination without a scratch.
                        </p>

                        <p class="last">
                            You can also opt for added safety by availing of our cellophane wrapping service and provide
                            handling instructions for delivery.
                        </p>
                    </div>
                </div>

                <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                    <div class="sds-img">
                        <img src="{{asset("assets/images/pic/img1.jpg")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="sds-meddle">
            <div class="row align-items-center">
                <div class="col-md-6 wow fadeInLeft animated" data-wow-delay="0.6s">
                    <div class="sds-cont mn-hd">
                        <h5 class="last">General
                            <span>Information<b>.</b></span>
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight animated" data-wow-delay="0.4s">
                    <div class="sds-cont mn-hd">
                        <p class="last">
                            The M&P MyFlyer service is best suited for fragile/expensive items and documents that are
                            small in size and require special handling and hand-carry service.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sds-bottom">
            <div class="row">
                <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">
                    <div class="sds-cont mn-hd">
                        <div class="visionsec-cont mn-hd">
                            <ul>
                                <li>Available in Three Sizes (small, medium, large)</li>
                                <li>Supports Hand-Carry and Special Handling</li>
                                <li>Supports Value-Added Services (Cellophane Wrap)</li>
                                <li>Best for Fragile/Expensive Objects and Documents</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">
                        <div class="fqa-main">
                            <button class="accordion ">Supported Services</button>
                            <div class="panel">
                                <p>
                                    MyFlyer can be paired with the overnight express, same-day, and special delivery
                                    services depending on your requirements.
                                </p>
                            </div>
                        </div>
                        <div class="fqa-main">
                            <button class="accordion ">Available Sizes</button>
                            <div class="panel">
                                <p>
                                    MyFlyer comes in three sizes: small, medium, and large.
                                </p>
                            </div>
                        </div>
                        <div class="fqa-main">
                            <button class="accordion ">Hand-Carry and Special Handling</button>
                            <div class="panel">
                                <p>
                                    MyFlyer shipments are hand-carried and treated with special precaution to protect
                                    fragile and expensive objects and to ensure that documents are not damaged.
                                </p>
                            </div>
                        </div>
                        <div class="fqa-main">
                            <button class="accordion ">Special Delivery</button>
                            <div class="panel">
                                <p>
                                    To ensure special delivery during the weekend/Sunday or Festive or Religious
                                    Holidays, M&P offers special delivery services that can be selected to ensure that
                                    your shipment reaches its destination without any delay.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="globle-btn wow fadeInUp animated" data-wow-delay="0.4s">
            <a href="{{route("quote")}}">
                Free Home Pickup
            </a>
        </div>
    </div>
</section>

@include("includes.footer")
@include("includes.scripts")
</body>
</html>
