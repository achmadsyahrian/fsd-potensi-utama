@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    {{-- <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="#">Categories</a></li>
                            <li class="breadcrumb-item active"><a href="#">List</a></li>
                        </ol>
                    </div> --}}
                    <h2 class="page-title">
                        Categories
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">
                        Category Baru
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="page-body">
        <div class="container-xl">
            <x-alert></x-alert>
            <div class="card">
                <div class="card-body border-bottom py-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <form action="{{ route('admin.categories.index') }}" method="get" class="w-100">
                                <div class="input-icon d-flex">
                                    <input type="text" name="search" value="{{ request('search') }}"
                                        class="form-control form-control-rounded" placeholder="Cari…">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-warning btn-pill">
                                Reset Pencarian <i class="fas fa-undo ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">#</th>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Terakhir DiPerbarui</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td><span
                                            class="text-muted">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</span>
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('M d, Y') ?? '--' }}</td>
                                    <td class="text-center">
                                        <i class="fas fa-eye text-secondary"></i>
                                        <a href="#" class="fw-bold text-secondary detail-button" data-id="{{ $item->id }}" data-bs-toggle="modal"
                                            data-bs-target="#modal-detail">Detail</a>

                                        <i class="fas fa-edit text-primary ms-3"></i>
                                        <a href="#" class="fw-bold text-primary edit-button" data-bs-toggle="modal" data-bs-target="#modal-edit" data-id="{{ $item->id }}" data-action="{{ route('admin.categories.update', $item->id) }}">Edit</a>
                                        

                                        <i class="fas fa-trash-alt text-danger ms-3"></i>
                                        <a href="#" class="fw-bold text-danger" data-bs-toggle="modal" data-bs-target="#modal-delete" data-id="{{ $item->id }}" data-action="{{ route('admin.categories.destroy', $item->id) }}" data-message="Anda yakin ingin mengghapus category '{{ $item->name }}'?">Hapus</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="100" class="text-center">Tidak ada data <i class="far fa-sad-cry"></i>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <x-pagination :data="$data"></x-pagination>
            </div>
        </div>
    </div>

    {{-- Modal Create --}}
    @include('admin.category.modal.create')

    {{-- Modal Detail --}}
    @include('admin.category.modal.detail')

    {{-- Modal Delete --}}
    @include('admin.category.modal.delete')
    
    {{-- Modal Edit --}}
    @include('admin.category.modal.edit')
    
    
@endsection
