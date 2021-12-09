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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/cod.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Cash On
            <span>Delivery<b>.</b></span>
        </h5>
    </div>
</section>

<section class="cashondeliverySection-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.5s">
                <div class="codSec1-cont mn-hd">
                    <!-- <h5>
                       Your Text <span>Here<b>.</b></span>
                    </h5> -->

                    <p>
                        M&P brings the most innovative courier and business solutions for its customers in Pakistan. Whether you’re a growing startup or small business, or a multinational conglomerate, M&P can help you extend your reach across the country.
                    </p>
                    <br>
                    <p>
                        The M&P COD service lets customers send shipments and receive payments on delivery through a fast and easy process to over 1600+ locations. Not only that, but M&P also offers a much more convenient registration process that is immediate and hassle-free!
                    </p>
                    <br>
                    <p class="last">
                        With no limitations on minimum shipment quantity and quick paybacks, M&P COD is the perfect choice for small businesses and corporate clients alike!
                    </p>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.5s">
                <div class="codSec1-img">
                    <img src="assets/images/pic/img24.jpg" alt="">
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

<!-- <section class="cashondeliverySection-two">
    <div class="container">
        <div class="codSec3-hd mn-hd wow fadeInDown animated" data-wow-delay="0.5s">
            <h5>General <span>Information<b>.</b></span></h5>
        </div>

        <div class="codSec3-main wow fadeInDown animated" data-wow-delay="0.7s">
            <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">
               <div class="fqa-main">
                  <button class="accordion ">How to Register</button>
                  <div class="panel">
                     <p>
                        The registration process is easy and quick. All you need is a package for shipment, one copy of the cheque, and one copy of your CNIC for the first time. Once your account is created, you can simply bring your shipment and have it delivered for the next time.
                     </p>
                  </div>
               </div>
               <div class="fqa-main">
                  <button class="accordion ">Supported Services</button>
                  <div class="panel">
                     <p>
                       The M&P COD service supports My Flyer and My Box.
                     </p>
                  </div>
               </div>
               <div class="fqa-main">
                  <button class="accordion ">Standard Delivery Time</button>
                  <div class="panel">
                     <p>
                        The delivery time ranges from 48 to 72 hours.
                     </p>
                  </div>
               </div>
               <div class="fqa-main">
                  <button class="accordion ">Special Handling and Precautions</button>
                  <div class="panel">
                     <p>
                       Shipments can be designated for hand-carried and treated with special precaution to protect fragile and expensive objects and ensure that documents are not damaged.
                     </p>
                  </div>
               </div>
            </div>
        </div>
    </div>
</section> -->


<!-- <section class="cashondeliverySection-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.6s">
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

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.5s">
                <div class="warehouse3-img">
                    <img src="assets/images/img16.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->


@include("includes.footer")
@include("includes.scripts")
</body>
</html>
