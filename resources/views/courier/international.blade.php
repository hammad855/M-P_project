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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/express-cargo.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>International
            <span>Delivery<b>.</b></span>
        </h5>
    </div>
</section>

<section class="samedaySection">
    <div class="container">
        <div class="sds-top">
            <div class="row align-items-center">
                <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                    <div class="sds-cont sds-cont1 mn-hd">
                        {{--                        <h5>Fast Delivery--}}
                        {{--                           <span>for Rapid Progress<b>.</b></span>--}}
                        {{--                        </h5>--}}

                        <p>
                            M&P through its strong and strategic partnerships has been instrumental in facilitating the
                            Pakistani citizens to deliver their shipments worldwide. Covering 210+ destinations, we
                            deliver your shipments in a safe, secure and timely manner. Our teams are dedicated towards
                            enhancing our processes, incorporating technological advancements and providing our
                            customers with even better experience which best caters to their diverse needs.
                        </p>

                    </div>
                </div>

                <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                    <div class="sds-img">
                        <img src="{{asset("assets/images/img23.jpg")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="sds-meddle">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 wow fadeInLeft animated" data-wow-delay="0.6s">--}}
{{--                    <div class="sds-cont mn-hd">--}}
{{--                        <h5 class="last">General--}}
{{--                            <span>Information<b>.</b></span>--}}
{{--                        </h5>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 wow fadeInRight animated" data-wow-delay="0.4s">--}}
{{--                    <div class="sds-cont mn-hd">--}}
{{--                        <p class="last">--}}
{{--                            M&P Overnight Delivery ensures that your shipments are delivered to their destination over--}}
{{--                            the next working day. this means that your shipment will reach its destination within 24-48--}}
{{--                            hours.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="sds-bottom">
            <div class="row">
                <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">
                    <div class="sds-cont mn-hd">
                        <p><b>M&P Express offers the following solutions to its international shippers:</b></p>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">
                    <div class="sds-cont mn-hd">
                        <div class="visionsec-cont mn-hd">
                            <ul>
                                <li>International Doc</li>
                                <li>International Non-Doc</li>
{{--                                <li>Supports My Flyer and My Box</li>--}}
                            </ul>
                        </div>
                    </div>
{{--                    <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">--}}
{{--                        <div class="fqa-main">--}}
{{--                            <button class="accordion ">Supported Services</button>--}}
{{--                            <div class="panel">--}}
{{--                                <p>--}}
{{--                                    The overnight delivery service is available for all weight and size categories--}}
{{--                                    including My Flyer (small, medium, large) and My Box (1 – 30 KG).--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="fqa-main">--}}
{{--                            <button class="accordion ">Special Delivery</button>--}}
{{--                            <div class="panel">--}}
{{--                                <p>--}}
{{--                                    To ensure special delivery during the weekend/Sunday or Festive or Religious--}}
{{--                                    Holidays, M&P offers special delivery services that can be selected to ensure that--}}
{{--                                    your shipment reaches its destination without any delay.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="fqa-main">--}}
{{--                            <button class="accordion ">Additional Information</button>--}}
{{--                            <div class="panel">--}}
{{--                                <p>--}}
{{--                                    This service does not apply to documents sent for attestation which requires 4 to 5--}}
{{--                                    working days and is separate from same-day delivery service which is only available--}}
{{--                                    in select cities (Karachi, Islamabad, Lahore) for locations within the city.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">
                    <div class="sds-cont mn-hd">
                        <p><b>These shipments are packed and sent within our products such as:</b></p>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">

                    <div class="sds-cont mn-hd">
                        <div class="visionsec-cont mn-hd">
                            <ul>
                                <li>My Box</li>
                                <li>Brown Box</li>
                                <li>My Flyer</li>
                                {{--                                <li>Supports My Flyer and My Box</li>--}}
                            </ul>
                        </div>
                    </div>
                    {{--                    <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">--}}
                    {{--                        <div class="fqa-main">--}}
                    {{--                            <button class="accordion ">Supported Services</button>--}}
                    {{--                            <div class="panel">--}}
                    {{--                                <p>--}}
                    {{--                                    The overnight delivery service is available for all weight and size categories--}}
                    {{--                                    including My Flyer (small, medium, large) and My Box (1 – 30 KG).--}}
                    {{--                                </p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="fqa-main">--}}
                    {{--                            <button class="accordion ">Special Delivery</button>--}}
                    {{--                            <div class="panel">--}}
                    {{--                                <p>--}}
                    {{--                                    To ensure special delivery during the weekend/Sunday or Festive or Religious--}}
                    {{--                                    Holidays, M&P offers special delivery services that can be selected to ensure that--}}
                    {{--                                    your shipment reaches its destination without any delay.--}}
                    {{--                                </p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="fqa-main">--}}
                    {{--                            <button class="accordion ">Additional Information</button>--}}
                    {{--                            <div class="panel">--}}
                    {{--                                <p>--}}
                    {{--                                    This service does not apply to documents sent for attestation which requires 4 to 5--}}
                    {{--                                    working days and is separate from same-day delivery service which is only available--}}
                    {{--                                    in select cities (Karachi, Islamabad, Lahore) for locations within the city.--}}
                    {{--                                </p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
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
