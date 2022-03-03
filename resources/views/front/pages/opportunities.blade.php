@extends('front.master.master')

@section('content')

    <section class="page__title p-relative d-flex align-items-center fix" data-background="{{ URL::asset('assets/img/page-title/page-title-1.png') }}" style="background-attachment: fixed;">
        <div class="slider__shape">
            <img class="shape triangle" src="{{ URL::asset('assets/img/icon/slider/triangle.png') }}" alt="triangle">
            <img class="shape dotted-square" src="{{ URL::asset('assets/img/icon/slider/dotted-square.png') }}" alt="dotted-square">
            <img class="shape solid-square" src="{{ URL::asset('assets/img/icon/slider/solid-square.png') }}" alt="solid-square">
            <img class="shape circle-2" src="{{ URL::asset('assets/img/icon/slider/circle.png') }}" alt="circle">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-content mt-100">
                        <h2>Opportunities</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('opportunities') }}">Opportunities</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog__area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog__wrapper mr-50">
                        <div class="blog__item-2 mb-50 fix wow fadeInUp" data-wow-delay=".2s">
                            <div class="blog__thumb-2 w-img fix">
                                <a href="services-details.php"><img src="{{ URL::asset('assets/img/opportunities/opportu.png') }}" alt=""></a>
                            </div>
                            <div class="blog__content-2">
                                <div class="blog__meta-2 mb-15 d-sm-flex align-items-center">
                                    <div class="blog__user pr-20 mr-20">
                                        <a href="#">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <h6>The HR Platform</h6>
                                        </a>
                                    </div>
                                    <div class="blog__date">
                                        <span>23 June 2022</span>
                                    </div>
                                </div>

                                <h5>Location</h5>
                                <p>Phoenix Metropolitan Area</p>

                                <h3>Organization Overview</h3>
                                <p>United Aviate Academy (UAA) </p>

                                <div class="blog__btn d-sm-flex justify-content-between">
                                    <div class="blog__btn">
                                        <a href="services-details.php" class="link-btn-2">
                                            Read More
                                            <i class="fal fa-long-arrow-right"></i>
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__item-2 mb-50 fix wow fadeInUp" data-wow-delay=".2s">
                            <div class="blog__thumb-2 w-img fix">
                                <a href="services-details.php"><img src="{{ URL::asset('assets/img/opportunities/opportu.png') }}" alt=""></a>
                            </div>
                            <div class="blog__content-2">
                                <div class="blog__meta-2 mb-15 d-sm-flex align-items-center">
                                    <div class="blog__user pr-20 mr-20">
                                        <a href="#">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <h6>The HR Platform</h6>
                                        </a>
                                    </div>
                                    <div class="blog__date">
                                        <span>23 June 2022</span>
                                    </div>
                                </div>

                                <h5>Location</h5>
                                <p>Phoenix Metropolitan Area</p>

                                <h3>Organization Overview</h3>
                                <p>United Aviate Academy (UAA) </p>

                                <div class="blog__btn d-sm-flex justify-content-between">
                                    <div class="blog__btn">
                                        <a href="services-details.php" class="link-btn-2">
                                            Read More
                                            <i class="fal fa-long-arrow-right"></i>
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="blog__sidebar">
                        <div class="sidebar__widget mb-50 wow fadeInUp" data-wow-delay=".2s">
                            <div class="sidebar__widget-content">
                                <div class="search">
                                    <form action="#">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-75 wow fadeInUp" data-wow-delay=".4s">
                            <div class="sidebar__widget-title mb-50">
                                <h4>LATEST NEWS</h4>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="rc-post">
                                    <ul>
                                        <li class="d-flex mb-20">
                                            <div class="rc-thumb mr-15">
                                                <a href="services-details.php"><img src="{{ URL::asset('assets/img/blog/rc/rc-1.png') }}" alt="rc-post"></a>
                                            </div>
                                            <div class="rc-text">
                                                <h6><a href="services-details.php">Project Manager, Academy Services.</a></h6>
                                                <div class="rc-meta"><span>March 04, 2022</span> </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-20">
                                            <div class="rc-thumb mr-15">
                                                <a href="services-details.php"><img src="{{ URL::asset('assets/img/blog/rc/rc-1.png') }}" alt="rc-post"></a>
                                            </div>
                                            <div class="rc-text">
                                                <h6><a href="services-details.php">Project Manager, Academy Services.</a></h6>
                                                <div class="rc-meta"><span>March 04, 2022</span> </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-20">
                                            <div class="rc-thumb mr-15">
                                                <a href="services-details.php"><img src="{{ URL::asset('assets/img/blog/rc/rc-1.png') }}" alt="rc-post"></a>
                                            </div>
                                            <div class="rc-text">
                                                <h6><a href="services-details.php">Project Manager, Academy Services.</a></h6>
                                                <div class="rc-meta"><span>March 04, 2022</span> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-75 wow fadeInUp" data-wow-delay=".4s">
                            <div class="sidebar__widget-title mb-50">
                                <h4>Didn't find an opportunity, send us your resume</h4>
                                @include('front.includes.form')
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
