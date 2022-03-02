<header>
    <div class="header__area p-relative header__transparent">
        <div id="header__sticky" class="header__bottom header__bottom-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="logo">
                            <a href="{{ route('home')}}">
                                <img src="assets/img/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="logo-gradient">
                            <a href="{{ route('home')}}">
                                <img src="assets/img/logo/logo-gradient.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-6 col-sm-6 col-6">
                        <div class="header__bottom-right d-flex justify-content-end align-items-center">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('home')}}">Home</a></li>
                                        <li><a href="{{ route('about')}} ">About Us </a></li>
                                        <li><a href="{{ route('opportunities') }}">Opportunities</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__btn d-none d-sm-block d-xl-block ml-50">
                                <a href="{{ url('https://calendly.com/hrplatform/consultation?month=2022-02')}}" target="_blank" class="z-btn z-btn-white z-btn-white-2">Contact us</a>
                            </div>
                            <div class="sidebar__menu d-lg-none">
                                <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <!-- sidebar area start -->
    <section class="sidebar__area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="fal fa-times"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="sidebar__tab">
                <ul class="nav nav-tabs" id="sidebar-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="menu-tab" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">info</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar__content">
                <div class="tab-content" id="sidebar-tab-content">
                    <div class="tab-pane fade show active" id="menu" role="tabpanel" aria-labelledby="menu-tab">
                        <div class="logo mb-40">
                            <a href="{{ route('home')}}">
                                <img src="{{ URL::asset('assets/img/logo/logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="sidebar__info">
                            <div class="logo mb-40">
                                <a href="{{ route('home')}}">
                                    <img src="{{ URL::asset('assets/img/logo/logo.png')}}" alt="logo">
                                </a>
                                {{-- {{ URL::asset('')}} --}}
                            </div>
                            <p>Call adviser for The HR Platform outsourcing service business</p>
                            <a href="{{ url('https://calendly.com/hrplatform/consultation?month=2022-02')}}" target="_blank" class="z-btn z-btn-white">contact us</a>
                            <div class="sidebar__contact mt-30">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span>Scottsdale, AZ.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="text ">
                                            <span class="__cf_email__"><a href="mailto:info@thehrplatform.com">info@thehrplatform.com</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span><a href="{{ url('tel:(480) 790-0020') }}">(480) 790-0020</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
