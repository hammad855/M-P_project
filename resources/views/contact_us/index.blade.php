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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/contact.jpg")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Contact
            <span>Us<b>.</b></span>
        </h5>
    </div>
</section>

<section class="contactFormSection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="contactf-cont mn-hd">
                    <h5>Get In
                        <span>Touch<b>.</b></span>
                    </h5>

                    <p>
                        <b>Have any inquiry or some feedback for us?</b><br>
                        <br>
                        Fill out the details and our customer care representative will establish a contact with you.
                    </p>

                    <ul>
                        <li>
                            <div class="cfs-links-card">
                                <span><i class="far fa-envelope-open"></i></span>

                                <div class="cfs-links">
                                    <h2>Email</h2>
                                    <a href="mailto:contact@mulphilog.com">contact@mulphilog.com</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cfs-links-card">
                                <span><i class="fas fa-phone-alt"></i></span>

                                <div class="cfs-links">
                                    <h2>Phone</h2>
                                    <a href="Tel:021111202202"> (021) 111-202-202</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cfs-links-card">
                                <span><i class="fas fa-map-marker-alt"></i></span>

                                <div class="cfs-links">
                                    <h2>Head Office</h2>
                                    <p>C-17, Korangi Road،, D.H.A Phase II - Extension, Karachi, Pakistan</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5 wow fadeInRight animated" data-wow-delay="0.6s">
                <div class="contactf-form">
                    <div class="cfs-field">
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="cfs-field">
                        <input type="text" placeholder="Email Address">
                    </div>
                    <div class="cfs-field">
                        <input type="text" placeholder="Subject">
                    </div>
                    <div class="cfs-field">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="cfs-field">
                        <button>Submit Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mapSection wow zoomIn animated" data-wow-delay="0.4s">
    <!-- <img src="assets/images/full-map.jpg" alt=""> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.832130819081!2d67.06764791500237!3d24.835413784065672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33c30057972b3%3A0x5244b8df0195c6ab!2sM%26P%20Express%20Logistics%20(Pvt.)%20Ltd.!5e0!3m2!1sen!2s!4v1632741459611!5m2!1sen!2s"  height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>


@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")

</body>
</html>
