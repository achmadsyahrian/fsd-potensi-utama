@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Visi Misi - ' . env('APP_NAME'))
@section('meta_description', env('APP_NAME') .' Universitas Potensi Utama berkomitmen untuk menciptakan lingkungan belajar yang inovatif, dengan visi dan misi yang mendukung pengembangan akademis dan profesional mahasiswa')
@section('meta_keywords', 'visi feb upu, misi feb potensi utama, visi misi feb, visi misi feb potensi utama')
@section('canonical', env('APP_URL').'/visi-misi')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-b.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>{{__('partials/navbar.navbar.purpose')}}</span></p>
                        <p class="post-title">{{__('home.app_name')}}</p>
                        {{-- <div class="d-flex align-items-center">
                            <span class="post-date mr-30">June 20, 2018</span>
                            <span class="post-date">By Michael Smith</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        {{-- <h1 class="mb-30">{{__('about/purpose.purpose.title')}}</h1>
                        <h4 class="mb-30">{{__('about/purpose.purpose.subtitle_vision')}}</h4>
                        <p>{{__('about/purpose.purpose.description_vision')}}</p>

                        <h4 class="mb-30">{{__('about/purpose.purpose.subtitle_mission')}}</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            @foreach (trans('about/purpose.purpose.description_mission') as $key => $mission)
                                <tr>
                                    <td style="width: 3%; vertical-align: top;">{{ $key }}</td>
                                    <td>{{ $mission }}</td>
                                </tr>
                            @endforeach
                        </table> --}}
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>{{__('about/purpose.purpose.news.title')}}</h4>
                            @foreach ($latestPosts as $post)
                                <div class="single-blog-post d-flex style-4 mb-30">
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
                                    <div class="blog-content">
                                        <span class="post-date">{{ \Carbon\Carbon::parse($post->date)->format('M j, Y') }}</span>
                                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-title" title="{{ app()->getLocale() == 'en' ? $post->title_en : $post->title }}">
                                            {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($post->title_en, 50, '...') : \Illuminate\Support\Str::limit($post->title, 50, '...') }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if ($latestPosts->isEmpty())
                            <p >{{__('about/purpose.purpose.news.empty')}} <i class="far fa-sad-cry"></i></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
    
@endsection
