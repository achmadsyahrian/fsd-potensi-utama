@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
                            <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        Users
                    </h2>
                </div>
            </div>
        </div>
    </div>


    <div class="page-body">
        <form action="{{route('admin.users.store')}}" method="post">
            @csrf
            @method('post')
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label required">Nama</div>
                                <x-form-input name="name" value="" placeholder="Masukkan nama" />
                            </div>
                            <div class="col-md">
                                <div class="form-label required">Username</div>
                                <x-form-input name="username" value="" placeholder="Masukkan username" />
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label">No. Telepon</div>
                                <x-form-input name="phone" value="" placeholder="08XXXXXXXXXX" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-list mt-3">
                    <button type="submit" class="btn btn-primary">
                        Tambah
                    </button>
                    <a href="{{route('admin.users.index')}}" class="btn">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
