@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="#">Profile</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        Profile
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <x-alert></x-alert>
            <div class="card">
                <div class="row g-0">
                    <form action="{{ route('admin.profile.update') }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="col d-flex flex-column">
                            <div class="card-body">
                                <h3 class="card-title">Detail Profile</h3>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label required">Nama</div>
                                        <x-form-input name="name" value="{{ $currentUser->name }}"
                                            placeholder="Masukkan nama" />
                                    </div>
                                    <div class="col-md">
                                        <div class="form-label required">Username</div>
                                        <x-form-input name="username" value="{{ $currentUser->username }}"
                                            placeholder="Masukkan username" />
                                    </div>
                                </div>
                                <h3 class="card-title mt-4">No. Handphone</h3>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <x-form-input name="phone" value="{{ $currentUser->phone }}"
                                            placeholder="08XXXXXXXXXX" />
                                    </div>
                                </div>
                                <h3 class="card-title mt-4">Password Baru</h3>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <x-form-input type="password" name="new_password" placeholder="••••••••" />
                                        <small class="form-hint">
                                            Kata sandi Anda harus terdiri dari 8-20 karakter. Kosongkan jika Anda tidak
                                            ingin mengubah kata sandi.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent mt-auto">
                                <div class="btn-list justify-content-end">
                                    <button type="reset" href="#" class="btn">
                                        Batal
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
