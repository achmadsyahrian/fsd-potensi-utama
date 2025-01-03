<header class="header-area">
    <div class="navbar-top">
        <div class="language-switch">
            <button>
                <img src="{{ App::getLocale() == 'id' ? asset('landing/assets/img/flag/flag-indonesia.png') : asset('landing/assets/img/flag/flag-inggris2.jpg') }}" 
                     width="25" alt="Current Language">
                {{ App::getLocale() == 'id' ? 'Bahasa' : 'Language' }}
                <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <!-- Dropdown List -->
            <ul>
                <li>
                    <a href="{{ route('change.language', ['lang' => 'id']) }}">
                        <img src="{{ asset('landing/assets/img/flag/flag-indonesia.png') }}" width="20" alt="Indonesia"> Indonesia
                    </a>
                </li>
                <li>
                    <a href="{{ route('change.language', ['lang' => 'en']) }}">
                        <img src="{{ asset('landing/assets/img/flag/flag-inggris2.jpg') }}" width="20" alt="English"> English
                    </a>
                </li>
            </ul>
        </div>
    
        <div class="social-media">
            <ul>
                <li><a href="https://www.instagram.com/official_upu/" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/potensiutamamedan/about" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.tiktok.com/@official_upu" target="_blank" title="Tiktok"><i class="fab fa-tiktok" aria-hidden="true"></i></a></li>
                <li><a href="https://www.youtube.com/@PotensiUtamaUniversitas" target="_blank" title="Instagram"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Navbar Area -->
   <div class="newsbox-main-menu" style="margin-top: 50px;">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newsboxNav">

                    <!-- Nav brand -->
                    <a href="{{route('landing.home')}}" class="nav-brand"><img src="{{asset('landing/assets/img/logo-img/logo-fakultas.png')}}" alt="Logo {{__('home.app_name')}}" title="{{__('home.app_name')}}"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('landing.home')}}">{{__('partials/navbar.navbar.home')}}</a></li>
                                <li><a href="#">{{__('partials/navbar.navbar.about')}}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('landing.purpose')}}">{{__('partials/navbar.navbar.purpose')}}</a></li>
                                        <li><a href="{{route('landing.research.index')}}">{{__('partials/navbar.navbar.research')}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">{{__('partials/navbar.navbar.academy')}}</a>
                                    <ul class="dropdown" style="width: max-content;">
                                        <li><a href="{{route('landing.academic.dkv')}}">{{__('partials/navbar.navbar.dkv')}}</a></li>
                                        <li><a href="{{route('landing.academic.ftv')}}">{{__('partials/navbar.navbar.ftv')}}</a></li>
                                        <li><a href="{{route('landing.academic.interior')}}">{{__('partials/navbar.navbar.interior')}}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">{{__('partials/navbar.navbar.information')}}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('landing.news.index')}}">{{__('partials/navbar.navbar.news')}}</a></li>
                                        <li><a href="#">{{__('partials/navbar.navbar.announcement')}}</a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('landing.announcement.index')}}">{{__('partials/navbar.navbar.announcement_all')}}</a></li>
                                                <li><a href="{{ route('landing.announcement.byType', 'skripsi') }}">{{__('partials/navbar.navbar.announcement_thesis')}}</a></li>
                                                <li><a href="{{ route('landing.announcement.byType', 'pkl') }}">{{__('partials/navbar.navbar.announcement_internship')}}</a></li>
                                                <li><a href="{{ route('landing.announcement.byType', 'perwalian') }}">{{__('partials/navbar.navbar.announcement_advisory')}}</a></li>
                                                <li><a href="{{ route('landing.announcement.byType', 'krs') }}">{{__('partials/navbar.navbar.announcement_krs')}}</a></li>
                                                <li><a href="{{ route('landing.announcement.byType', 'ujian') }}">{{__('partials/navbar.navbar.announcement_exam')}}</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Header Add Area -->
                            <div class="header-add-area">
                                <a href="https://pendaftaran.potensi-utama.ac.id/">
                                    <img src="{{asset('landing/assets/img/ads-img/banner-top-header.jpg')}}" style="width: 320px; height:80px; object-fit:contain;" alt="Penerimaan Mahasiswa Baru 2024/2025 Universitass Potensi Utama">
                                </a>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
