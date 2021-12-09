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

<section class="innerBanner" style="background-image:url({{asset("storage/{$content->banner_image}")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">

        {!! html_entity_decode($content->banner_title) !!}
    </div>
</section>

<section class="courierSection-inner">
    <div class="container">
        <div class="couriersec-hd mn-hd">
            {!! html_entity_decode($content->heading) !!}

            <p>
                {{$content->page_excerpt}}
            </p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="sersec-main">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/img4.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Same Day Delivery</h3>
                                    <p>
                                        Ensure timely delivery within the same working day in Karachi, Lahore, and
                                        Islamabad (within the city.)
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("same_day_delivery")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/img5.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>My Box</h3>
                                    <p>
                                        Send packages and parcels across a wide range of weight and size categories
                                        ranging from 1 to 30 KG through overnight delivery.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("my_box")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="1.0s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/img6.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>My Flyer</h3>
                                    <p>
                                        Safely send documents, fragile/expensive items, or sensitive articles that
                                        require hand-carrying across the globe in three size categories.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("my_flyer")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="1.0s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/img21.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Overnight Delivery</h3>
                                    <p>
                                        Ensure express delivery of any shipment regardless of category overnight day
                                        without having to worry about deadlines.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("overnight")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/truck.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Second Day</h3>
                                    <p>
                                        Delivery within 48-72 hours.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{route("express_cargo")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/img20.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Breakfast Delivery</h3>
                                    <p>
                                        Deliver documents and small packages at the break of dawn and have them reach
                                        their destination by 10 A.M.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="breakfast-delivery.php"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                            <div class="sersec-card sersec-card1">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/img19.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>International</h3>
                                    <p>
                                        M&P through its strong and strategic partnerships has been instrumental in
                                        facilitating the Pakistani citizens to deliver their shipments worldwide.
                                        Covering 210+ destinations.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="{{ route("international") }}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInUp animated" data-wow-delay="0.6s">
                            <div class="sersec-card sersec-card1 sersec-card1-end">
                                <div class="card-sersec-end-cont">
                                    <h3>Value Added Service</h3>
                                </div>
                                <div class="sersec-btn sersec-end-btn">
                                    <a href="{{route("value_added_services")}}"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
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
