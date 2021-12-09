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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/express-cargo.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>M&P Express
            <span>Cargo<b>.</b></span>
        </h5>
    </div>
</section>

    <section class="samedaySection">
         <div class="container">
            <div class="sds-top">
               <div class="row align-items-center">
                  <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                     <div class="sds-cont sds-cont1 mn-hd">
                        <h5>M&P - Creating
                           <span>Possibilities<b>.</b></span>
                        </h5>

                        <p>
                           M&P makes it possible for our customers to send large heavy shipments across the country for a fraction of the cost with the most secure and expansive infrastructure in Pakistan.
                        </p>

                        <p>
                           The M&P Express Cargo facility enables you to forward large shipments above 50 KG to specific locations across the country through reliable and secure transportation channels for quick delivery.
                        </p>

                        <p>
                            Our express cargo solutions are supported by a dedicated fleet and optimized for heavy shipments that require special care and precautions.
                        </p>

                        <p class="last">
                           With M&P Same Day Delivery, you can forward shipments across <b> all weight and size categories </b> to any location within your city while ensuring special handling for expensive or fragile items and sensitive documents if required.Offering the lowest cargo rates in the region, the M&P Express cargo delivers your shipments within 3-4 working days to several major locations within the country.
                        </p>
                     </div>
                  </div>

                  <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                     <div class="sds-img">
                        <img src="{{asset("assets/images/inner/img1.png")}}" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="sds-meddle">
               <div class="row align-items-center">
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
                           The M&P Express Cargo service is best suited for large and heavy shipments that require special handling and transportation.
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
                              <li>3 – 4 Days Delivery Time</li>
                              <li>As Low as PKR 40/-</li>
                              <li>Best Suited for Heavy Shipments Above 50 KG</li>
                              <li>Supports 20+ Delivery Locations</li>
                           </ul>
                        </div>
                     </div>

                    <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">
                       <div class="fqa-main">
                          <button class="accordion ">Supported Locations</button>
                          <div class="panel">
                             <p>
                                The M&P Express Cargo Service is currently available for delivery to the following locations:
                             </p>

                             <ul>
                                 <li>(List?)</li>
                             </ul>
                          </div>
                       </div>
                       <div class="fqa-main">
                          <button class="accordion ">Weight and Size Range</button>
                          <div class="panel">
                             <p>
                               M&P Express Cargo supports shipments ranging from 50KG and above.
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
</body>
</html>
