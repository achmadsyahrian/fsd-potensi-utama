@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle d-none d-md-block">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        Tambah Posts
                    </h2>
                </div>
            </div>
        </div>
    </div>


    <div class="page-body">
        <form action="{{route('admin.posts.store')}}" method="post" id="myForm" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="container-xl">
                <x-alert></x-alert>
                
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label required">Judul</div>
                                <x-form-input name="title" id="name-input" value="{{old('title')}}" placeholder="Masukkan nama" />
                            </div>
                            <div class="col-md">
                                <div class="form-label required">Slug</div>
                                <x-form-input name="slug" id="slug-input" value="" readonly />
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label required">Content</div>
                                <input id="x" value="{{old('content')}}" type="hidden" name="content">
                                <trix-editor input="x" class="@error('content') border-danger @enderror" style="min-height: 200px"></trix-editor>
                                @error('content')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md">
                                <label class="form-label required">Type</label>
                                <select type="text" class="form-select @error('type') is-invalid @enderror" name="type" id="select-types"
                                    value="">
                                    <option selected disabled>Pilih Type</option>
                                    <option value="news">Berita</option>
                                    <option value="announcement">Pengumuman</option>
                                    {{-- <option value="community_service">Pengabdian Masyarakat</option> --}}
                                </select>
                                @error('type')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md">
                                <label class="form-label required">Category</label>
                                <select type="text" class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="select-categories"
                                    value="">
                                    <option selected disabled>Pilih Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" {{ old('category_id', isset($post) ? $post->category_id : '') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md">
                                <div class="form-label">Tgl Post</div>
                                <x-form-input type="date" name="date" value="{{ old('date', now()->toDateString()) }}"/>
                            </div>                            
                            <div class="col-md">
                                <label class="form-label">Tags</label>
                                <select type="text" class="form-select" name="tags_id[]" placeholder="Pilih tags"
                                    id="select-tags" value="" multiple>
                                    @foreach ($tags as $item)
                                        <option value="{{ $item->id }}" {{ in_array($item->id, old('tags_id', isset($post) ? $post->tags->pluck('id')->toArray() : [])) ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_published" value="1" checked>
                                    <span class="form-check-label">Tampil untuk pengguna</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mt-5">
                            <div class="card-header">
                                <div class="form-label">Files Tambahan</div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 mt-1">
                                    <div class="col-md">
                                        <div id="filePreview"></div>
                                        <div class="mb-3">
                                            <input class="form-control @error('files') is-invalid @enderror" type="file" name="files[]" id="fileInput" multiple accept=".xlsx,.xls,.doc,.docx,.pdf,.jpg,.png,.jpeg" />
                                            @error('files')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mt-5">
                            <div class="card-header">
                                <div class="form-label">Thumbnail</div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 mt-1">
                                    <div class="col-md">
                                        <div class="img-preview mb-3 d-flex justify-content-center d-none" id="imgPreview">
                                            <img class="rounded-4" id="previewImage" src="" width="500" height="300"
                                                style="object-fit: cover;" alt="Image preview">
                                            <i id="removeImage" class="fas fa-times-circle text-danger cursor-pointer"
                                                title="Hapus Foto"></i>
                                        </div>
                                        <x-form-input type="file" name="thumbnail" id="thumbInput" value="" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-list mt-3">
                    <button type="submit" class="btn btn-primary">
                        Tambah
                    </button>
                    <a href="{{ route('admin.posts.index') }}" class="btn">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
    
    <script src="{{ asset('admin/js/form.js') }}"></script>
    
    
@endsection
