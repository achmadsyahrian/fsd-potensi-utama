@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        Beranda
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card card-md">
                        <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-mood-wink">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M15 10h.01" />
                                    <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                                    <path d="M8.5 8.5l1.5 1.5l-1.5 1.5" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <h3 class="h1">Selamat Datang, {{ $currentUser->name }} 👋</h3>
                                    <div class="markdown text-muted">
                                        Selamat datang di dashboard utama {{env('APP_NAME')}}. Di sini Anda dapat
                                        mengakses semua fitur penting dan informasi terbaru mengenai fakultas, dan
                                        lainnya. Untuk informasi lebih lanjut, kunjungi situs resmi kami !
                                    </div>
                                    <div class="mt-3">
                                        <a href="{{ route('landing.home') }}" class="btn btn-primary" target="_blank"
                                            rel="noopener">Kunjungi Situs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
