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



<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/life-at-m&p.jpg")}})">
         <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
            <h5>Life At
               <span>M&P<b>.</b></span>
            </h5>
         </div>
      </section>

      <section class="liveSection">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="livesec-main">
                     <a href="{{asset("assets/images/live/orange-day/img1.jpg")}}" data-fancybox="orange-day" data-caption="<b>M&P Orange Day!</b> <br /> This is a multi-line caption">
                        <img src="{{asset("assets/images/live/orange-day/img1.jpg")}}" alt="">

                        <div class="livesec-cont-btn">
                           <h4>M&P Orange <span> Day<b>.</b></span></h4>
                        </div>
                     </a>

                     <div class="d-none">
                        <a href="{{asset("assets/images/live/orange-day/img2.jpg")}}" data-fancybox="orange-day" data-caption="<b>M&P Orange Day!</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/orange-day/img2.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/orange-day/img3.jpg")}}" data-fancybox="orange-day" data-caption="<b>M&P Orange Day!</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/orange-day/img3.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/orange-day/img4.jpg")}}" data-fancybox="orange-day" data-caption="<b>M&P Orange Day!</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/orange-day/img4.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/orange-day/img5.jpg")}}" data-fancybox="orange-day" data-caption="<b>M&P Orange Day!</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/orange-day/img5.jpg")}}" alt="">
                        </a>
                     </div>                     
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="livesec-main">
                     <a href="{{asset("assets/images/live/sportlight/img1.jpg")}}" data-fancybox="sportlight" data-caption="<b>M&P Sportlight</b> <br /> This is a multi-line caption">
                        <img src="{{asset("assets/images/live/sportlight/img1.jpg")}}" alt="">

                        <div class="livesec-cont-btn">
                           <h4>M&P <span> Spotlight<b>.</b></span></h4>
                        </div>
                     </a>

                     <div class="d-none">
                        <a href="{{asset("assets/images/live/sportlight/img2.jpg")}}" data-fancybox="sportlight" data-caption="<b>M&P Sportlight</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/sportlight/img2.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/sportlight/img3.jpg")}}" data-fancybox="sportlight" data-caption="<b>M&P Sportlight</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/sportlight/img3.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/sportlight/img4.jpg")}}" data-fancybox="sportlight" data-caption="<b>M&P Sportlight</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/sportlight/img4.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/sportlight/img5.jpg")}}" data-fancybox="sportlight" data-caption="<b>M&P Sportlight</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/sportlight/img5.jpg")}}" alt="">
                        </a>
                     </div>                        
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="livesec-main">
                     <a href="{{asset("assets/images/live/award-ceremony/img1.jpg")}}" data-fancybox="award-ceremony" data-caption="<b>M&P Award Ceremony</b> <br /> This is a multi-line caption">
                        <img src="{{asset("assets/images/live/award-ceremony/img1.jpg")}}" alt="">

                        <div class="livesec-cont-btn">
                           <h4>M&P <span> Award<b>.</b></span></h4>
                        </div>
                     </a>

                     <div class="d-none">
                        <a href="{{asset("assets/images/live/award-ceremony/img2.jpg")}}" data-fancybox="award-ceremony" data-caption="<b>M&P Award Ceremony</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/award-ceremony/img2.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/award-ceremony/img3.jpg")}}" data-fancybox="award-ceremony" data-caption="<b>M&P Award Ceremony</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/award-ceremony/img3.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/award-ceremony/img4.jpg")}}" data-fancybox="award-ceremony" data-caption="<b>M&P Award Ceremony</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/award-ceremony/img4.jpg")}}" alt="">
                        </a>

                        <a href="{{asset("assets/images/live/award-ceremony/img5.jpg")}}" data-fancybox="award-ceremony" data-caption="<b>M&P Award Ceremony</b> <br /> This is a multi-line caption">
                           <img src="{{asset("assets/images/live/award-ceremony/img5.jpg")}}" alt="">
                        </a>
                     </div>                       
                  </div>
               </div>
            </div>
         </div>
      </section>


@include("includes.footer")
@include("includes.scripts")
</body>
</html>
