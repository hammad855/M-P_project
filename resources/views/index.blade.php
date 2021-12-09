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

<!-- style="background-image: url(assets/images/banner/bg-banner.jpg);" -->
<section class="mainBanner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="mb-left mainBanner-cont">
                    {!! html_entity_decode($contents->hero_section) !!}

                    <!-- <form action="#"> -->

                        <div id="tracking-input"></div>

                     <!-- </form> -->
                </div>
            </div>
            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="mb-right mainBanner-img">
                    <img src="assets/images/mainBanner-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sheduleSection">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.4s">
                <div class="shedSec-main">
                    <div class="shedSec-img">
                        <img src="assets/images/icon1.png" alt="">
                    </div>
                    <div class="shedSec-cont">
                        <h6>Working Hours</h6>
                        <p>Mon - Sat 09:00AM - 05:30PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                <div class="shedSec-main">
                    <div class="shedSec-img">
                        <img src="assets/images/icon2.png" alt="">
                    </div>
                    <div class="shedSec-cont">
                        <h6>Email Now!</h6>
                        <a href="mailto:contact@mulphilog.com">contact@mulphilog.com</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.8s">
                <div class="shedSec-main last">
                    <div class="shedSec-img">
                        <img src="assets/images/icon3.png" alt="">
                    </div>
                    <div class="shedSec-cont">
                        <h6>Get In Touch</h6>
                        <a href="Tel:021111202202">(021) 111-202-202</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{!! html_entity_decode($contents->features_section) !!}

@include("includes.aboutsection")

@include("includes.visionsection")

{{-- @include("includes.quotesection") --}}
<div id="get-quote"></div>

{!! html_entity_decode($contents->service_section) !!}

<section class="customerSection" style="background-image:url(assets/images/our-client-bg.jpg)">
    <div class="container">
        <div class="customer-hd mn-hd wow fadeInDown animated" data-wow-delay="0.4s">
            <h5>What Our
                <span>Customer Says<b>.</b></span>
            </h5>
        </div>

        <ul class="customer-slider wow bounceInDown animated" data-wow-delay="0.9s">
            <li>
                <div class="customer-main">
                    <div class="customer-img">
                        <div class="customer-profile">
                            <img src="assets/images/customer-img1.jpg" alt="">
                        </div>
                        <div class="customer-title">
                            <h6>Sara James</h6>
                            <span>Happay Customer</span>
                        </div>
                    </div>

                    <div class="customer-comment">
                        <p>
                            “M&P helped me build a sustainable delivery network for my company. I was able to tailor the
                            services perfectly according to my requirements..”
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="customer-main">
                    <div class="customer-img">
                        <div class="customer-profile">
                            <img src="assets/images/customer-img1.jpg" alt="">
                        </div>
                        <div class="customer-title">
                            <h6>Macron Smith</h6>
                            <span>Happay Customer</span>
                        </div>
                    </div>

                    <div class="customer-comment">
                        <p>
                            “Building a fast and secure supply chain takes effort. But with M&P, I can rest easy because
                            I know that my cargo is safe and sound.”
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="customer-main">
                    <div class="customer-img">
                        <div class="customer-profile">
                            <img src="assets/images/customer-img1.jpg" alt="">
                        </div>
                        <div class="customer-title">
                            <h6>Jacinda Adams</h6>
                            <span>Happay Customer</span>
                        </div>
                    </div>

                    <div class="customer-comment">
                        <p>
                            “I went through several different options to support my startup with delivery services. M&P
                            was by far the best provider out there by a mile!.”
                        </p>
                    </div>
                </div>
            </li>
        </ul>


    </div>
</section>

<section class="clientSection" style="background-image:url(assets/images/client/bg.jpg)">
    <div class="container">
        <div class="client-hd mn-hd wow fadeInDown animated" data-wow-delay="0.4s">
            <h5>Our
                <span>Clients<b>.</b></span>
            </h5>
        </div>

        <div class="client-list">
            <ul>
                <li class="wow fadeInDown animated" data-wow-delay="0.6s"><a href="#"><img
                            src="assets/images/client/client1.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="0.7s"><a href="#"><img
                            src="assets/images/client/client2.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="0.8s"><a href="#"><img
                            src="assets/images/client/client3.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="0.9s"><a href="#"><img
                            src="assets/images/client/client4.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="1.0s"><a href="#"><img
                            src="assets/images/client/client5.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="1.1s"><a href="#"><img
                            src="assets/images/client/client6.png" alt=""></a></li>
                <li class="last wow fadeInDown animated" data-wow-delay="1.2s"><a href="#"><img
                            src="assets/images/client/client7.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="1.3s"><a href="#"><img
                            src="assets/images/client/client8.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="1.4s"><a href="#"><img
                            src="assets/images/client/client9.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="1.5s"><a href="#"><img
                            src="assets/images/client/client10.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="1.6s"><a href="#"><img
                            src="assets/images/client/client11.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="1.7s"><a href="#"><img
                            src="assets/images/client/client12.png" alt=""></a></li>


                <li class="wow fadeInDown animated" data-wow-delay="1.8s"><a href="#"><img
                            src="assets/images/client/client13.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="1.9s"><a href="#"><img
                            src="assets/images/client/client14.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="2.0s"><a href="#"><img
                            src="assets/images/client/client15.png" alt=""></a></li>
                <!-- <li class="wow fadeInDown animated" data-wow-delay="2.1s"><a href="#"><img
                            src="assets/images/client/client16.jpg" alt=""></a></li> -->
                <li class="wow fadeInDown animated" data-wow-delay="2.1s"><a href="#"><img
                            src="assets/images/client/client17.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="2.2s"><a href="#"><img
                            src="assets/images/client/client18.png" alt=""></a></li>
                <li class="wow fadeInDown animated" data-wow-delay="2.3s"><a href="#"><img
                            src="assets/images/client/client19.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</section>

<section class="faqSection" style="background-image:url(assets/images/faq-bg.jpg)">
    <div class="container">
        <div class="faq-hd mn-hd wow fadeInDown animated" data-wow-delay="0.4s">
            <h5>Frequently Asked
                <span>Question<b>.</b></span>
            </h5>
        </div>

        <div class="faq-wrap wow bounceInLeft animated" data-wow-delay="0.9s">
            <div class="fqa-main">
                <button class="accordion ">How can I track my shipments?</button>
                <div class="panel">
                    <p>
                        Shipments can be tracked through the dedicated portal on the homepage by entering the tracking ID/Consignment Number.
                    </p>
                </div>
            </div>
            <div class="fqa-main">
                <button class="accordion ">How quickly can M&P deliver my package?</button>
                <div class="panel">
                    <p>
                        M&P offers several options for quick delivery of shipments including same-day delivery service (selected cities, within the city), overnight express delivery (delivery next day), special Breakfast delivery (urgent delivery of documents ad other shipment types), and other options. You can choose from all available options depending on your requirements.
                    </p>
                </div>
            </div>
            <div class="fqa-main">
                <button class="accordion ">How can I get in touch with M&P for any queries or customer support?</button>
                <div class="panel">
                    <p>
                        You can get in touch with our representatives by directly calling our helpline at (021) 111-202-202 or sending an email to contact@mulphilog.com.
                    </p>
                </div>
            </div>
            <div class="fqa-main">
                <button class="accordion ">How can I get in touch with M&P you through social media?</button>
                <div class="panel">
                    <p>
                       M&P supports official social media pages across all popular mediums. Our social media links can be found on the homepage and contact page. Official social media links are listed below:

                       <ul>
                           <li>
                               Facebook: <a href="https://www.facebook.com/MPExpressLogistics/">https://www.facebook.com/MPExpressLogistics/</a>
                           </li>
                           <li>Instagram: <a href="https://www.instagram.com/mullerandphippscourier/">https://www.instagram.com/mullerandphippscourier/</a></li>
                           <li>Twitter: <a href="https://twitter.com/MnPCourier">https://twitter.com/MnPCourier</a></li>
                           <li>LinkedIn: <a href="https://www.linkedin.com/company/m&p-express-logistics">https://www.linkedin.com/company/m&p-express-logistics</a></li>
                           <li>YouTube: <a href="https://www.youtube.com/channel/UCiQUdqvYBU4Hw9_-G8CYezg">https://www.youtube.com/channel/UCiQUdqvYBU4Hw9_-G8CYezg</a></li>
                       </ul>
                    </p>
                </div>
            </div>
            <div class="fqa-main">
                <button class="accordion ">What are M&P operating hours?</button>
                <div class="panel">
                    <p>
                        M&P operates Monday to Saturday from 9 A.M (morning) to 5:30 P.M (evening).
                    </p>
                </div>
            </div>

            <div class="fqa-main">
                <button class="accordion ">Does M&P offer Same Day Service?</button>
                <div class="panel">
                    <p>
                        Yes, M&P offers same-day delivery in Karachi, Lahore, and Islamabad to locations within each respective city.
                    </p>
                </div>
            </div>
            <div class="fqa-main">
                <button class="accordion ">Does M&P offer Holiday Service?</button>
                <div class="panel">
                    <p>
                        Yes, M&P offers a special holiday delivery service for Sundays/Weekend and Festive/Religious Holidays across Pakistan.
                    </p>
                </div>
            </div>
            <div class="fqa-main">
                <button class="accordion ">How do I find out M&P rates?</button>
                <div class="panel">
                    <p>
                        You can find M&P rates for each service on the respective page or use the cost calculator to generate an estimate depending on the type of service required and the weight/size category.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="articleSection">
    <div class="container">
        <div class="artsec-hd mn-hd wow fadeInDown animated" data-wow-delay="0.4s">
            <h5>Recent
                <span>Articles<b>.</b></span>
            </h5>
        </div>

        <div class="row">
            <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.6s">
                <div class="artsec-card">
                    <div class="artsec-img">
                        <img src="assets/images/img7.jpg" alt="">
                    </div>

                    <div class="aersec-cont">
                        <h3><span><i class="fal fa-calendar-alt"></i></span> Jan 20, 2019</h3>

                        <h4>Insights, Management</h4>

                        <h5>Stay Home, Stay Safe! Stay Courier Connected Home Pickup Service!</h5>

                        <p>It is often said, “desperate times call for desperate measures.”</p>

                        <div class="aersec-btn">
                            <a href="home-pickup.php"><i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInDown animated" data-wow-delay="0.8s">
                <div class="artsec-card">
                    <div class="artsec-img">
                        <img src="assets/images/img8.jpg" alt="">
                    </div>

                    <div class="aersec-cont">
                        <h3><span><i class="fal fa-calendar-alt"></i></span> Jan 20, 2019</h3>

                        <h4>Insights, Management</h4>

                        <h5>The Future of the Courier & Logistics Industry in Pakistan!</h5>

                        <p>According to the Asian Development Bank, COVID-19 and the resulting pandemic have cost the
                            country as much as between US$ 16.387 million and US$ 49.95 billion.</p>

                        <div class="aersec-btn">
                            <a href="the-future.php"><i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInDown animated" data-wow-delay="1.0s">
                <div class="artsec-card">
                    <div class="artsec-img">
                        <img src="assets/images/img9.jpg" alt="">
                    </div>

                    <div class="aersec-cont">
                        <h3><span><i class="fal fa-calendar-alt"></i></span> Jan 20, 2019</h3>

                        <h4>Insights, Management</h4>

                        <h5>Supporting Our Youth’s Passion for Sports!</h5>

                        <p>Sports help to groom our youth as it guides them to develop skills that have direct workplace
                            crossover.</p>

                        <div class="aersec-btn">
                            <a href="supporting-our-youth.php"><i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletterSection">
    <div class="container">
        <div class="row">
            <div class="col-md-8 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="newslet-cont mn-hd">
                    <h5>Subscribe to Our
                        <span>Newsletter<b>.</b></span>
                    </h5>

                    <p>
                        Sign up for industry alerts, news & insights.
                    </p>

                    <form action="#">
                        <div class="newsletter-feild">
                            <input type="email" placeholder="Enter Your Email">
                            <button><i class="fal fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="newsletter-img wow lightSpeedIn animated" data-wow-delay="0.7s">
                    <img src="assets/images/img10.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@include("includes.footer")
@include("includes.scripts")
</body>
</html>
