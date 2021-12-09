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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/retail-cod.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Retail
            <span>COD<b>.</b></span>
        </h5>
    </div>
</section>

<section class="cashondeliverySection-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.5s">
                <div class="codSec1-cont mn-hd">
                    <h5>Partner with
                        <span>Success<b>.</b></span>
                    </h5>
                    <p>
                        M&P brings the most convenient and hassle-free Retail COD solution for ecommerce businesses in
                        Pakistan. With a quick and easy registration process, you can start dispatching your goods
                        across 1600+ locations in Pakistan.
                    </p>
                    <br>
                    <p class="last">
                        Hassle-free Booking, Fast Delivery with Secure Payment and Quick Reimbursement – M&P Retail COD
                        service helps you grow your business or offer better features to your customers.
                    </p>
                    <br>
                    <p>
                        Offering the nationwide delivery network, M&P helps you bridge the gap between you and your
                        customers.
                    </p>
                    <br>
                    <p class="last">
                        Bring your parcel to the nearest M&P Courier Centers, register your company once, and enjoy
                        seamless courier experience every time!
                    </p>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.5s">
                <div class="codSec1-img">
                    <img src="{{asset("assets/images/pic/img19.jpg")}}" alt="">
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


@include("includes.footer")
@include("includes.scripts")

</body>
</html>
