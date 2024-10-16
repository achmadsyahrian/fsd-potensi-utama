@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Akreditasi - Universitas Potensi Utama')
@section('meta_description', 'Dengan akreditasi BAN-PT, Universitas Potensi Utama membuktikan kualitas pendidikan yang setara dengan standar nasional. Pilih program studi yang telah terakreditasi BAN-PT dan dapatkan pendidikan terbaik.')
@section('meta_keywords', 'akreditasi upu, akreditasi potensi utama, akreditasi pendidikan, akreditasi kampus')
@section('canonical', 'https://potensi-utama.ac.id/akreditasi')

@section('app')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Akreditasi</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                    <li>Akreditasi</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Univ Akreditasi Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="section-header-responsive">
                    <h2 class="display-4 display-md-3 display-lg-2"> Sertifikat Akreditasi Universitas Potensi Utama</h2>
                    <p>Tahun 2020 - 2025</p>
                </div>
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-3 mb-0 portfolio-item filter-remodeling"></div>
                        <div class="col-lg-6 mx-auto justify-content-center align-items-center portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/accreditation/img/Sertifikat-Akreditasi-Universitas-Potensi-Utama.jpg') }}"
                                    class="img-fluid" width="100%" alt="">
                                <div class="portfolio-info">
                                    <h4>Sertifikat Akreditasi Universitas Potensi Utama</h4>
                                    <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Universitas-Potensi-Utama.pdf')}}"
                                        title="Sertifikat Akreditasi Universitas Potensi Utama" data-gallery="portfolio-gallery-remodeling"
                                        class="preview-link" target="_blank">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Univ Akreditasi -->

        <!-- ======= Prodi New Akreditasi Section ======= -->
        <section id="accreditation" class="accreditation">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class=" section-header-responsive ">
                    <h2>Sertifikat Akreditasi Program Studi Terbaru</h2>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Sistem Informasi (S1)</h3>
                            <p>2022 - 2027</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-SI-S1-2022-2027.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Sistem Informasi (D3)</h3>
                            <p>2020 - 2025</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-SI-D3-2020-2025.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Sistem Informasi (S2)</h3>
                            <p>2022 - 2027</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Ilkom-S2-2022-2027.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Teknik Industri (S1)</h3>
                            <p>2024 - 2029</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-TI-2024-2029.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Informatika (S1)</h3>
                            <p>2024 - 2028</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-IF-2024-2028.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Rekayasa Perangkat Lunak (S1)</h3>
                            <p>2023 - 2028</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-RPL-2023-2028.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Rekayasa Sistem Komputer (S1)</h3>
                            <p>2023 - 2028</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-RSK-2023-2028.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Akuntansi (S1)</h3>
                            <p>2022 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-PS-Akuntansi-Periode-05-Okt-2022-22-Oktober-2024.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Televisi & Film (S1)</h3>
                            <p>2020 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Prodi-Televisi-dan-Film.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Psikologi (S1)</h3>
                            <p>2022 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Prodi-Psikologi.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Perbankan Syariah (S1)</h3>
                            <p>2022 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Prodi-PS.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Pendidikan Bahasa Inggris (S1)</h3>
                            <p>2022 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Prodi-PBI.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Hukum (S1)</h3>
                            <p>2022 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Prodi-Hukum.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Hubungan Internasional (S1)</h3>
                            <p>2022 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Prodi-HI.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Ekonomi Syariah (S1)</h3>
                            <p>2022 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Prodi-ES.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Desain Interior (S1)</h3>
                            <p>2019 - 2024</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Prodi-DI.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Desain Komunikasi Visual (S1)</h3>
                            <p>2024 - 2029</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-DKV-2024-2029.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Manajemen (S1)</h3>
                            <p>2021 - 2026</p>
                            <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-PS-Manajemen.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Prodi New Akreditasi -->

        <!-- ======= Prodi Old Akreditasi Section ======= -->
        <section id="accreditation" class="accreditation">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class=" section-header-responsive ">
                    <h2>Sertifikat Akreditasi Program Studi Terdahulu</h2>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Teknik Informatika (S1)</h3>
                            <p>2018 - 2023</p>
                            <a href="{{asset('landing/assets/file/Akreditasi-Prodi-TIF-2018-2023.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Teknik Informatika (S1)</h3>
                            <p>2008 - 2013</p>
                            <a href="{{asset('landing/assets/file/Akreditasi-Prodi-TIF-2008-2013-2.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Informatika (S1)</h3>
                            <p>2020 - 2023</p>
                            <a href="{{asset('landing/assets/file/Akreditasi-Prodi-IF-2020-2023.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Manajemen Informatika (D3)</h3>
                            <p>2009 - 2014</p>
                            <a href="{{asset('landing/assets/file/Akreditas-MI-D3-2009-2014.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="far fa-check-circle text-warning icon-item"></i>
                            <h3>Sistem Informasi (S1)</h3>
                            <p>2017 - 2022</p>
                            <a href="{{asset('landing/assets/file/Akreditasi-Prodi-SI-2017-2022.pdf')}}" target="_blank" class="mt-3"><span>Download Sertifikasi Akreditasi <i class="far fa-save"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Prodi Old Akreditasi -->
        
    </main>
@endsection
