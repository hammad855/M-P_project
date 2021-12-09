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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/join-our-team.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Join Our
            <span>Team<b>.</b></span>
        </h5>
    </div>
</section>

<section class="careerSection-inner">
    <div class="container">
        <div class="cs-inner-hd mn-hd">
            <h5>Delivering Courier<span><b>.</b></span><br>
                <span>Spreading Smiles<b>.</b></span>
            </h5>

            <p>
                M&P Express Logistics is one of the fastest-growing courier companies in Pakistan, with 1600+ delivery
                locations and 3500+ employees across Pakistan. We deliver the courier on time and spread smiles
                nationwide and worldwide.
            </p>

            <p>
                Become a part of the diverse and innovative courier company in Pakistan and help us spread happiness
                everywhere.
            </p>

            <em>
                View a list of all <a href="{{route("joblist")}}">career opportunities at M&P ></a>
            </em>
        </div>
    </div>
</section>

<section class="serviceSection sercarSec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="sersec-cont mn-hd">

                    <h5>
                        Share your
                        <span>Resume<b>.</b></span>
                    </h5>
                    <h6>Didn't find the job post you are looking for? </h6>
                    <p>
                        {{--                        We offer a wide range of jobs. Explore different career opportunities with M&P Express Logistics.--}}
                        Select the option on the right and share
                        your resume with us.
                    </p>

                </div>
            </div>

            <div class="col-md-8">
                <div class="sersec-main">
                    <div class="row service-slider wow fadeIn animated" data-wow-delay="0.4s">
                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="sersec-card">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/careers/img1.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Students & Graduates</h3>
                                    <p>
                                        Looking to put into practice what you've learned in college or university? M&P
                                        offers you a world of opportunities to deliver business results, assume
                                        responsibility and make a positive contribution to the world.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="#"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="1.0s">
                            <div class="sersec-card">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/careers/img2.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Experienced Hires</h3>
                                    <p>
                                        Bring your experience and passion to a global company focused on service,
                                        quality and sustainability. Explore our job opportunities, join one of our teams
                                        across the globe and grow with us!
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="#"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="1.0s">
                            <div class="sersec-card">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/careers/img3.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Working Here</h3>
                                    <p>
                                        We are a global team of dedicated and experienced people from different cultures
                                        and countries. Get to know us and learn more about what it is really like to be
                                        a part of the M&P family.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="#"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                            <div class="sersec-card">
                                <div class="sersec-img">
                                    <img src="{{asset("assets/images/careers/img4.jpg")}}" alt="">
                                </div>
                                <div class="card-sersec-cont">
                                    <h3>Application Tips & FAQs</h3>
                                    <p>
                                        Get some tips to give your application an even better chance of success and find
                                        answers to the most frequently asked questions.
                                    </p>
                                </div>
                                <div class="sersec-btn">
                                    <a href="#"><i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="whydoloveSection">
    <div class="container">
        <div class="mn-hd wdlSec-hd">
            <h5>Life at
                <span>M&P Express Logistics<b>.</b></span>
            </h5>
        </div>

        <div class="wdlsec-video">
            <a href="https://youtu.be/dZggpgn4v6k" data-fancybox="media">
                <img src="{{asset("assets/images/careers/img.jpg")}}" alt="">

                <span><i class="fal fa-play"></i></span>
            </a>

{{--            <em>--}}
{{--                Discover M&P. Helping the world share new ideas, helping people live longer lives. Free of boundaries.--}}
{{--                Stopping at nothing.--}}
{{--            </em>--}}
        </div>
    </div>
</section>


@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")
</body>
</html><
