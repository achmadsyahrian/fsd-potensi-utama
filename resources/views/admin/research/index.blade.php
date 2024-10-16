@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle d-none d-md-block">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="#">Penelitian</a></li>
                            <li class="breadcrumb-item active"><a href="#">Data</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        Penelitian
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <x-alert></x-alert>
            <div class="card">
                <div class="card-body border-bottom py-3">
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">#</th>
                                <th>Judul</th>
                                <th>Terakhir Diperbarui</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td>
                                        <div class="text-muted">1</div>
                                    </td>
                                    <td>
                                        {{ \Illuminate\Support\Str::limit($item->title, 50, '...') }}
                                    </td>
                                    <td>
                                        <span title="Diupdate pada {{ \Carbon\Carbon::parse($item->updated_at)->format('j F, Y') }}" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom">{{ \Carbon\Carbon::parse($item->created_at)->format('j F, Y') }}</span>
                                    </td>
                                    <td class="text-center">
                                        <i class="fas fa-eye text-secondary"></i>
                                        <a href="{{ route('landing.research.index') }}" class="fw-bold text-secondary detail-button">View</a>

                                        <i class="fas fa-edit text-primary ms-3"></i>
                                        <a href="{{ route('admin.researches.edit', $item->id) }}"
                                            class="fw-bold text-primary edit-button">Edit</a>
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
            </div>
        </div>
    </div>
@endsection
