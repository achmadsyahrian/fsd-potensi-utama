@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active"><a href="#">List</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        Users
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary">
                        User Baru
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
                            <form action="{{ route('admin.users.index') }}" method="get" class="w-100">
                                <div class="input-icon d-flex">
                                    <input type="text" name="search" value="{{ request('search') }}" class="form-control form-control-rounded" placeholder="Cari…">
                                    <span class="input-icon-addon">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                        <path d="M21 21l-6 -6" />
                                      </svg>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-warning btn-pill">
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
                                <th>Username</th>
                                <th>No Telepon</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td><span class="text-muted">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</span></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->phone ?? '--' }}</td>
                                    <td class="text-center">
                                        <i class="fas fa-edit text-primary"></i> 
                                        <a href="{{ route('admin.users.edit', $item) }}" class="fw-bold text-primary">Edit</a>
                                        <i class="fas fa-key text-yellow ms-3"></i>
                                        <a href="#" class="fw-bold text-yellow" data-bs-toggle="modal" data-bs-target="#modal-reset" data-id="{{ $item->id }}" data-action="{{ route('admin.users.resetPassword', $item->id) }}" data-message="Anda yakin ingin mereset password untuk {{ $item->name }}?" >Reset</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="100" class="text-center">Tidak ada data <i class="far fa-sad-cry"></i></td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <x-pagination :data="$data"></x-pagination>
            </div>
        </div>
    </div>

    {{-- Modal Reset --}}
    <x-confirm-modal
        modalId="modal-reset"
        method="patch"
        title="Reset Password"
        type="yellow"
        confirmMessage="Ya, Reset"
        message=""
        :actionUrl="route('admin.users.resetPassword', '__ID__')"
    />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var resetButtons = document.querySelectorAll('a[data-bs-toggle="modal"][data-bs-target="#modal-reset"]');
    
            resetButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var modalElement = document.getElementById('modal-reset');
                    var modal = bootstrap.Modal.getOrCreateInstance(modalElement); 
                    
                    var id = this.getAttribute('data-id');
                    var actionUrl = this.getAttribute('data-action');
                    var message = this.getAttribute('data-message');
    
                    var form = modalElement.querySelector('form');
                    form.action = actionUrl;
    
                    var messageElement = modalElement.querySelector('.text-muted');
                    messageElement.textContent = message;
    
                    modal.show();
                });
            });
        });
    </script>
@endsection
