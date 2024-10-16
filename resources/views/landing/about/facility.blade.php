@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Fasilitas - Universitas Potensi Utama')
@section('meta_description', 'Dengan akreditasi BAN-PT, Universitas Potensi Utama membuktikan kualitas pendidikan yang setara dengan standar nasional. Pilih program studi yang telah terakreditasi BAN-PT dan dapatkan pendidikan terbaik.')
@section('meta_keywords', 'fasilitas upu, fasilitas potensi utama, fasilitas pendidikan, fasilitas kampus upu')
@section('canonical', 'https://potensi-utama.ac.id/fasilitas')

@section('app')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Fasilitas</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                    <li>Fasilitas</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Fasilitas Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/aula-gedung-B-768x484.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Aula Universitas</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/aula-gedung-B-768x484.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/peradilan-semu.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Ruang Peradilan Semu</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/peradilan-semu.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/internasioanl.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Internasional Relation Lab</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/internasioanl.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/studio.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Studio Film & Fotografi</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/studio.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/mushola.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Mushollah</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/mushola.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/podcast.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Podcast Studio</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/podcast.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/library.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Perpustakaan</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/library.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/Lab-fisika.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Lab Fisika</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/Lab-fisika.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/Lab-Komputer.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Lab Komputer</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/Lab-Komputer.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div><div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/investment.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Investment Gallery</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/investment.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/Incubator.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Ruang Incubator Bisnis</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/Incubator.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/mini-bank.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Mini Bank</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/mini-bank.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/konseling.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Ruang Konseling</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/konseling.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/area-Mural.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>Area Mural</p>
                                    <a href="{{ asset('landing/assets/img/fasilitas/area-Mural.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section> <!-- End Fasilitas -->

    </main>
@endsection
