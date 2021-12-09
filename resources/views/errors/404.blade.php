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

    <section class="section404" style="background-image:url(assets/images/404/bg.jpg)">
        <div class="container">
            <div class="img404">
                <img src="assets/images/404/img1.png" alt="">
            </div>

            <h6>you didn’t break the internet, but we can’t find what you are looking for. </h6>

            <h5>What can knows more help you find today?</h5>

            <form>
                <div class="felid404">
                    <input type="text" placeholder="Search Here...">
                    <button type="submit">
                        <i class="far fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>


    @include("includes.footer")
    @include("includes.scripts")
</body>
</html>
