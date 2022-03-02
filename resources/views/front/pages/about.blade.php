@extends('front.master.master')

@section('content')
    <section class="page__title p-relative d-flex align-items-center fix" data-background="{{ URL::asset('assets/img/page-title/page-title-3.png') }}" style="background-attachment: fixed;">
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
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('about') }}">About</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- about area start -->
    <section class="about__area pb-150 pt-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pr-0 col-lg-6">
                    <div class="about__thumb m-img wow fadeInLeft" data-wow-delay=".2s">
                        <img src="{{ URL::asset('assets/img/about/about-1.png') }}" alt="">
                        <div class="about__shape">
                            <img src="{{ URL::asset('assets/img/about/red-shape.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1">
                    <div class="about__content wow fadeInRight" data-wow-delay=".4">
                        <div class="section__title mb-25">
                            <span>The HR Platform</span>
                            <h2>Who We Are</h2>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat voluptatibus impedit, consequatur libero obcaecati esse architecto consectetur illum enim saepe. Debitis enim voluptate deleniti? Molestias neque eum pariatur
                            repudiandae amet.</p>
                        <div class="about__list">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay=".6s"><span><i class="far fa-check"></i>Innovative ideas</span></li>
                                <li class="wow fadeInUp" data-wow-delay=".8s"><span><i class="far fa-check"></i>Professional assistance</span></li>
                                <li class="wow fadeInUp" data-wow-delay="1s"><span><i class="far fa-check"></i>Financial advisory</span></li>
                            </ul>
                        </div>
                        <a href="{{ url('https://calendly.com/hrplatform/consultation?month=2022-02') }}" class="z-btn wow fadeInUp" data-wow-delay="1.2s">Contact us<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->


    <!-- faq area start -->
    <section class="faq__area p-relative pt-135 pb-120 grey-bg-12">
        <div class="faq__thumb" data-background="{{ URL::asset('assets/img/faq/faq-1.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                    <div class="faq__wrapper">
                        <div class="section__title section__title-3 mb-25 wow fadeInUp" data-wow-delay=".2s">
                            <span>Career</span>
                            <h2>For Individuals</h2>

                        </div>
                        <div id="accordion">
                            <div class="card wow fadeInUp" data-wow-delay=".4s">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Resume Writing
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Is your resume ATS friendly? Recruiters spend an average of 7 seconds scanning your document. Are you conveying your expertise in this time frame? Let’s discuss it together.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-delay=".6s">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            LinkedIn Optimization
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Did you know you can be found by recruiters on LinkedIn if you follow certain artificial intelligence parameters? LinkedIn is by far the largest platform for job seekers and job hunters. Having an optimal profile can lead you to a job offer faster than
                                        you think.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-delay=".8s">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Interview Preparation
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Most employers today use behavioral-based and/or panel interviews in their recruiting process. How prepared are you? If you made it to this phase, be certain the job is already yours. However, if your performance in the interview is poor, the job offer
                                        may not be extended. Confidence and preparation are everything!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq area end -->

    <!-- achievement area start -->
    <section class="achievement__area pt-135 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="achievement__content">
                        <div class="section__title section__title-3 mb-20">
                            <span class="wow fadeInUp" data-wow-delay=".2s">The HR Platform</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">We are certified financial experts</h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nesciunt provident ullam quod, at expedita quasi magni sint aut vero error deleniti quam quisquam dolores neque sit fugit minima distinctio.</p>
                        <div class="achievement__wrapper d-flex d-md-block d-lg-flex justify-content-between mb-35 wow fadeInUp" data-wow-delay=".8s">
                            <div class="achievement__item mb-30">
                                <img src="{{ URL::asset('assets/img/icon/achievement/achievement-1.png') }}" alt="achievement">
                                <h3>Acquisitions Finance Consulting</h3>
                            </div>
                            <div class="achievement__item mb-30 wow fadeInUp" data-wow-delay="1s">
                                <img src="{{ URL::asset('assets/img/icon/achievement/achievement-2.png') }}" alt="achievement">
                                <h3>Private Placement Consulting</h3>
                            </div>
                        </div>
                        <a href="{{ url('https://calendly.com/hrplatform/consultation?month=2022-02') }}" class="z-btn">Contact us</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-xl-7 col-sm-6">
                            <div class="achievement__thumb m-img pl-30 text-right wow fadeInRight" data-wow-delay=".8s">
                                <img class="border-ra" src="{{ URL::asset('assets/img/achievement/achievement-1.png') }}" alt="achievement-1">
                            </div>
                        </div>
                        <div class="col-xl-5 col-sm-6 d-md-none d-lg-none d-xl-block wow fadeInRight" data-wow-delay="1s">
                            <div class="achievement__thumb w-img">
                                <img class="border-ra" src="{{ URL::asset('assets/img/achievement/achievement-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
