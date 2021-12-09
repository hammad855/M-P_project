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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/logistics.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>M&P
            <span>Logistics<b>.</b></span>
        </h5>
    </div>
</section>

    <section class="logisticSection">
         <div class="container">
            <div class="shedsecBox-hd mn-hd wow fadeIn animated" data-wow-delay="0.5s">
               <h5>Wherever, whenever
                  <span>M&P Logistics<b>.</b></span>
               </h5>
               <p>
                  Logistics is there. Our third party logistics services are game-changer for any business. From carrying your raw materials or finished goods to one place from another, warehousing, tagging, packing and sorting and to delivering it to your end consumer in time and with absolute reliability, we have got it all managed.
               </p>
            </div>



            <div class="logisticSec-mainBox logisticSec-right">
               <div class="row align-items-center">
                  <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                     <div class="logisticsec-cont logisticsecright-cont mn-hd">
                        <h5>Fleet
                           <span>Management<b>.</b></span>
                        </h5>

                        <p>
                            Our acumen and experience helps businesses thrive. Beyond providing just a fleet of company owned vehicles, we provide an expert team that closely works with you to develop customized, customer centric strategies aimed at making a perfect brand impression. We also offer customized vehicles suiting your requirements and business needs. That also includes provision of tracker equipped vehicles across Pakistan with drivers specially trained by the motorway police.
                        </p>
                     </div>
                  </div>

                  <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.5s">
                     <div class="logisticsec-img">
                        <img src="{{asset("assets/images/logistic/img3.jpg")}}" alt="">
                     </div>
                  </div>
               </div>
            </div>

            <div class="logisticSec-mainBox logisticSec-left">
               <div class="row align-items-center">
                  <div class="col-md-5 mobleDiv-sm-pull wow fadeInLeft animated" data-wow-delay="0.4s">
                     <div class="logisticsec-img">
                        <img src="{{asset("assets/images/logistic/img4.jpg")}}" alt="">
                     </div>
                  </div>

                  <div class="col-md-7 mobleDiv-sm-push wow fadeInRight animated" data-wow-delay="0.5s">
                     <div class="logisticsec-cont logisticsecleft-cont mn-hd">
                        <h5>M&P
                           <span>Warehousing<b>.</b></span>
                        </h5>

                        <p>
                            Our nationwide warehouses can be home to your products and raw materials. Our geographically well-planned facilities can be dedicated or shared with clients to offer operational solutions, labor expansion and leveraging peak and seasonal demands.
                        </p>
                     </div>
                  </div>
               </div>
            </div>



            <div class="logisticSec-mainBox logisticSec-left">
               <div class="row align-items-center">
                  <div class="col-md-7 wow fadeInRight animated" data-wow-delay="0.5s">
                     <div class="logisticsec-cont logisticsecleft-cont mn-hd">
                        <h5>Reverse
                           <span>Logistics<b>.</b></span>
                        </h5>

                        <p>
                            If the process goes wrong somewhere or the end consumer needs are unmet after product delivery, we are also capable of handling the bring-it-back side of business. This includes complains and warranty claims.
                        </p>
                     </div>
                  </div>
                   <div class="col-md-5 wow fadeInLeft animated" data-wow-delay="0.4s">
                       <div class="logisticsec-img">
                           <img src="{{asset("assets/images/logistic/img6.jpg")}}" alt="">
                       </div>
                   </div>
               </div>
            </div>




         </div>
      </section>

@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")
</body>
</body>
</html>
