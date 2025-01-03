@extends('landing.layouts.app')
@section('title', 'Beranda - '. env('APP_NAME') .' | Universitas Potensi Utama')
@section('json-ld')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"EducationalOrganization","name":"{{ env('APP_NAME') }}","url":"{{ env('APP_URL') }}","address":{"@type":"PostalAddress","addressLocality":"Medan","addressRegion":"Sumatera Utara","postalCode":"20241","streetAddress":"Jl. K.L Yos Sudarso, Gg. Famili No.247, Tj. Mulia, Kec. Medan Deli"}}</script> 
@endsection
@section('content')

    @include('landing.partials.breaking-news')

    @if ($totalPosts >= 3)
        <div class="hero-area">
            <!-- Hero Post Slides -->
            <div class="hero-post-slides owl-carousel">

                <!-- Single Slide -->
                <div class="single-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Single Blog Post Area -->
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms"
                                    data-duration="1000ms">
                                    <!-- Blog Thumbnail -->
                                    <div class="blog-thumbnail bg-overlay">
                                        <a href="{{route('landing.news.show', $latestNews[0]->slug)}}">
                                            @if ($latestNews[0]->thumbnail)
                                                <img src="{{ asset($latestNews[0]->thumbnail) }}"
                                                style="height:500px; object-fit:cover;" class="img-fluid"
                                                alt="{{$latestNews[0]->title}}">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:500px; object-fit:cover;" alt="Universitas Potensi Utama">
                                            @endif
                                        </a>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <span class="post-date">{{ \Carbon\Carbon::parse($latestNews[0]->date)->format('M j, Y') }}</span>
                                        <a href="{{route('landing.news.show', $latestNews[0]->slug)}}" class="post-title">
                                            {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($latestNews[0]->title_en, 80, '...') : \Illuminate\Support\Str::limit($latestNews[0]->title, 80, '...') }}
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <!-- Single Blog Post Area -->
                                <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms"
                                    data-duration="1000ms">
                                    <!-- Blog Thumbnail -->
                                    <div class="blog-thumbnail bg-overlay">
                                        <a href="{{route('landing.news.show', $latestNews[1]->slug)}}">
                                            @if ($latestNews[1]->thumbnail)
                                            <img src="{{ asset($latestNews[1]->thumbnail) }}"
                                                style="height:235px; object-fit:cover;" class="img-fluid"
                                                alt="{{$latestNews[1]->title}}">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:235px; object-fit:cover;" alt="Universitas Potensi Utama">
                                            @endif
                                        </a>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <span class="post-date">{{ \Carbon\Carbon::parse($latestNews[1]->date)->format('M j, Y') }}</span>
                                        <a href="{{route('landing.news.show', $latestNews[1]->slug)}}" class="post-title">
                                            {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($latestNews[1]->title_en, 80, '...') : \Illuminate\Support\Str::limit($latestNews[1]->title, 80, '...') }}
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post Area -->
                                <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms"
                                    data-duration="1000ms">
                                    <!-- Blog Thumbnail -->
                                    <div class="blog-thumbnail bg-overlay">
                                        <a href="{{route('landing.news.show', $latestNews[2]->slug)}}">
                                            @if ($latestNews[2]->thumbnail)
                                                <img src="{{ asset($latestNews[2]->thumbnail) }}"
                                                    style="height:235px; object-fit:cover;" class="img-fluid"
                                                    alt="{{$latestNews[2]->title}}">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:235px; object-fit:cover;" alt="Universitas Potensi Utama">
                                            @endif
                                        </a>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <span class="post-date">{{ \Carbon\Carbon::parse($latestNews[2]->date)->format('M j, Y') }}</span>
                                        <a href="{{route('landing.news.show', $latestNews[2]->slug)}}" class="post-title">
                                            {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($latestNews[2]->title_en, 80, '...') : \Illuminate\Support\Str::limit($latestNews[2]->title, 80, '...') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif

    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>{{__('home.home.news.title')}}</h6>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="nav3">
                                <div class="row">
                                    @foreach($latestNewsContent as $index => $post)
                                        @if($index < 2)
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post style-2 mb-5">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail position-relative">
                                                        <a href="{{route('landing.news.show', $post->slug)}}">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                style="height:240px; object-fit:cover;" class="img-fluid"
                                                                alt="{{$post->title}}">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:240px; object-fit:cover;" alt="Universitas Potensi Utama">
                                                            @endif
                                                        </a>
                                                        <span class="category-label">{{ $post->category->name }}</span>
                                                    </div>

                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ \Carbon\Carbon::parse($post->date)->format('M j, Y') }}</span>
                                                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-title" title="{{ app()->getLocale() == 'en' ? $post->title_en : $post->title }}">
                                                            {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($post->title_en, 50, '...') : \Illuminate\Support\Str::limit($post->title, 50, '...') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post d-flex style-4 mb-30">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail">
                                                        <a href="{{route('landing.news.show', $post->slug)}}">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                style="height:90px; object-fit:cover;" class="img-fluid"
                                                                alt="{{$post->title}}">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:90px; object-fit:cover;" alt="Universitas Potensi Utama">
                                                            @endif
                                                        </a>
                                                    </div>
    
                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ \Carbon\Carbon::parse($post->date)->format('M j, Y') }}</span>
                                                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-title" title="{{ app()->getLocale() == 'en' ? $post->title_en : $post->title }}">
                                                            {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($post->title_en, 50, '...') : \Illuminate\Support\Str::limit($post->title, 50, '...') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        @if ($latestNewsContent->isEmpty())
                            <p class="text-center">{{__('home.home.news.empty')}} <i class="far fa-sad-cry"></i></p>
                        @endif
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">


                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                                <img src="{{ asset('landing/assets/img/ads-img/banner-potrait-sidebar.jpeg') }}"
                                    alt="{{env('APP_NAME')}}">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-area bg-img bg-overlay bg-fixed mb-70"
        style="background-image: url({{ asset('landing/assets/img/building-img/gedung-b.jpg') }});">
        <div class="container">
            <div class="row">
                <!-- Featured Video Area -->
                <div class="col-12">
                    <div class="featured-video-area d-flex align-items-center justify-content-center">
                        <div class="video-content text-center">
                            {{-- <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a> --}}
                            <a href="{{ asset('landing/assets/video/Company Profile Universitas Potensi Utama.mp4') }}"
                                class="video-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>

                            <span class="published-date">03 Mar, 2020</span>
                            <h3 class="video-title">{{__('home.home.video.title')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="elements-title mb-30 text-center">
                        <h1>{{__('home.home.announcement.title')}}</h1>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single News Area -->
                @foreach ($latestAnnouncementContent as $post)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-blog-post style-2 mb-5">
                            <div class="blog-content">
                                <span class="post-date">{{ \Carbon\Carbon::parse($post->date)->format('M j, Y') }}</span>
                                <a href="{{route('landing.announcement.show', $post->slug)}}" class="post-title" title="{{ app()->getLocale() == 'en' ? $post->title_en : $post->title }}">
                                    {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($post->title_en, 50, '...') : \Illuminate\Support\Str::limit($post->title, 50, '...') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($latestAnnouncementContent->isEmpty())
                    <p class="mx-auto">{{__('home.home.announcement.empty')}} <i class="far fa-sad-cry"></i></p>
                @endif
                
                <div class="col-12">
                    <div class="load-more-button text-center">
                        <a href="{{route('landing.announcement.index')}}" class="btn newsbox-btn">{{__('home.home.announcement.load_more')}}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="big-add-area mb-100">
        <div class="container-fluid text-center">
            <a href="#"><img
                    src="{{ asset('landing/assets/img/ads-img/Web-Header-pendaftaran-v2-1536x640-1.jpg') }}"
                    style="width:1160px;" alt="{{env('APP_NAME')}}" title=""></a>
        </div>
    </div>

    {{-- <div class="col-12">
        <div class="elements-title mb-30 text-center">
            <h2>Keanggotaan dan Kerjasama</h2>
        </div>
    </div>
    <section class="video-area bg-img bg-fixed"
        style="background-image: url({{ asset('landing/assets/img/background-img/blue-red-bg.png') }});">

        <!-- Video Slideshow -->
        <div class="video-slideshow py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-slides owl-carousel">

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#" ><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/1.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Konsulat Japan" title="Konsulat Japan"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/2.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Konsulat Timor Leste" title="Konsulat Timor Leste"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/3.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Konsulat Malaysia" title="Konsulat Malaysia"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/4.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Reviewnesia" title="Reviewnesia"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/5.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Konsulat India" title="Konsulat India"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/6.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Konsulat Jerman" title="Konsulat Jerman"></a>
                                </div>
                            </div>

                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/7.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Konsulat Amerika" title="Konsulat Amerika"></a>
                                </div>
                            </div>

                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/8.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="UNHCR" title="UNHCR"></a>
                                </div>
                            </div>

                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/9.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Universitas Al Muslim" title="Universitas Al Muslim"></a>
                                </div>
                            </div>

                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/10.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Walhi" title="Walhi"></a>
                                </div>
                            </div>

                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/11.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="HI-PM" title="HI-PM"></a>
                                </div>
                            </div>

                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/12.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Grand Inna Medan" title="Grand Inna Medan"></a>
                                </div>
                            </div>

                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/13.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Alliance Francaise Medan" title="Alliance Francaise Medan"></a>
                                </div>
                            </div>

                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/14.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Yagasu" title="Yagasu"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
