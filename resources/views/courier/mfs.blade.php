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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/easy-payment.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Easy
            <span>Payments<b>.</b></span>
        </h5>
    </div>
</section>

<section class="cellophaneSection">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="cellsec-cont mn-hd">
                    <h5>Mobile Financial
                        <span>Services<b>.</b></span>

                        <p>
                            The ongoing technology and digital revolution, led by ever increasing penetration of smart
                            phones and internet on mobile devices is revolutionizing the global payment landscape.

                            Being a technology driven company, we are the first to offer our customers one stop solution
                            for all their Mobile financial services (MFS), needs. All our walk-in customers, can use
                            smartphones and other devices to utilize our financial services, like: QR payments, domestic
                            remittance, digital account top ups, money transferring , payment of utility bills, payment
                            of educational institutes' fees and IBFT (Inter Bank Funds Transfer).

                            We have pulled off successful alliances with Jazz Cash, Telenor Easy Paisa and HBL Konnect
                            which are live at all our express centers. More to this we are rigorously expanding our MFS
                            portfolio by bringing in more Key players who have shaped such services across the country.
                        </p>
                    </h5>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="cellsec-img">
                    <img src="{{asset("assets/images/value-add/img8.jpg")}}" alt="">
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
