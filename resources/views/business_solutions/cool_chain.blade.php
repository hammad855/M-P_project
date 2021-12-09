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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/cool-chain.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5><span>Temperature Controlled<b>.</b></span>
        </h5>
    </div>
</section>

<section class="samedaySection">
    <div class="container">
        <div class="sds-top">
            <div class="row">
                <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                    <div class="sds-cont sds-cont1 mn-hd">
                        <h5>Customized
                            <span>Temperature<b>.</b></span>
                        </h5>

                        <p>
                            Our Cool Chain transportation trucks can maintain a temperature of 15°C to 30°C and
                            is ideal to transport perishable goods such as: agriculture produce, sea food, frozen food,
                            chemicals and pharmaceutical drugs for our corporate and B2B clients.


                            We do not only guarantee product safety and product quality but also ensures immense
                            geographical reach, end to end delivery system, live satellite tracking, domestic regulatory
                            compliance, cost effectiveness, real-time temperature monitoring and trust & reliability.
                        </p>
                        <p>
                            Other factors that make this an ideal solution:
                        </p>
                        <div class="sds-bottom">
                            <div class="row">
                                <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">
                                    <div class="sds-cont mn-hd">
                                        <div class="visionsec-cont mn-hd">
                                            <ul>
                                                <li>Temperature examination for real-time temperature monitoring installed inside the
                                                    container.
                                                </li>
                                                <li>
                                                    Refrigeration system which is powered by dual power source facility i.e. engine driven
                                                    and 3
                                                    phase electricity power source.
                                                </li>
                                                <li>
                                                    Night vision cameras installed 3 sides of vehicle for continuous live video transmission
                                                    and
                                                    recording throughout the journey (subject to availability of 3G Network).
                                                </li>
                                                <li>
                                                    Security locking system which is controlled by line haul management.
                                                </li>
                                                <li>
                                                    Two-way communication system inside cabin for 24/7 uninterrupted bonding with Line Haul
                                                    Management
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                    <div class="sds-img">
                        <img src="{{asset("assets/images/img22.png")}}" alt="">
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
        {{--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt--}}
        {{--                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
        {{--                            laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in--}}
        {{--                            voluptate....--}}
        {{--                        </p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="sds-bottom">--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">--}}
        {{--                    <div class="sds-cont mn-hd">--}}
        {{--                        <p>--}}
        {{--                            Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et--}}
        {{--                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi--}}
        {{--                            ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit--}}
        {{--                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,--}}
        {{--                            sunt in culpa qui officia deserunt.--}}
        {{--                        </p>--}}
        {{--                        <p class="last">--}}
        {{--                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque--}}
        {{--                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi--}}
        {{--                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit--}}
        {{--                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione--}}
        {{--                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,--}}
        {{--                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et--}}
        {{--                            dolore magnam aliquam quaerat voluptatem....--}}
        {{--                        </p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</section>

@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")

</body>
</html>
