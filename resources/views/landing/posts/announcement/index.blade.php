@extends('landing.layouts.app')

{{-- Head --}}
@section('title', $title . ' - ' . env('APP_NAME'))
@section('meta_description', 'Baca pengumuman informasi terbaru dari '.env('APP_NAME').' Universitas Potensi Utama. Informasi fakultas terkini, aktivitas fakultas, dan prestasi mahasiswa kami.')
@section('meta_keywords', 'pengumuman fakultas seni & desain upu, pengumuman fakultas seni & desain potensi utama, pengumuman pendidikan fakultas seni & desain, pengumuman fsd upu')
@section('canonical', env('APP_URL').'/pengumuman')


@section('content')
    <div class="catagory-featured-post bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-b.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-9">
                    <!-- Post Content -->
                    <div class="post-content">
                        <h1 class="tag"><span>Pengumuman</span></h1>
                        <a href="#" class="post-title">{{env('APP_NAME')}}</a>
                        <p>Selamat datang di halaman Berita dan Informasi {{env('APP_NAME')}} Universitas Potensi Utama. Di sini, Anda dapat menemukan berbagai update terkini, mulai dari kegiatan akademik, prestasi mahasiswa. Temukan informasi terbaru mengenai inovasi, kerjasama, dan program-program unggulan yang menjadi bagian dari komitmen kami untuk terus maju dalam dunia pendidikan.</p>
                        {{-- <span class="post-date">June 20, 2018</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <a class="text-warning ml-2" href="{{ route('landing.announcement.index') }}" title="Bersihkan Pencarian">
                                    <i class="fas fa-redo"></i>
                                </a>
                                
                                <h6 class="mb-0">
                                    @if(request()->routeIs('landing.announcement.category'))
                                        By Category : {{ $categorySlug }} 
                                    @elseif(request()->routeIs('landing.announcement.byType'))
                                        By : {{ $categorySlug }} 
                                    @elseif(request()->routeIs('landing.announcement.tag'))
                                        By Tag : {{ $tagSlug }}
                                    @elseif(request('s'))
                                        Cari : {{ request('s')}}
                                    @else
                                        Semua
                                    @endif
                                </h6>
                            </div>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#pengumuman" role="tab" aria-controls="pengumuman" aria-selected="true">{{$totalData}} Total</a>
                                </div>
                            </nav>
                        </div>                        

                        <div class="tab-content" id="nav-tabContent">                            
                            <div class="tab-pane fade show active" id="pengumuman" role="tabpanel" aria-labelledby="nav3">
                                <div class="row">
                                    @foreach($data as $index => $post)
                                        @if($index < 1)
                                            <div class="col-12">
                                                <div class="single-blog-post style-2 mb-5">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail position-relative">
                                                        <a href="{{route('landing.announcement.show', $post->slug)}}">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                     style="height:400px; object-fit:cover;" class="img-fluid" alt="{{$post->title}}">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}"
                                                                     style="height:400px; object-fit:cover;" alt="Universitas Potensi Utama">
                                                            @endif
                                                        </a>
                                                        <!-- Kategori -->
                                                        <span class="category-label">{{ $post->category->name }}</span>
                                                    </div>
                                                
                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                                        <a href="{{route('landing.announcement.show', $post->slug)}}" class="post-title" title="{{ $post->title }}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                                        <a href="{{route('landing.announcement.show', $post->slug)}}" class="post-author ">By {{ $post->user->name }}</a>
                                                        <x-filtered-content :content="$post->content" class="mt-4" />
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post style-2 mb-5">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail position-relative">
                                                        <a href="{{route('landing.announcement.show', $post->slug)}}">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                style="height:250px;; object-fit:cover;" class="img-fluid"
                                                                alt="{{$post->title}}">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:250px; object-fit:cover;" alt="Universitas Potensi Utama">
                                                            @endif
                                                        </a>
                                                        <span class="category-label">{{ $post->category->name }}</span>
                                                    </div>
    
                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                                        <a href="{{route('landing.announcement.show', $post->slug)}}" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination Bootstrap -->
                        @if (!$data->isEmpty())
                            <x-landing-pagination :data="$data"></x-landing-pagination>
                        @else
                            <p class="text-center">Tidak ada pengumuman <i class="far fa-sad-cry"></i></p>
                        @endif
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">
                        <x-post-sidebar :dataRecent="$dataRecent" :categories="$categories" :tags="$tags" route='announcement'></x-post-sidebar>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
