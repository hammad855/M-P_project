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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/warehousing.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Warehousing
            <span>Distribution<b>.</b></span>
        </h5>
    </div>
</section>

<section class="warehouseSection-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="warehouse-cont mn-hd">
                    <h5>Simple
                        <span>Warehousing<b>.</b></span>
                    </h5>

                    <h6>
                        & Fulfilment For The Modern Seller.
                    </h6>

                    <p>
                        Being the world’s leading courier service company we tend to fulfill our clients’ every
                        requirement and let them focus on upscaling their business from big to bigger. We provide
                        warehousing facilities to our clients as they require. We have state-of-the-art warehouses that
                        house your products and materials. In addition to our warehouse storage, we also provide
                        solutions for operation, labor expansion, leveraging peaks, and seasonal demand. While housing
                        the products we also offer pick and pack services that include secure packaging,
                        tagging/labeling, and track record of the inventory.<br><br>
                        M&P courier has a dedicated chartered Boeing 737 Aircraft also to help us serve 12000+ corporate
                        clients as well as a cargo warehouse that helps with heavier shipments and makes the delivery in
                        less time possible.
                    </p>

                    <a href="Tel:+5565454117">
                        <span><i class="fal fa-phone-alt"></i></span>
                        <em>Get in Touch <br>+55 654 541 17</em>
                    </a>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.5s">
                <div class="warehouse-img">
                    <img src="{{asset("assets/images/img13.jpg")}}" alt="">
                </div>
            </div>
        </div>

    </div>
</section>

<section class="warehouseSection-two">
    <div class="container">
        <div class="warehousesec2-hd mn-hd wow fadeInDown animated" data-wow-delay="0.4s">
            <h5>How We
                <span>Work<b>.</b></span>
            </h5>
        </div>

        <div class="row">
            <div class="col-md-4 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="homesec2-main">
                    <div class="homesec2-img ">
                        <img src="assets/images/icon8.png" alt="">
                    </div>
                    <div class="homesec2-cont">
                        <h6>Store</h6>
                        <p>Our courier service is easily integrated into your website to manage product delivery
                            efficiently and effortlessly all in while moving at a faster pace.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.5s">
                <div class="homesec2-main">
                    <div class="homesec2-img">
                        <img src="{{asset("assets/images/icon9.png")}}" alt="">
                    </div>
                    <div class="homesec2-cont">
                        <h6>Pick & Pack</h6>
                        <p>As we house the products we also offer pick and pack services that include secure packaging,
                            tagging/labeling, and track record of the inventory.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp animated" data-wow-delay="0.6s">
                <div class="homesec2-main">
                    <div class="homesec2-img">
                        <img src="{{asset("assets/images/icon10.png")}}" alt="">
                    </div>
                    <div class="homesec2-cont">
                        <h6>Deliver</h6>
                        <p>Our courier team has a well-strategized delivery schedule that ensures the products are
                            delivered before time all safe and secure without any worries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="warehouseSection-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.6s">
                <div class="visionsec-cont whouse3-cont mn-hd">
                    <h5>M&P <span>Courier</span>
                        <span>Services<b>.</b></span>
                    </h5>

                    <p>
                        M&P courier service is the fastest way to get your deliveries on time seamlessly. Our courier
                        service makes sure the dispatched product is perfectly packed and secured with respective
                        indicator stickers so that the package remains undamaged.
                    </p>

                    <h6>We offer many easy options to facilitate your business requirements.</h6>

                    <ul>
                        <li>Cost-effective</li>
                        <li>No minimum limit</li>
                        <li>Transparent pricing</li>
                        <li>Long term contracts</li>
                        <li>Scaleable</li>
                        <li>Safe & Secure</li>
                        <li>Short term contracts</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.5s">
                <div class="warehouse3-img">
                    <img src="{{asset("assets/images/img14.jpg")}}" alt="">
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
