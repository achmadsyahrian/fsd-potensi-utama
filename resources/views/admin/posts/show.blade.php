@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle d-none d-md-block">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('admin.posts.show', $post) }}">{{ $post->title }}</a></li>
                            <li class="breadcrumb-item active"><a href="#">Detail</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        {{ $post->title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="card-title">
                        Informasi {{ $post->getTypeLabel() }}
                    </h3>                    
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom untuk informasi postingan (8 kolom) -->
                        <div class="col-md-8">
                            <div class="row mb-4">
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Judul</div>
                                    <div class="datagrid-content">{{ $post->title }}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Author</div>
                                    <div class="datagrid-content">{{ $post->user->name }}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Slug</div>
                                    <div class="datagrid-content">{{ $post->slug }}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Category</div>
                                    <div class="datagrid-content">{{ $post->category->name }}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Dibuat pada</div>
                                    <div class="datagrid-content">
                                        <span class="status status-green">
                                            {{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') ?? '--' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Tags</div>
                                    <ul class="list-unstyled">
                                        @forelse($post->tags as $tag)
                                            <li class="badge bg-primary text-white me-1">{{ $tag->name }}</li>
                                        @empty
                                            <li class="text-secondary">Tidak ada tag untuk postingan ini.</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Kolom untuk thumbnail (4 kolom) -->
                        <div class="col-md-4">
                            <div class="mb-4">
                                @if ($post->thumbnail)
                                    <img src="{{ $post->thumbnail }}" width="300" height="200"
                                        style=" object-fit: cover" alt="Thumbnail">
                                @else
                                    <p>Tidak ada thumbnail.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            @if ($post->is_published == 1)
                                <a class="btn btn-primary" href="{{ route('landing.news.show', $post->slug) }}" target="_blank">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="fas fa-eye text-white"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Lihat Postingan
                                    </span>
                                </a>
                            @else
                                <a class="btn btn-secondary" title="Postingan tidak dipublish!" data-bs-toggle="tooltip"
                                data-bs-placement="right">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="far fa-eye-slash text-white"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Lihat Postingan
                                    </span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <style>  
               .content img {
                  min-width: 50%;
                  height: 300px;
                  object-fit: cover;
                  display: block;
                  /* margin: 0 auto; */
               }
               .content video {
                  min-width: 50%;
                  height: 300px;
                  object-fit: cover;
                  display: block;
                  /* margin: 0 auto; */
               }
               .content .attachment__caption .attachment__name {
                  text-align: center;
                  display: block;
                  margin: 0 auto;
               }
               .content .attachment__caption .attachment__size {
                  display: none;
               }
               .content .files-name:hover {
                    color: red;
                }
            </style>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Content</h3>
                </div>
                <div class="card-body">
                    <div class="row content">
                        {!! preg_replace_callback(
                            '/<figure[^>]*data-trix-attachment="([^"]+)"[^>]*>.*?<\/figure>/',
                            function ($matches) {
                                $attachment = json_decode(html_entity_decode($matches[1]), true);
                                if ($attachment && $attachment['contentType'] === 'video/mp4') {
                                    return "<video controls>
                                                <source src='{$attachment['url']}' type='video/mp4'>
                                                Your browser does not support the video tag.
                                            </video>";
                                }
                                return $matches[0];
                            },
                            $post->content
                        ) !!}

                        {{-- File Tambahan yg bisa diunduh users --}}
                        @if ($post->files->isNotEmpty())
                        <h3 class="mt-3">File Tambahan</h3>
                        <ul>
                                @foreach($post->files as $file)
                                    <li>
                                        <a class="files-name" href="{{asset($file->file_path)}}" download>{{ $file->file_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
