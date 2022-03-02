@extends('front.master.master')

@section('content')
<section class="slider__area slider__area-2">
    <div class="slider-active">
        <!-- <div class="single-slider single-slider-2 slider__height slider__height-2 d-flex align-items-center"
            data-background="assets/img/slider/02/slider-2.png">
            <div class="container">
                <div class="row">
                    <div
                        class="col-xl-7 offset-xl-6 col-lg-8 offset-lg-4 col-md-9 offset-md-3 col-sm-10 offset-sm-2">
                        <div class="slider__content slider__content-2">
                            <h1 data-animation="fadeInUp" data-delay=".5s">An enterprise <br> specialized in
                                human resources </h1>
                            <p data-animation="fadeInUp" data-delay=".7s">consultancy for small businesses and
                                career advice for individuals .</p>
                            <div class="slider__btn" data-animation="fadeInUp" data-delay=".9s">
                                <a href="{{ url('https://calendly.com/hrplatform/consultation?month=2022-02')}}" target="_blank"
                                    class="z-btn z-btn-transparent">Contact US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="single-slider single-slider-2 slider__height slider__height-2 d-flex align-items-center"
            data-background="assets/img/slider/02/slider-2.png">
            <div class="container">
                <div class="row">
                    <div
                        class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-9 offset-md-3 col-sm-10 offset-sm-2">
                        <div class="slider__content slider__content-2 slider__content-3 text-center">
                            <h1 data-animation="fadeInUp" data-delay=".5s">Finance Consulting For Challenging
                                Times</h1>
                            <p data-animation="fadeInUp" data-delay=".7s">Work with a advisor to plan for
                                your future.</p>
                            <div class="slider__btn" data-animation="fadeInUp" data-delay=".9s">
                                <a href="{{ url('https://calendly.com/hrplatform/consultation?month=2022-02')}}" target="_blank"
                                    class="z-btn z-btn-transparent">Get a Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="single-slider single-slider-2 slider__height slider__height-2 d-flex align-items-center" data-background="assets/img/slider/02/slider-3.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="slider__content slider__content-2 slider__content-4">
                            <span data-animation="fadeInUp" data-delay=".3s">The HR Platform</span>
                            <h1 data-animation="fadeInUp" data-delay=".5s">An enterprise specialized in human resources
                            </h1>
                            <p data-animation="fadeInUp" data-delay=".7s">consultancy for small businesses and career advice for individuals.</p>
                            <div class="slider__btn" data-animation="fadeInUp" data-delay=".9s">
                                <a href="{{ url('https://calendly.com/hrplatform/consultation?month=2022-02')}}" target="_blank" class="z-btn z-btn-transparent">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- slider area end -->

<!-- features area 2 start -->
<section class="features__area pt-115 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="features__content-left">
                    <!-- "section title h2" is for "home 2" title -->
                    <div class="section__title section__title-h2 mb-25">
                        <!-- <span class="wow fadeInUp" data-wow-delay=".2s">Design Accordlogy</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Enrich <br> your design</h2> -->
                        <img class="vc_single_image-img " src="assets/img/Artboard.jpg" width="500" height="510" alt="Artboard" title="Artboard" data-pagespeed-url-hash="1726348179" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Be compliant! Book a consultation today!</p>
                    <a href="{{ url('https://calendly.com/hrplatform/consultation?month=2022-02')}}" target="_blank" class="z-btn">Contact
                        us<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6">
                <div class="features__content-right">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="features__item features__item-2 white-bg fix mb-30 wow fadeInUp" data-wow-delay=".2s">
                                <div class="features__thumb-2" data-background="assets/img/features/02/features-1.jpg"></div>
                                <div class="features__content-2">
                                    <div class="features__icon features__icon-2">
                                        <i class="icon_lightbulb_alt"></i>
                                    </div>
                                    <h3>Employee Handbook</h3>
                                    <p>Is your employee handbook outdated? Getting it compliant with the most update practices can save you lots of dollars.</p>

                                </div>
                            </div>
                            <div class="features__item features__item-2 white-bg fix mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="features__thumb-2" data-background="assets/img/features/02/features-1.jpg"></div>
                                <div class="features__content-2">
                                    <div class="features__icon features__icon-2">
                                        <i class="icon_document_alt"></i>
                                    </div>
                                    <h3>Employee Relations</h3>
                                    <p>What are the issues affecting your employees? Conflicts can distract them from delivering results..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="features__item features__item-2 white-bg fix mb-30 wow fadeInUp" data-wow-delay=".4s">
                                <div class="features__thumb-2" data-background="assets/img/features/02/features-1.jpg"></div>
                                <div class="features__content-2">
                                    <div class="features__icon features__icon-2">
                                        <i class="icon_ribbon_alt"></i>
                                    </div>
                                    <h3>Performance Management</h3>
                                    <p>Formal annual appraisals or on-going feedback sessions? Every organization is different. Let’s discuss the most efficient way.</p>
                                </div>
                            </div>
                            <div class="features__item features__item-2 white-bg fix mb-30 wow fadeInUp" data-wow-delay=".8s">
                                <div class="features__thumb-2" data-background="assets/img/features/02/features-1.jpg"></div>
                                <div class="features__content-2">
                                    <div class="features__icon features__icon-2">
                                        <i class="icon_lock_alt"></i>
                                    </div>
                                    <h3>Employment Practices</h3>
                                    <p>Get Advice: Onboarding, Exit Interviews, Policies and Procedures, Terminations, Compensation, Job Descriptions and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features area 2 end -->

<!-- faq area start -->
<section class="faq__area p-relative pt-135 pb-120 grey-bg-12">
    <div class="faq__thumb" data-background="assets/img/faq/faq-1.png"></div>
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
<!-- <section class="achievement__area pt-135 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="achievement__content">
                    <div class="section__title section__title-3 mb-20">
                        <span class="wow fadeInUp" data-wow-delay=".2s">Achievement</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">We are certified financial experts</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".6s">He nicked it fantastic well on your bike mate
                        have it a I bum bag I twit easy peasy that, chimney pot amongst are you taking the piss
                        daft show off show off pick.</p>
                    <div class="achievement__wrapper d-flex d-md-block d-lg-flex justify-content-between mb-35 wow fadeInUp"
                        data-wow-delay=".8s">
                        <div class="achievement__item mb-30">
                            <img src="assets/img/icon/achievement/achievement-1.png" alt="achievement">
                            <h3>Acquisitions Finance Consulting</h3>
                        </div>
                        <div class="achievement__item mb-30 wow fadeInUp" data-wow-delay="1s">
                            <img src="assets/img/icon/achievement/achievement-2.png" alt="achievement">
                            <h3>Private Placement Consulting</h3>
                        </div>
                    </div>
                    <a href="about.php" class="z-btn">Learn More</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-xl-7 col-sm-6">
                        <div class="achievement__thumb m-img pl-30 text-right wow fadeInRight"
                            data-wow-delay=".8s">
                            <img src="assets/img/achievement/achievement-1.jpg" alt="achievement-1">
                        </div>
                    </div>
                    <div class="col-xl-5 col-sm-6 d-md-none d-lg-none d-xl-block wow fadeInRight"
                        data-wow-delay="1s">
                        <div class="achievement__thumb w-img">
                            <img src="assets/img/achievement/achievement-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- achievement area end -->

<!-- expart area start -->
<!-- <section class="expart__area pt-200 wow fadeInUp" data-wow-delay=".4s">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="expart__wrapper">
                    <div class="expart__nav">
                        <ul class="nav nav-pills justify-content-end" id="expart-tab" role="tablist">
                            <li class="nav-item text-center">
                                <a class="nav-link active" id="philosophy-tab" data-toggle="pill"
                                    href="#philosophy" role="tab" aria-controls="philosophy"
                                    aria-selected="true">Philosophy</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" id="work-tab" data-toggle="pill" href="#work" role="tab"
                                    aria-controls="work" aria-selected="false">Work Area</a>
                            </li>
                        </ul>
                    </div>
                    <div class="expart__tab">
                        <div class="tab-content" id="expart-Content">
                            <div class="tab-pane fade show active" id="philosophy" role="tabpanel"
                                aria-labelledby="philosophy-tab">
                                <div class="expart__tab-content white-bg">
                                    <div class="expart__thumb" data-background="assets/img/expart/expart-1.jpg">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 offset-lg-6">
                                            <div class="expart__content">
                                                <h3>Our experts will <br> guide you</h3>
                                                <p>Tosser me old mucker lurgy cheeky bugger young delinquent
                                                    squiffy at public school lost the plot fanny around, haggle
                                                    daft my lady faff about old pear.</p>
                                                <a href="about.php" class="z-btn">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">
                                <div class="expart__tab-content white-bg">
                                    <div class="expart__thumb" data-background="assets/img/expart/expart-1.jpg">
                                    </div>
                                    <div class="row">

                                        <div class="col-xl-6 offset-lg-6">
                                            <div class="expart__content">
                                                <h3>Our experts will <br> guide you</h3>
                                                <p>Tosser me old mucker lurgy cheeky bugger young delinquent
                                                    squiffy at public school lost the plot fanny around, haggle
                                                    daft my lady faff about old pear.</p>
                                                <a href="about.php" class="z-btn">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- expart area end -->

<!-- blog area start -->
<section class="blog__area grey-bg-15 pt-115 pb-135">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section__title section__title-3 mb-65">
                    <h2>Opportunities</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog__item p-relative fix mb-30 white-bg wow fadeInUp" data-wow-delay=".2s">
                    <div class="blog__thumb" data-background="assets/img/blog/blog-1.jpg"></div>
                    <div class="blog__content">
                        <div class="blog__meta date mb-45">
                            <h4>February</h4>
                            <h6>24, 2020</h6>
                        </div>
                        <div class="blog__meta user mb-15">
                            <span>By <a href="#">Phoenix Metropolitan Area</a></span>
                        </div>
                        <h3>
                            <a href="services-details.php">United Aviate Academy (UAA).</a>
                        </h3>
                        <div class="blog__btn">
                            <a href="services-details.php" class="link-btn-2">
                                Read More
                                <i class="far fa-long-arrow-right"></i>
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog__item p-relative fix mb-30 white-bg wow fadeInUp" data-wow-delay=".4s">
                    <div class="blog__thumb" data-background="assets/img/blog/blog-1.jpg"></div>
                    <div class="blog__content">
                        <div class="blog__meta date mb-45">
                            <h4>February</h4>
                            <h6>24, 2020</h6>
                        </div>
                        <div class="blog__meta user mb-15">
                            <span>By <a href="#">Phoenix Metropolitan Area</a></span>
                        </div>
                        <h3>
                            <a href="services-details.php">United Aviate Academy (UAA).</a>
                        </h3>
                        <div class="blog__btn">
                            <a href="services-details.php" class="link-btn-2">
                                Read More
                                <i class="far fa-long-arrow-right"></i>
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog__item p-relative fix mb-30 white-bg wow fadeInUp" data-wow-delay=".6s">
                    <div class="blog__thumb" data-background="assets/img/blog/blog-1.jpg"></div>
                    <div class="blog__content">
                        <div class="blog__meta date mb-45">
                            <h4>February</h4>
                            <h6>24, 2020</h6>
                        </div>
                        <div class="blog__meta user mb-15">
                            <span>By <a href="#">Phoenix Metropolitan Area</a></span>
                        </div>
                        <h3>
                            <a href="services-details.php">United Aviate Academy (UAA).</a>
                        </h3>
                        <div class="blog__btn">
                            <a href="services-details.php" class="link-btn-2">
                                Read More
                                <i class="far fa-long-arrow-right"></i>
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="blog__more mt-60">
                    <a href="services.php" class="z-btn z-btn-border">View all Opportunities <i
                            class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->

<!-- cta area start -->
<!-- <section class="cta__area pt-300 pb-185" data-background="assets/img/cta/cta-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="contact__wrapper d-md-flex justify-content-between" data-wow-delay=".3s">
                <div class="contact__form">
                    <form action="#">
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Your Email">
                        <textarea placeholder="Your Message"></textarea>
                        <button type="submit" class="z-btn">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="cta__content text-right">
                <span class="wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">We’ve added a new exciting feature in v2.0.</span>
                <h1 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Do you have any question? Feel free to contact us</h1>
            </div>
        </div>
    </div>
</section> -->
<!-- cta area end -->

<section class="contact__area">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="contact__map cta__area" data-background="assets/img/cta/cta-bg.png">

                    <div class="contact__wrapper d-md-flex justify-content-between" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="contact__info mr-100">
                            <h3>Quick Online Consultancy Only on Few Minutes</h3>
                            <ul>
                                <li>
                                    <h4>Address</h4>
                                    <p>Scottsdale, AZ</p>
                                </li>
                                <li>
                                    <h4>call us</h4>
                                    <p><a href="tel:(480) 790-0020">(480) 790-0020</a></p>
                                </li>
                                <li>
                                    <h4>Email Address</h4>
                                    <p><a href="#"><span class="__cf_email__" >info@thehrplatform.com</span></a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <form action="#">
                                <input type="text" placeholder="Your Name">
                                <input type="email" placeholder="Your Email">
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit" class="z-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
