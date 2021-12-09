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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/second-day.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Second Day
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
                        <h5>Economic
                           <span>Convenience<b>.</b></span>
                        </h5>

                        <p>
                           The most popular and economical service offered by M&P – the second-day delivery service lets you send packages and parcels across Pakistan with 48 to 72 hours of delivery time.
                        </p>

                        <p>
                           Send packages and documents to over 1600+ locations with special precautions and handling available for fragile and expensive items or sensitive documents.
                        </p>

                        <p class="last">
                           Incredibly low rates and additional value-added services make this service the best option for shipments that don’t need to be immediately delivered and can be sent between 48 to 72 hours from the time of booking.                        </p>
                     </div>
                  </div>

                  <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                     <div class="sds-img">
                        <img src="{{asset("assets/images/inner/img4.png")}}" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="sds-meddle">
               <div class="row">
                  <div class="col-md-6 wow fadeInLeft animated" data-wow-delay="0.6s">
                     <div class="sds-cont mn-hd">
                        <h5 class="last">General
                           <span>Information<b>.</b></span>
                        </h5>
                     </div>
                  </div>

                  <div class="col-md-6 wow fadeInRight animated" data-wow-delay="0.4s">
                     <div class="sds-cont mn-hd">

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
                              <li>24-48 hours delivery time</li>
                              <li>Supports COD</li>
                              <li>Supports MyFlyer and MyBox</li>
                           </ul>
                        </div>
                     </div>

                    <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">
                       <div class="fqa-main">
                          <button class="accordion ">Supported Services</button>
                          <div class="panel">
                             <p>
                                Available for all weight and size categories, including MyFlyer (small, medium, large) and My Box (1 – 30 KG).
                             </p>
                          </div>
                       </div>
                       <div class="fqa-main">
                          <button class="accordion ">Special Delivery</button>
                          <div class="panel">
                             <p>
                                To ensure special delivery during the weekend/Sunday or Festive or Religious Holidays, M&P offers special delivery services that can be selected to ensure that your shipment reaches its destination without any delay.
                             </p>
                          </div>
                       </div>
                       <div class="fqa-main">
                          <button class="accordion ">Additional Information</button>
                          <div class="panel">
                             <p>
                               This service does not apply to documents sent for attestation, which requires 4 to 5 working days and is separate from overnight express delivery service, which schedules delivery for the next working day.
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
