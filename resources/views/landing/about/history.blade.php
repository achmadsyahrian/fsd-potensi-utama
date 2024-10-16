@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Sejarah - Universitas Potensi Utama')
@section('meta_description', 'Pelajari sejarah Universitas Potensi Utama, dari awal berdirinya sebagai PLSM Potensi Utama hingga berkembang menjadi STMIK Potensi Utama dan akhirnya menjadi Universitas Potensi Utama. Temukan perjalanan kami dalam mengembangkan pendidikan tinggi di Medan.')
@section('meta_keywords', 'sejarah upu, sejarah potensi utama')
@section('canonical', 'https://potensi-utama.ac.id/sejarah')

@section('app')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Sejarah</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                    <li>Sejarah</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Sejarah Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('landing/assets/img/hero/gedung-upu.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>Universitas Potensi Utama</h2>
                        <div class="our-story">
                            <h4>Sejak 1994</h4>
                            <h3>Sejarah Kami</h3>
                            <p>Universitas Potensi Utama merupakan salah satu Perguruan Tinggi Swasta (PTS) dibawah naungan
                                Yayasan Potensi Utama Medan. Universitas Potensi Utama bermula dari Kursus Komputer dan
                                Bahasa Inggris pada tahun 1994 dengan nama PLSM (Pendidikan Luar Sekolah Masyarakat) Potensi
                                Utama, dan pada tahun 2003 berdasarkan izin dari Direktorat Jendral Pendidikan Tinggi
                                (DIKTI), PLSM Potensi Utama meningkatkan status menjadi STMIK (Sekolah Tinggi Manajemen
                                Informatika dan Komputer) Potensi Utama.</p>

                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://youtu.be/T4JAUHn9lB4?si=kL4myZTdRPyaEhVQ"
                                    class="glightbox stretched-link">Profile Video</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Sejarah Section -->

        <!-- ======= Perkembangan Section ======= -->
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Perkembangan Universitas Potensi Utama</h3>
                        <p>Pada tahun 2014, STMIK Potensi Utama berubah bentuk menjadi Universitas Potensi Utama berdasarkan
                            izin Kementerian Pendidikan dan Kebudayaan dengan SK nomor: 424/E/O/2014 dengan motto <b>“Kami
                                hadir untuk mencerdaskan kehidupan bangsa”</b>. Saat ini, Universitas Potensi Utama memiliki 6
                            Fakultas yang terdiri dari 18 Program Studi, yaitu:</p>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="fas fa-laptop-code flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Fakultas Teknik & Ilmu Komputer</a></h4>
                                <p>Program Studi: Teknik Industri (S-1), Teknik Informatika (S-1), Sistem Informasi (S-1),
                                    Rekayasa Perangkat Lunak (S-1), Rekayasa Sistem Komputer, Sistem Informasi (D-3), dan
                                    Ilmu Komputer (S-2)</p>
                            </div>
                        </div>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="fas fa-paint-brush flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Fakultas Seni & Desain</a></h4>
                                <p>Program Studi: Desain Komunikasi Visual (S-1), Televisi dan Film (S-1), dan Desain
                                    Interior (S-1)</p>
                            </div>
                        </div>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="fas fa-heartbeat flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Fakultas Psikologi</a></h4>
                                <p>Program Studi: Psikologi (S-1)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 img-bg"
                        style="background-image: url({{ asset('landing/assets/img/about/founder.jpeg') }});"
                        data-aos="zoom-in" data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section>

        <section id="alt-services" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url({{asset('landing/assets/img/about/Universitas-Potensi-Utama_1.jpg')}});"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                <i class="fas fa-balance-scale flex-shrink-0"></i>
                                <div>
                                    <h4><a href="#" class="stretched-link">Fakultas Hukum</a></h4>
                                    <p>Program Studi: Hukum (S-1)</p>
                                </div>
                            </div>
    
                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                                <i class="fas fa-globe flex-shrink-0"></i>
                                <div>
                                    <h4><a href="#" class="stretched-link">Fakultas Ilmu Politik & Kependidikan</a></h4>
                                    <p>Program Studi: Ilmu Hubungan Internasional (S-1) dan Pendidikan Bahasa Inggris (S-1)</p>
                                </div>
                            </div>
    
                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                                <i class="fas fa-chart-line flex-shrink-0"></i>
                                <div>
                                    <h4><a href="#" class="stretched-link">Fakultas Ekonomi & Bisnis</a></h4>
                                    <p>Program Studi: Ekonomi Syariah (S-1), Perbankan Syariah (S-1), Manajemen (S-1), dan
                                        Akuntansi (S-1)</p>
                                </div>
                            </div>

                            <p class="mt-5" data-aos="fade-up" data-aos-delay="600">Masing-masing Program Studi sudah diakreditasi oleh Badan Akreditasi Nasional
                                Perguruan Tinggi
                                (BAN-PT). Penyelenggaraan pendidikan sudah melaksanakan Tridharma Perguruan Tinggi yaitu
                                melaksanakan Pendidikan, melaksanakan Penelitian dan Pengabdian kepada Masyarakat, dan
                                penyelenggaraan manajemen disesuaikan dengan peraturan yang berlaku serta diselaraskan dengan
                                Visi, Misi dan Tujuan Universitas Potensi Utama.
                            </p>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Perkembangan Section -->

        <!-- ======= Founder Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-4 col-md-6 member text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('landing/assets/img/person/founder.png') }}" class="img-fluid rounded-circle" width="600" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Hj. Nuriandy, BA</h4>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End Founder Section -->
    </main>
@endsection
