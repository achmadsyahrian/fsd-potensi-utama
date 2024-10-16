@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Program Studi Ilmu Komputer S2 - '. env('APP_NAME'))
@section('meta_description', 'Program Studi Ilmu Komputer S2 - '. env('APP_NAME'))
@section('meta_keywords', 'ilmu komputer s2 upu, ilmu komputer s2 potensi utama, visi misi ilmu komputer s2 upu, berita ilmu komputer s2 potensi utama')
@section('canonical', env('APP_URL').'/program-studi/akuntansi')
@section('content')

   @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix"
        style="background-image: url({{ asset('landing/assets/img/building-img/gedung-upu.jpg') }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Program Studi</span></p>
                        <p class="post-title">{{$title}}</p>
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
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Visi Misi</h1>
                        <h4 class="mb-30">Visi</h4>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero distinctio aperiam explicabo exercitationem temporibus iure adipisci inventore. Ab, reprehenderit eveniet?".</p>
                        <h4 class="mb-30">Misi</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ut minus eos, tenetur vero sed veritatis.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet libero cupiditate unde cumque illo.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quam, atque quo vero harum repudiandae natus eveniet officiis?</td>
                            </tr>
                        </table>
                    </div>

                    {{-- <div class="post-details-content mb-100">
                        <h1 class="mb-30">Kurikulum {{$title}}</h1>
                        <div class="col-12 col-lg-12">
                            <div class="accordions mb-50" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                            data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Semester 1
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseOne" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pendidikan Agama I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Aplikasi Komputer</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">English Language</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Akuntansi I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Bisnis</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Ekonomi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pendidikan Pancasila</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Matematika Ekonomi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 1</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          Semester 2
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Manajemen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pendidikan Agama II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Bahasa Indonesia</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Hukum Bisnis</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Akuntansi II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Statistik Ekonomi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Pemasaran</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">English For Business</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 2</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                </div>


                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                          Semester 3
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseThree" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pendidikan Kewarganegaraan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Biaya</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Keuangan Menengah I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Komunikasi Bisnis</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Komputer Akuntansi I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Bisnis Digital</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Sektor Publik</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Keuangan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 3</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                          Semester 4
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseFour" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Manajemen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Komputer Akuntansi II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Keuangan Menengah II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pengauditan dan Asuransi I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perpajakan I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Informasi Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Penganggaran</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 4</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                          Semester 5
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseFive" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Strategik dan Resiko</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Keuangan Lanjutan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pengauditan dan Asuransi II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perpajakan II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Praktek Sistem Informasi Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Kewirausahaan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Informasi Manajemen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 5</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                          Semester 6
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseSix" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Metodelogi Penelitian Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Analisa Laporan Keuangan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Pengendalian Manajemen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Investasi dan Pasar Modal</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Etika Bisnis dan Profesi Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Teori Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">PKL</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 6</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">23</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 
                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                          Semester 7
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseSeven" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Aplikasi dan Analisis Data Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Seminar Proposal</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Audit Sistem Informasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Analisis dan Desain Sistem</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perencanaan Pajak</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Forensik dan Investigasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Enterprise Resource Planning</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr><tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Manajemen Database</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 7</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">24</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                          Semester 8
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseEight" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Skripsi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 8</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">6</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                            </div>
                            <table style="width: 100%; border-collapse: collapse;">
                              <thead>
                                  <tr>
                                    <th style="border: 0 solid #ddd; padding: 8px; text-align: right;">Total Seluruh SKS:</th>
                                    <th style="border: 0 solid #ddd; padding: 8px; text-align: center;">157</th>
                                  </tr>
                              </thead>
                           </table>
                        </div>
                    </div> --}}

                    {{-- Berita Prodi --}}
                    <x-academic-news :latestPosts="$latestPosts"></x-academic-news>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
