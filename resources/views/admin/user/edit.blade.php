@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.users.edit', $user) }}">{{ $user->name }}</a></li>
                            <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        {{ $user->name }}
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete">
                        <i class="fas fa-trash-alt me-1"></i> Hapus
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <form action="{{ route('admin.users.update', $user) }}" method="post">
            @csrf
            @method('patch')
            <div class="container-xl">
                <div class="row g-3">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label required">Nama</div>
                                        <x-form-input name="name" value="{{ old('name', $user->name ?? '') }}"
                                            placeholder="Masukkan nama" />
                                    </div>
                                    <div class="col-md">
                                        <div class="form-label required">Username</div>
                                        <x-form-input name="username" value="{{ old('username', $user->username ?? '') }}"
                                            placeholder="Masukkan username" />
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">No. Telepon</div>
                                        <x-form-input name="phone" value="{{ old('phone', $user->phone ?? '') }}"
                                            placeholder="08XXXXXXXXXX" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">Created at</div>
                                        <p>{{ $user->created_at->diffForHumans() ?? '--' }}</p>
                                    </div>
                                </div>
                                <div class="row g-3 mt-1">
                                    <div class="col-md">
                                        <div class="form-label">Last modified at</div>
                                        <p>{{ $user->updated_at->diffForHumans() ?? '--' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-list mt-3">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                    <a href="{{ route('admin.users.index') }}" class="btn">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>

    {{-- Modal Hapus --}}
    <x-confirm-modal
        modalId="modal-delete"
        method="delete"
        title="Apa kamu yakin?"
        type="danger"
        confirmMessage="Ya, Hapus"
        message="Apa yang telah Kamu lakukan tidak dapat dikembalikan."
        :actionUrl="route('admin.users.destroy', $user->id)"
    />
@endsection
