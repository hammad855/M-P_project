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

<section class="innerBanner" style="background-image:url({{asset("assets/images/banner/leadership.png")}})">
    <div class="container wow lightSpeedIn animated" data-wow-delay="0.7s">
        <h5>Our
            <span>Leadership<b>.</b></span>
        </h5>
    </div>
</section>
@foreach($leaders as $index => $leader)
    <section class="{{$index % 2 ? 'leadershipSection-left' : 'leadershipSection-right'}}">
        <div class="container">
            <div class="row align-items-center">
                @if($index % 2 === 0)
                    <div class="col-md-5 wow fadeInLeft animated" data-wow-delay="0.4s">
                        <div class="lssl-img">
                            <img src="{{asset("storage/$leader->leader_picture")}}" alt="">
                        </div>
                    </div>
                @endif
                <div class="col-md-7 mobleDiv-sm-pull wow fadeInLeft animated" data-wow-delay="0.4s">
                    <div class="lssl-cont mn-hd">
                        <h5>{{$leader->first_name}}
                            <span>{{$leader->last_name}}<b>.</b></span>
                        </h5>

                        <h6>{{$leader->designation}}</h6>

                        <p>
                            {!! html_entity_decode($leader->about_leader) !!}
                        </p>
                    </div>
                </div>
                @if($index % 2 != 0)
                    <div class="col-md-5 mobleDiv-sm-push wow fadeInRight animated" data-wow-delay="0.4s">
                        <div class="lssl-img">
                            <img src="{{asset("storage/$leader->leader_picture")}}" alt="">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endforeach

@include("includes.newslettersection")

@include("includes.footer")
@include("includes.scripts")
</body>
</html>
