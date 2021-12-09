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


<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/special-handling.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Special
            <span>Handling<b>.</b></span>
        </h5>
    </div>
</section>

<section class="cellophaneSection">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="cellsec-cont mn-hd">
                    <h5>If You Want
                        <span>To Make Your Packaging<b>.</b></span>

                        <p>
                            Everyone wants their product to reach them unscratched and in a protective layer of bubble wrap, stuffing, etc to make sure it is absolutely safe. Here at M&P, we make it our top priority to send out all our deliveries within safety measures and for those measures to be extra effective we have a special handling service. Our Special Handling Service takes into account all the details of the product and then according to our client’s satisfaction we put up indication on the box fragile, handle with care, etc.
                            <br><br>
                            Our special handling delivery service takes care of the package handling until it reaches you untethered.
                        </p>
                    </h5>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="cellsec-img">
                    <img src="{{asset("assets/images/value-add/img3.jpg")}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")
</body>
</html>
