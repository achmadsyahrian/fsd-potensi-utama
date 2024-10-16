@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Administrasi - '. env('APP_NAME'))
@section('meta_description', 'Lengkapi berkas administrasi perkuliahan kamu di '. env('APP_NAME') .' Universitas Potensi Utama')
@section('meta_keywords', 'administrasi feb upu, administrasi feb potensi utama, administrasi feb, administrasi feb potensi
    utama')
@section('canonical', env('APP_URL').'/administrasi')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix"
        style="background-image: url({{ asset('landing/assets/img/building-img/gedung-b.jpg') }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Administrasi</span></p>
                        <p class="post-title">{{ env('APP_NAME') }}</p>
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
                        <h1 class="mb-30">Berkas Perkuliahan</h1>
                        <div class="panel single-accordion">
                           <h6 class="mb-2">
                              <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Formulir Pendaftaran Seminar Hasil
                                 <span class="accor-close"><i class="fas fa-download"></i></span>
                              </a>
                           </h6>
                           <h6 class="mb-2">
                              <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Lembar persetujuan sidang skrisi dan tugas akhir
                                 <span class="accor-close"><i class="fas fa-download"></i></span>
                              </a>
                           </h6>
                           <h6 class="mb-2">
                              <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Formulir Pendaftaran Sidang Skripsi
                                 <span class="accor-close"><i class="fas fa-download"></i></span>
                              </a>
                           </h6>
                           <h6 class="mb-2">
                              <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Surat Pengajuan Judul Proposal Skripsi
                                 <span class="accor-close"><i class="fas fa-download"></i></span>
                              </a>
                           </h6>
                           <h6 class="mb-2">
                              <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Surat Pernyataan Kesediaan Pembimbing Skripsi
                                 <span class="accor-close"><i class="fas fa-download"></i></span>
                              </a>
                           </h6>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Berita Terbaru</h4>
                            @foreach ($latestPosts as $post)
                                <div class="single-blog-post d-flex style-4 mb-30">
                                    <div class="blog-thumbnail">
                                        <a href="{{ route('landing.news.show', $post->slug) }}">
                                            @if ($post->thumbnail)
                                                <img src="{{ asset($post->thumbnail) }}"
                                                    style="height:90px; object-fit:cover;" class="img-fluid" alt="{{$post->title}}">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}"
                                                    style="height:90px; object-fit:cover;" alt="Universitas Potensi Utama">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                        <a href="{{ route('landing.news.show', $post->slug) }}" class="post-title"
                                            title="{{ $post->title }}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if ($latestPosts->isEmpty())
                            <p>Tidak ada berita <i class="far fa-sad-cry"></i></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
