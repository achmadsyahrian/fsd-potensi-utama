@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle d-none d-md-block">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{ route('admin.researches.index') }}">Penelitian</a></li>
                            <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        {{$research->title}}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <form action="{{route('admin.researches.update', $research)}}" method="post" id="myForm" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="container-xl">
                <x-alert></x-alert>
                
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label required">Judul</div>
                                <x-form-input name="title" id="name-input" value="{{old('title', $research->title) }}" placeholder="Masukkan nama" />
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label required">Content</div>
                                <input id="x" type="hidden" name="content" value="{{ old('content', $research->content) }}">
                                <trix-editor input="x" class="@error('content') border-danger @enderror" style="min-height: 200px"></trix-editor>
                                @error('content')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>             
                    </div>
                </div>
                <div class="btn-list mt-3">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                    <a href="{{ route('admin.researches.index') }}" class="btn">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener("trix-attachment-add", function(event) {
                if (event.attachment.file) {
                    uploadFile(event.attachment);
                }
            });

            function uploadFile(attachment) {
                let formData = new FormData();
                formData.append('file', attachment.file);

                fetch('/admin/research/upload-file', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.url) {
                        attachment.setAttributes({ url: data.url });
                    } else {
                        attachment.remove();
                        alert('Gagal mengunggah file. Pastikan Anda hanya mengunggah gambar.');
                    }
                })
                .catch(() => {
                    attachment.remove();
                    alert('Gagal mengunggah file. Pastikan Anda hanya mengunggah gambar.');
                });
            }
        });
    </script>
@endsection
