<div class="post-details-content mb-100">
    <h1 class="mb-30">{{__('home.program_news.title')}}</h1>
    <div class="row">
        @foreach ($latestPosts as $post)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-blog-post style-2 mb-5">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <a href="{{route('landing.news.show', $post->slug)}}">
                            @if ($post->thumbnail)
                                <img src="{{ asset($post->thumbnail) }}" style="height:240px; object-fit:cover;"
                                    class="img-fluid" alt="{{$post->title}}">
                            @else
                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}"
                                    style="height:240px; object-fit:cover;" alt="Universitas Potensi Utama">
                            @endif
                        </a>
                    </div>

                    <!-- Blog Content -->
                    <div class="blog-content">
                        <span class="post-date">{{ \Carbon\Carbon::parse($post->date)->format('M j, Y') }}</span>
                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-title" title="{{ app()->getLocale() == 'en' ? $post->title_en : $post->title }}">
                            {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($post->title_en, 50, '...') : \Illuminate\Support\Str::limit($post->title, 50, '...') }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if ($latestPosts->isEmpty())
        <p >{{__('home.program_news.empty')}} <i class="far fa-sad-cry"></i></p>
    @endif
    
    <div class="col-12">
        <div class="load-more-button text-center">
            <a href="#" class="btn newsbox-btn">{{__('home.program_news.read_more')}}</a>
        </div>
    </div>
</div>
