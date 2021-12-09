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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/free-home-pickup.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Free Home
            <span>Pickup<b>!</b></span>
        </h5>
    </div>
</section>

<div class="inner-quotesection">
    <section class="quoteSection">
        <div class="container">
{{--            <div class="quotesec-hd mn-hd wow fadeInDown animated" data-wow-delay="0.4s">--}}
{{--                <h5>--}}
{{--                    Free Home--}}
{{--                    <span>Pickup Now<b>!</b></span>--}}
{{--                </h5>--}}
{{--            </div>--}}

            <div id="pickup-form"></div>
        </div>
    </section>
</div>

@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")

</body>
</html>
