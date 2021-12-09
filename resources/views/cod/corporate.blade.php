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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/corporate-cod.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Corporate
            <span>COD<b>.</b></span>
        </h5>
    </div>
</section>

<section class="cashondeliverySection-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.5s">
                <div class="codSec1-cont mn-hd">
                    <h5>Team Up
                        <span>with M&P<b>.</b></span>
                    </h5>
                    <p>
                        M&P delivers streamlined and optimized services for corporate requirements. When you partner
                        with M&P, you invest in a professional relationship that will pay dividends from the beginning.


                    </p>
                    <br>
                    <p class="last">
                        For our corporate clients, M&P offers a vast range of warehousing, storage, inventory
                        management, billing, and COD services that can be customized to match your requirements.
                    </p>
                    <br>
                    <p>
                        From logistics to marketing and promotions, we can handle every aspect of your product portfolio
                        from start to finish.
                    </p>
                    <br>
                    <p>
                        Our corporate profile boasts partnerships with the worlds leading companies in over 160
                        countries.
                    </p><br>
                    <p class="last">
                        For a detailed review of your requirements and the services we offer, you can get in touch with
                        our helpline (021 111 202 202).
                    </p>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.5s">
                <div class="codSec1-img">
                    <img src="{{asset("assets/images/pic/img18.jpg")}}" alt="">
                </div>
            </div>

            <div class="col-md-12 pt-5">
                <div class="globle-btn wow fadeInUp animated" data-wow-delay="0.4s">
                    <a href="{{route("quote")}}">
                        Get a Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="cashondeliverySection-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 wow fadeInLeft animated" data-wow-delay="0.5s">
                <div class="warehouse3-img">
                    <img src="{{asset("assets/images/img16.jpg")}}" alt="">
                </div>
            </div>

            <div class="col-md-7 wow fadeInRight animated" data-wow-delay="0.6s">
                <div class="visionsec-cont codSec3-cont mn-hd">
                    <h5>M&P
                        <span>Benefits<b>.</b></span>
                    </h5>

                    <ul>
                        <li>Door to door pick up and delivery</li>
                        <li>Product check and quality assurance</li>
                        <li>COD payment collection</li>
                        <li>Warehousing and customize fulfillment centers</li>
                        <li>Integrated online portal and reports</li>
                        <li>Single-bulk booking options</li>
                        <li>Notification via sms/email</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->


@include("includes.footer")
@include("includes.scripts")

</body>
</html>
