@extends('landing.layouts.app')
{{-- Head --}}
@section('title', $post->title . ' - ' . env('APP_NAME'))
@section('meta_keywords', 'pengumuman fsd upu, pengumuman fsd potensi utama, pengumuman pendidikan seni dan desain upu, pengumuman kampus upu')
@section('canonical', env('APP_URL').'/pengumuman/' . $post->slug)
@section('meta_description', Str::limit(strip_tags($post->content), 200))

@section('content')

    @include('landing.partials.breaking-news')

    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url('{{ $post->thumbnail ? asset($post->thumbnail) : asset('landing/assets/img/building-img/gedung-b.jpg') }}')">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-12">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Pengumuman</span></p>
                        <h1 class="post-title detail-title">{{$post->title}}</h1>
                        <div class="d-flex align-items-center">
                            <span class="post-date mr-30">{{ $post->created_at->format('M j, Y') }}</span>
                            <span class="post-date">By {{$post->user->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        @if ($post->thumbnail)
                        <img class="mb-30" src="{{asset($post->thumbnail)}}" style="width:100%; height:400px; object-fit:cover;" alt="{{$post->title}}">
                        @endif
                        <div class="content">
                            {!! $post->content !!}

                            @if ($post->files->isNotEmpty())
                                <h3>File Tambahan</h3>
                                <ul>
                                    @foreach($post->files as $file)
                                        <li>
                                            <a class="files-name" href="{{asset($file->file_path)}}" download>{{ $file->file_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="content-footer mt-5">
                            <p class="font-bold mb-0">Tags:</p>
                            @forelse ($post->tags as $tag)
                                <a href="{{ route('landing.news.tag', $tag->slug) }}" class="category-item d-inline-block mb-2 px-3 py-2 text-decoration-none">
                                    {{ $tag->name }}
                                </a>
                            @empty
                                <a>Tidak ada tags</a>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <x-post-sidebar :dataRecent="$dataRecent" :categories="$categories" :tags="$tags" route='announcement'></x-post-sidebar>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var content = document.querySelector('.content');
            if (content) {
                content.innerHTML = content.innerHTML.replace(/<strong>(.*?)<\/strong>/g, '<h3>$1</h3>');
            }
        });
    </script>
    
@endsection
