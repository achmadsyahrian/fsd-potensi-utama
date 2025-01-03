@if($latestAnnouncement->isNotEmpty())
<section class="breaking-news-area">
   <div class="container-fluid">
       <div class="row">
           <div class="col-12">
               <!-- Breaking News Widget -->
               <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                   <div class="title">
                    <h6>{{__('home.breaking_news')}}</h6>
                   </div>
                   <div id="breakingNewsTicker" class="ticker">
                      <ul>
                        @foreach($latestAnnouncement as $announcement)
                            <li><a href="{{route('landing.announcement.show', $announcement->slug)}}">{{ app()->getLocale() == 'en' ? $announcement->title_en : $announcement->title }}</a></li>
                        @endforeach
                      </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endif
