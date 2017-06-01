

<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <div class="logo wow fadeInDown">
                        <a href="index.html"></a>
                    </div>
                    <h1 class="wow fadeInLeftBig">Maren one page template</h1>
                    <div class="description wow fadeInLeftBig">
                        <p>
                            This is a free responsive one page template made with the Bootstrap framework.
                            Check it out now. Download it, customize and use it as you like!
                        </p>
                    </div>
                    <div class="top-big-link wow fadeInUp">
                        <a class="btn btn-link-1" href="http://azmind.com">Download it</a>
                        <a class="btn btn-link-2 scroll-link" href="#services">Learn more</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Services -->
@if(isset($services) && is_object($services))

    <div class="services-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 services section-description wow fadeIn">
                    <h2>Our services</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>

            @foreach($services as $k => $service)
                @if($k == 0 || $k % 3 == 0)
                    <div class="row">
                @endif
                        <div class="row">
                            <div class="col-sm-4 services-box wow fadeInUp">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="services-box-icon">
                                            <i class="fa {{$service->icon}}"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3>{{$service->name}}</h3>
                                        <p>{{$service->text}}</p>
                                    </div>
                                </div>
                            </div>
                    @if(($k + 1) % 3 == 0)
                        </div>
                    @endif
            @endforeach

        </div>
    </div>

@endif


<!-- Great support -->

<div class="great-support-container section-container section-container-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 great-support section-description wow fadeIn">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 great-support-box wow fadeInLeft">
                <div class="great-support-box-text great-support-box-text-left">
                    <h3>Try our great support!</h3>
                    <p class="medium-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Ut wisi enim ad minim veniam, quis nostrud.
                        Exerci tation ullamcorper suscipit <span class="colored-text">lobortis nisl</span> ut aliquip ex ea commodo consequat.
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Ut wisi enim ad minim veniam, quis nostrud.
                        Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-sm-5 great-support-box great-support-box-phone wow fadeInUp">
                <img src="{{asset('assets/img/devices/iphone.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<!-- More services -->
@if(isset($other_services) && is_object($other_services))
    <div class="more-services-container section-container">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 more-services section-description wow fadeIn">
                    <h2>More services</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            @foreach($other_services as $k => $other_service)
                @if($k == 0 || $k % 2 == 0)
                    <div class="row">
                @endif
                        <div class="col-sm-6 more-services-box wow fadeInLeft">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="more-services-box-icon">
                                        <i class="fa {{$other_service->logo}}"></i>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <h3>{{$other_service->name}}</h3>
                                    <p>
                                        {{$other_service->text}}
                                    </p>
                                </div>
                            </div>
                        </div>
                @if(($k + 1) % 2 == 0)
                    </div>
                @endif
            @endforeach

        </div>
    </div>
@endif

<!-- Call to action -->
<div class="call-to-action-container section-container section-container-image-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                <p>
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                    aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 section-bottom-button wow fadeInUp">
                <a class="btn btn-link-1 scroll-link" href="#top-content">Download now</a>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->
@if(isset($portfolio) && is_object($portfolio))
    <div class="portfolio-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 portfolio section-description wow fadeIn">
                    <h2>Our portfolio</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>We've completed 537 projects since we started back in 2010. Check them out!</p>
                </div>
            </div>@foreach($portfolio as $k => $portfolioItem)
                @if($k == 0 || $k % 3 == 0)
                    <div class="row">
                        @endif
                        <div class="row">
                            <div class="col-sm-4 portfolio-box wow fadeInUp">
                                <div class="portfolio-box-image">
                                    {!!Html::image('assets/img/portfolio/'.$portfolioItem->image)!!}
                                </div>
                                <h3><a href="#">{{$portfolioItem['name']}}</a> <i class="fa fa-angle-right"></i></h3>
                                <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i>{{$portfolioItem['created_at']}}</div>
                                <p>{{$portfolioItem['description']}}</p>
                            </div>
                        @if(($k + 1) % 3 == 0)
                    </div>
                @endif
            @endforeach

    </div>
@endif

<!-- Testimonials -->

<div class="testimonials-container section-container section-container-image-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 testimonials section-description wow fadeIn">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp">
                <div role="tabpanel">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                            <div class="testimonial-image">
                                <img src="{{asset('assets/img/testimonials/1.jpg')}}" alt="" data-at2x="assets/img/testimonials/1.jpg">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur..."<br>
                                    <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="testimonial-image">
                                <img src="{{asset('assets/img/testimonials/2.jpg')}}" alt="" data-at2x="assets/img/testimonials/2.jpg">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                    ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                    <a href="#">Minim Veniam, nostrud.com</a>
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                            <div class="testimonial-image">
                                <img src="{{asset('assets/img/testimonials/3.jpg')}}" alt="" data-at2x="assets/img/testimonials/3.jpg">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Lorem ipsum dolor sit amet, consectetur..."<br>
                                    <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                            <div class="testimonial-image">
                                <img src="{{asset('assets/img/testimonials/4.jpg')}}" alt="" data-at2x="assets/img/testimonials/4.jpg">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                    ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                    <a href="#">Minim Veniam, nostrud.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                            <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Blog -->
@if(isset($news) && is_object($news))
<div class="blog-container section-container">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 blog section-description wow fadeIn">
                <h2>From the blog</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>
        @foreach($news as $k => $newsItem)
            @if($k == 0 || $k % 2 == 0)
                <div class="row">
                    @endif
                    <div class="col-sm-6 blog-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="blog-box-image">
                                    {!!Html::image('assets/img/blog/'.$newsItem->image)!!}
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3><a href="#">{{$newsItem->name}}</a> <i class="fa fa-angle-right"></i></h3>
                                <div class="blog-box-date"><i class="fa fa-calendar-o"></i> {{$newsItem->created_at}}</div>
                                <p>
                                    {{$newsItem->text}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @if(($k + 1) % 2 == 0)
                </div>
            @endif
        @endforeach


        <div class="row">
            <div class="col-sm-12 section-bottom-button wow fadeInUp">
                <a class="btn btn-link-1" href="#">Visit the blog</a>
            </div>
        </div>

    </div>
</div>
@endif
