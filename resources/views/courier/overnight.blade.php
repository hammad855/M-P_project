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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/overnight.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Overnight
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
                        <h5>Fast Delivery
                           <span>for Rapid Progress<b>.</b></span>
                        </h5>

                        <p>
                           Whether you wish to send a timely package to your loved ones or ensure that your products reach customers as soon as possible, our overnight delivery service makes it possible in half the time. Available for all shipment types and weight categories, our overnight delivery service ensures next-day delivery across all locations (excluding remote areas) on a priority basis.
                        </p>

                        <p>
                           M&P also offers value-added services for expensive and fragile items or sensitive documents to ensure that your shipment reaches its destination in the best possible condition.
                        </p>

                        <p class="last">
                           You can also pair the overnight delivery with our Cash-On-Delivery (COD) service to receive payments from customers without needing any registration and expand your business across the country with ease.
                        </p>
                     </div>
                  </div>

                  <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                     <div class="sds-img">
                        <img src="{{asset("assets/images/pic/img11.jpg")}}" alt="">
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
                        <p class="last">
                           M&P Overnight Delivery ensures that your shipments are delivered to their destination over the next working day. this means that your shipment will reach its destination within 24-48 hours.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sds-bottom">
               <div class="row">
                  <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">
                     <div class="sds-cont mn-hd">
                        <p><b>M&P Overnight Delivery is best for sending time-sensitive shipments that require quick delivery across Pakistan within the next working day.</b></p>
                     </div>
                  </div>
                  <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0.4s">
                     <div class="sds-cont mn-hd">
                        <div class="visionsec-cont mn-hd">
                           <ul>
                              <li>24-48 hours delivery time</li>
                              <li>Supports COD</li>
                              <li>Supports My Flyer and My Box</li>
                           </ul>
                        </div>
                     </div>

                    <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">
                       <div class="fqa-main">
                          <button class="accordion ">Supported Services</button>
                          <div class="panel">
                             <p>
                                The overnight delivery service is available for all weight and size categories including My Flyer (small, medium, large) and My Box (1 – 30 KG).
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
                               This service does not apply to documents sent for attestation which requires 4 to 5 working days and is separate from same-day delivery service which is only available in select cities (Karachi, Islamabad, Lahore) for locations within the city.
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
