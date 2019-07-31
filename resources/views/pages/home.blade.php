@extends('main')
@section('content')
 <div class="clearfix"></div>
    <div class="banner" style="background-image:url(assets/img/banner-9.jpg);">
        <div class="container">
            <div class="banner-caption">
                <div class="col-md-12 col-sm-12 banner-text">
                    <h1>7,000+ Browse Jobs</h1>
                    <form class="form-horizontal" action="{{Route('search.home')}}" method="get" >
                        <div class="col-md-4 no-padd">
                            <div class="input-group">
                                <input type="text" class="form-control right-bor" id="joblist" name="searchs" 
                                                            placeholder="Skills, Designations, Companies">
                            </div>
                        </div>
                        <div class="col-md-3 no-padd">
                            <div class="input-group">
                            <input type="text" class="form-control right-bor" id="location" name="locations" 
                                                            placeholder="Search By Location..">
                            </div>
                        </div>
                        <div class="col-md-3 no-padd">
                            <div class="input-group">
                                <select id="choose-city" class="form-control">
                                    <option>Choose City</option>
                                    <option>Chandigarh</option>
                                    <option>London</option>
                                    <option>England</option>
                                    <option>Pratapcity</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 no-padd">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary">Search Job</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="company-brand">
            <div class="container">
                <div id="company-brands" class="owl-carousel">
                    <div class="brand-img"><img src="assets/img/microsoft-home.png" class="img-responsive" alt=""/>
                    </div>
                    <div class="brand-img"><img src="assets/img/img-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/mothercare-home.png" class="img-responsive" alt=""/>
                    </div>
                    <div class="brand-img"><img src="assets/img/paypal-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/serv-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/xerox-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/yahoo-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/mothercare-home.png" class="img-responsive" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>200 New Jobs</p>

                    <h2>New & Random <span>Jobs</span></h2>
                </div>
            </div>
            <div class="row extra-mrg">
@foreach ($jobs as $job)
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img">
                            <img src="/images/{{ $job->logo}}" class="img-responsive"
                                                                alt=""/>
                                                            </div>
                        <div class="brows-job-position">
                            <h3><a href="{{ route('job.detail', $job->id) }}">{{$job->title}}</a>
                            </h3>

                            <p><span>{{ $job->company_name }}</span></p>
                        </div>
                      {{--   <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="part-time">{{ $job->updated_at }}</span></div> --}}
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>{{ $job->location }}</p>
                                </div>
                            </li>
                                          <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>{{ $job->updated_at }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
@endforeach
            </div>

        <div class="paginate-center">
     <nav class="nav-lef-right wrap-paginate js-center" aria-label="Page navigation activity">
        {{ $jobs->links() }}
    </nav>
        </div>


        </div>
    </section>
    <div class="clearfix"></div>
    <section class="video-sec dark" id="video" style="background-image:url(assets/img/banner-10.jpg);">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>Best For Your Projects</p>

                    <h2>Watch Our <span>video</span></h2>
                </div>
            </div>
            <div class="video-part"><a href="#" data-toggle="modal" data-target="#my-video" class="video-btn"><i
                    class="fa fa-play"></i></a></div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="how-it-works">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Working Process</p>

                        <h2>How It <span>Works</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-1.png" class="img-responsive" alt=""/><span
                                class="process-num">01</span></span>
                        <h4>Create An Account</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-2.png" class="img-responsive" alt=""/><span
                                class="process-num">02</span></span>
                        <h4>Search Jobs</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-3.png" class="img-responsive" alt=""/><span
                                class="process-num">03</span></span>
                        <h4>Save & Apply</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>What Say Our Client</p>

                    <h2>Our Success <span>Stories</span></h2>
                </div>
            </div>
            <div class="row">
                <div id="client-testimonial-slider" class="owl-carousel">
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                        <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor et dolore magna aliqua.</p>

                        <h3 class="client-testimonial-title">Lacky Mole</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-2.jpg" alt=""></div>
                        <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor et dolore magna aliqua.</p>

                        <h3 class="client-testimonial-title">Karan Wessi</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-3.jpg" alt=""></div>
                        <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor et dolore magna aliqua.</p>

                        <h3 class="client-testimonial-title">Roul Pinchai</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                        <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor et dolore magna aliqua.</p>

                        <h3 class="client-testimonial-title">Adam Jinna</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Top Freelancer</p>

                        <h2>Hire Expert <span>Freelancer</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="freelance-container style-2">
                        <div class="freelance-box">
                            <span class="freelance-status">Available</span>
                            <h4 class="flc-rate">$17/hr</h4>

                            <div class="freelance-inner-box">
                                <div class="freelance-box-thumb"><img src="assets/img/can-5.jpg"
                                                                      class="img-responsive img-circle" alt=""/></div>
                                <div class="freelance-box-detail">
                                    <h4>Agustin L. Smith</h4>
                                    <span class="location">Australia</span>
                                </div>
                                <div class="rattings"><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i
                                        class="fa fa-star fill"></i><i class="fa fa-star-half fill"></i><i
                                        class="fa fa-star"></i></div>
                            </div>
                            <div class="freelance-box-extra">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                <ul>
                                    <li>Php</li>
                                    <li>Android</li>
                                    <li>Html</li>
                                    <li class="more-skill bg-primary">+3</li>
                                </ul>
                            </div>
                            <a href="freelancer-detail.html" class="btn btn-freelance-two bg-default">View Detail</a><a
                                href="freelancer-detail.html" class="btn btn-freelance-two bg-info">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="freelance-container style-2">
                        <div class="freelance-box">
                            <span class="freelance-status bg-warning">At Work</span>
                            <h4 class="flc-rate">$22/hr</h4>

                            <div class="freelance-inner-box">
                                <div class="freelance-box-thumb"><img src="assets/img/can-5.jpg"
                                                                      class="img-responsive img-circle" alt=""/></div>
                                <div class="freelance-box-detail">
                                    <h4>Delores R. Williams</h4>
                                    <span class="location">United States</span>
                                </div>
                                <div class="rattings"><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i
                                        class="fa fa-star fill"></i><i class="fa fa-star-half fill"></i><i
                                        class="fa fa-star"></i></div>
                            </div>
                            <div class="freelance-box-extra">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                <ul>
                                    <li>Php</li>
                                    <li>Android</li>
                                    <li>Html</li>
                                    <li class="more-skill bg-primary">+3</li>
                                </ul>
                            </div>
                            <a href="freelancer-detail.html" class="btn btn-freelance-two bg-default">View Detail</a><a
                                href="freelancer-detail.html" class="btn btn-freelance-two bg-info">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="freelance-container style-2">
                        <div class="freelance-box">
                            <span class="freelance-status">Available</span>
                            <h4 class="flc-rate">$19/hr</h4>

                            <div class="freelance-inner-box">
                                <div class="freelance-box-thumb"><img src="assets/img/can-5.jpg"
                                                                      class="img-responsive img-circle" alt=""/></div>
                                <div class="freelance-box-detail">
                                    <h4>Daniel Disroyer</h4>
                                    <span class="location">Bangladesh</span>
                                </div>
                                <div class="rattings"><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i
                                        class="fa fa-star fill"></i><i class="fa fa-star-half fill"></i><i
                                        class="fa fa-star"></i></div>
                            </div>
                            <div class="freelance-box-extra">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                <ul>
                                    <li>Php</li>
                                    <li>Android</li>
                                    <li>Html</li>
                                    <li class="more-skill bg-primary">+3</li>
                                </ul>
                            </div>
                            <a href="freelancer-detail.html" class="btn btn-freelance-two bg-default">View Detail</a><a
                                href="freelancer-detail.html" class="btn btn-freelance-two bg-info">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center"><a href="freelancers-2.html" class="btn btn-primary">Load More</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="download-app" style="background-image:url(assets/img/banner-7.jpg);">
        <div class="container">
            <div class="col-md-5 col-sm-5 hidden-xs"><img src="assets/img/iphone.png" alt="iphone"
                                                          class="img-responsive"/></div>
            <div class="col-md-7 col-sm-7">
                <div class="app-content">
                    <h2>Download Our Best Apps</h2>
                    <h4>Best oppertunity in your hand</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui
                        non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p>
                    <a href="#" class="btn call-btn"><i class="fa fa-apple"></i>Download</a><a href="#"
                                                                                               class="btn call-btn"><i
                        class="fa fa-android"></i>Download</a>
                </div>
            </div>
        </div>
    </section>
    </div>
    @endsection