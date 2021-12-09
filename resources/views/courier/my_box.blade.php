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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/my-box.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>My
            <span>Box<b>.</b></span>
        </h5>
    </div>
</section>

<section class="samedaySection">
    <div class="container">
        <div class="sds-top">
            <div class="row align-items-center">
                <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                    <div class="sds-cont sds-cont1 mn-hd">
                        <h5>Robust Packaging,
                            <span>Abundant Capacity<b>.</b></span>
                        </h5>

                        <p>
                            If you are planning to send shipments ranging from 1 to 30 KGs, the M&P My Box service is
                            the perfect choice for your requirements. Featuring several size categories and box sizes,
                            the M&P branded MyBox offers a safe and convenient way to send shipments across 1600+ locations
                            within 24 to 48 hours.
                        </p>

                        <p>
                            Made with robust and sturdy material, the MyBox service offers packaging options that can
                            be customized to match your size and weight requirements for maximum protection and
                            convenience.
                        </p>

                    </div>
                </div>

                <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                    <div class="sds-img">
                        <img src="{{asset("assets/images/inner/img3.png")}}" alt="">
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
                            My Box can be used to send a wide variety of objects and specified for special care and
                            handling in case of fragile items.
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
                                <li>Available in Seven Weight Categories (1 to 30 KG)</li>
                                <li>Supports Special Precautions for Fragile Items</li>
                                <li>Supports Value-Added Services (Cellophane Wrap)</li>
                                <li>Suitable for Wide Range of Objects/Items</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">
                        <div class="fqa-main">
                            <button class="accordion ">Available Sizes</button>
                            <div class="panel">
                                <p>
                                    My Box is categorized based on weight capacity with 1 KG, 2 KG, 3 KG, 5 KG, 10 KG,
                                    20 KG, and 30 KG variations available for use.
                                </p>
                            </div>
                        </div>
                        <div class="fqa-main">
                            <button class="accordion ">Supported Services</button>
                            <div class="panel">
                                <p>
                                    My Box can be paired with the overnight express, same-day, and special delivery
                                    services depending on your requirements. Overnight Delivery is the standard mode for
                                    My Box.
                                </p>
                            </div>
                        </div>
                        <div class="fqa-main">
                            <button class="accordion ">Special Handling and Precautions</button>
                            <div class="panel">
                                <p>
                                    My Box shipments can be specified for special precautions in case of
                                    fragile/expensive items.
                                </p>
                            </div>
                        </div>

                        <div class="fqa-main">
                            <button class="accordion ">Special Delivery</button>
                            <div class="panel">
                                <p>
                                    You can receive Cash on Delivery for shipments from customers by availing of our
                                    Retail COD service without needing registration and receive quick paybacks without
                                    any hassle to a financial account of your choice.To ensure special delivery during
                                    the weekend/Sunday or Festive or Religious Holidays, M&P offers special delivery
                                    services that can be selected to ensure that your shipment reaches its destination
                                    without any delay. Special Delivery can be arranged for out-of-service areas or
                                    remote locations.
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
