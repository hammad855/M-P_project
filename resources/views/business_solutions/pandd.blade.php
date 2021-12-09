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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/pd.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>M&P
            <span>P&D<b>.</b></span>
        </h5>
    </div>
</section>

<section class="samedaySection">
    <div class="container">
        <div class="sds-top">
            <div class="row align-items-center">
                <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                    <div class="sds-cont sds-cont1 mn-hd">
                        <h5>Print &
                            <span>Distribution<b>.</b></span>
                        </h5>

                        <p>
                            A complete end-to-end In-house “Bulk Mail Solution”.
                        </p>
                        <p>Comprehensive solution for Banks, Education, Insurance, Utility, Telcos, Real Estate and Builders, NGOs and Internet Service Providers etc.</p>
                        <p class="last">
                            Our Print & Distribution solution cater the needs of our customers with Stationary, Data Management, High Quality Printing, Stuffing and Sealing, Delivery at the doorstep along with step-wise cycle monitoring and customized reporting. Our customer centric team manages all this for your businesses and make it smooth and easy for you and your team.
                        </p>
                    </div>
                </div>

                <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                    <div class="sds-img">
                        <img src="{{asset("assets/images/pic/img23.jpg")}}" alt="">
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
{{--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate....--}}
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
{{--                            Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.--}}
{{--                        </p>--}}
{{--                        <p class="last">--}}
{{--                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem....--}}
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
