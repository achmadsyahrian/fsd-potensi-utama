@props(['route' => 'news', 'dataRecent' => null, 'categories' => null, 'tags' => null])

<div class="sidebar-area">

    {{-- Search --}}
    <div class="single-widget-area newsletter-widget mb-30">
        <h4>Pencarian <i class="fas fa-search"></i></h4>
        <form action="{{route('landing.'. $route .'.index')}}" method="get">
            <input type="text" name="s" id="nlemail" placeholder="Masukkan judul" value="{{request('s')}}">
            <button type="submit" class="btn newsbox-btn w-100">Cari</button>
        </form>
    </div>
    
   <!-- Add Widget -->
   <div class="single-widget-area add-widget mb-30">
       <a href="#">
           <img src="{{asset('landing/assets/img/ads-img/banner-potrait-sidebar.jpeg')}}" alt="{{env('APP_NAME')}}">
       </a>
   </div>

   <!-- Recent Post -->
   <div class="single-widget-area news-widget mb-30">
       <h4>{{($route == 'news') ? 'Berita' : 'Pengumuman' }} Terbaru</h4>
       @foreach ($dataRecent as $post)
           <div class="single-blog-post d-flex style-4 mb-30">
               <!-- Blog Thumbnail -->
               <div class="blog-thumbnail">
                   <a href="{{route('landing.' . $route .'.show', $post->slug)}}">
                       @if ($post->thumbnail)
                           <img src="{{ asset($post->thumbnail) }}"
                           style="height:90px; object-fit:cover;" class="img-fluid"
                           alt="{{$post->title}}">
                       @else
                           <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:90px; object-fit:cover;" alt="Universitas Potensi Utama">
                       @endif
                   </a>
               </div>

               <!-- Blog Content -->
               <div class="blog-content">
                   <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                   <a href="{{route('landing.' . $route .'.show', $post->slug)}}" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
               </div>
           </div>
       @endforeach
   </div>

   {{-- Categori --}}
   <div class="single-widget-area news-widget mb-30">
       <h4 class="mb-3">Category</h4>
       <div class="category-list">
           @foreach ($categories as $item)
               <a href="{{ route('landing.'. $route .'.category', $item->slug) }}" class="category-item d-inline-block mb-2 px-3 py-2 text-decoration-none">
                   {{ $item->name }}
               </a>
           @endforeach
       </div>
   </div>

   {{-- Tag --}}
   <div class="single-widget-area news-widget mb-30">
      <h4 class="mb-3">Tag</h4>
      <div class="category-list">
          @foreach ($tags as $item)
              <a href="{{ route('landing.' . $route . '.tag', $item->slug) }}" class="category-item d-inline-block mb-2 px-3 py-2">
                  {{ $item->name }}
              </a>
          @endforeach
      </div>
  </div>
</div>