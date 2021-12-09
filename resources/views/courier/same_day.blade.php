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

    <section class="innerBanner" style="background-image:url({{asset("assets/images/banner/same-day.jpg")}})">
         <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
            <h5>Same Day
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
                        <h5>For Shipments
                           <span>that Can’t Wait<b>.</b></span>
                        </h5>

                        <p>
                           Some things should not be delayed. That is why M&P offers same-day delivery services in select locations to ensure swift delivery of your shipments <b>within 24 hours.</b>
                        </p>

                        <p>
                           M&P Same Day Delivery service enables you to deliver documents and packages <b> within the same working day </b>  to destinations within your city. This service is available across Karachi, Lahore, and Islamabad.
                        </p>

                        <p class="last">
                           With M&P Same Day Delivery, you can forward shipments across <b> all weight and size categories </b> to any location within your city while ensuring special handling for expensive or fragile items and sensitive documents if required.
                        </p>
                     </div>
                  </div>

                  <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                     <div class="sds-img">
                        <img src="{{asset("assets/images/pic/img25.jpg")}}" alt="">
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
                           The M&P Same Day Delivery service is best for shipments that must be delivered within the same working day. M&P offers special precautions and value-added services to ensure that your shipment remains safe and protected.
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
                              <li>Delivery within 24 hours.</li>
                              <li>Supports My Flyer and My Box</li>
                              <li>Supports Hand-Carry and Special Handling</li>
                              <li>Supports Value-Added Services (Cellophane Wrap, Brown Box)</li>
                           </ul>
                        </div>
                     </div>

                    <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">
                       <div class="fqa-main">
                          <button class="accordion ">Supported Locations</button>
                          <div class="panel">
                             <p>
                                The M&P Same Day Delivery service is currently available in Islamabad, Karachi, and Lahore for delivery locations within the same city. This service does not apply to locations outside of the cities mentioned above.
                             </p>
                          </div>
                       </div>
                       <div class="fqa-main">
                          <button class="accordion ">Supported Services</button>
                          <div class="panel">
                             <p>
                               The same-day delivery service is available for all weight and size categories including My Flyer (small, medium, large) and My Box (1 – 30 KG).
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
                               This service does not apply to documents sent for attestation which requires 4 to 5 working days and is separate from overnight delivery service which schedules delivery for the next working day.
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
