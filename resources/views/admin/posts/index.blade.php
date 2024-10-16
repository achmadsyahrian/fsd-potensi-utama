@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle d-none d-md-block">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="#">Posts</a></li>
                            <li class="breadcrumb-item active"><a href="#">List</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        Posts
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                        Post Baru
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
                            <form action="{{ route('admin.posts.index') }}" method="get" class="w-100">
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
                            <a href="{{ route('admin.posts.index') }}" class="btn btn-warning btn-pill">
                                Reset Pencarian <i class="fas fa-undo ms-2"></i>
                            </a>
                            <div class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#modal-search">
                                <i class="fas fa-filter fs-2 ms-3" title="Filter Pencarian" data-bs-toggle="tooltip"
                                    data-bs-placement="right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">#</th>
                                <th>Thumb</th>
                                <th>Judul</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Tanggal Dibuat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td><span
                                            class="text-muted">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</span>
                                    </td>
                                    <td>
                                        @if ($item->thumbnail)
                                            <img src="{{ asset($item->thumbnail) }}" width="70" height="50"style="object-fit: cover" alt="">
                                        @else
                                            <img src="{{ asset('landing/assets/img/Logopotensiutama.png') }}" width="70" height="50"style="object-fit: cover" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium" title="{{$item->title}}" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom">{{ \Illuminate\Support\Str::limit($item->title, 30, '...') }}</div>
                                                <div class="text-muted fs-5"><a href="#" class="text-reset">{{ $item->getTypeLabel() }}</a></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if (Auth::check() && Auth::user()->id === $item->user->id)
                                            <i class="fas fa-user-circle me-1 text-cyan"></i>
                                            <span class="text-cyan">Anda</span>
                                        @else
                                            <i class="fas fa-user-circle me-1"></i>
                                            {{ $item->user->name }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->is_published)
                                            <span class="badge bg-success-lt">Published</span>
                                        @else
                                            <span class="badge bg-danger-lt">Unpublished</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span title="Diupdate pada {{ \Carbon\Carbon::parse($item->updated_at)->format('j F, Y') }}" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom">{{ \Carbon\Carbon::parse($item->created_at)->format('j F, Y') }}</span>
                                    </td>
                                    <td class="text-center">
                                        <i class="fas fa-eye text-secondary"></i>
                                        <a href="{{ route('admin.posts.show', $item->id) }}"
                                            class="fw-bold text-secondary detail-button">View</a>

                                        <i class="fas fa-edit text-primary ms-3"></i>
                                        <a href="{{ route('admin.posts.edit', $item->id) }}"
                                            class="fw-bold text-primary edit-button">Edit</a>


                                        <i class="fas fa-trash-alt text-danger ms-3"></i>
                                        <a href="#" class="fw-bold text-danger" data-bs-toggle="modal"
                                            data-bs-target="#modal-delete" data-id="{{ $item->id }}"
                                            data-action="{{ route('admin.posts.destroy', $item->id) }}"
                                            data-message="Anda yakin ingin menghapus postingan '{{ \Illuminate\Support\Str::limit($item->title, 30, '...') }}'?">Hapus</a>
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

    {{-- Modal Delete --}}
    @include('admin.posts.modal.delete')

    {{-- Modal Search --}}
    @include('admin.posts.modal.search')
@endsection
