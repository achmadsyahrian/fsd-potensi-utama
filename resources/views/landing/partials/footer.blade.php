<footer class="footer-area mt-30">
    <!-- Footer Logo -->
    <div class="footer-logo mb-100">
        <a href="{{route('landing.home')}}"><img src="{{asset('landing/assets/img/logo-img/logo-fakultas.png')}}" style="width: 300px; object-fit:contain;" alt="{{env('APP_NAME')}}"></a>
    </div>
    <!-- Footer Content -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-content text-center">
                    <!-- Footer Nav -->
                    <div class="footer-nav">
                        <ul>
                            <li><a href="{{route('landing.contact')}}">{{__('partials/navbar.navbar.contact')}}</a></li>
                            <li><a href="{{route('landing.news.index')}}">{{__('partials/navbar.navbar.news')}}</a></li>
                            <li><a href="{{route('landing.announcement.index')}}">{{__('partials/navbar.navbar.announcement')}}</a></li>
                        </ul>
                    </div>
                    <!-- Social Info -->
                    <div class="footer-social-info">
                        <a href="https://www.instagram.com/official_upu/" target="_blank" data-toggle="tooltip" data-placement="top" title="instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/potensiutamamedan/about" target="_blank" data-toggle="tooltip" data-placement="top" title="facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.tiktok.com/@official_upu?lang=en" target="_blank" data-toggle="tooltip" data-placement="top" title="tiktok">
                            <i class="fab fa-tiktok" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/@PotensiUtamaUniversitas" target="_blank" data-toggle="tooltip" data-placement="top" title="youtube">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </div>

                    <p class="mb-15">{{__('partials/footer.footer.content')}}</p>

                    <p class="copywrite-text">
                        <a href="http://potensi-utama.ac.id/"> Copyright &copy; 2024 Universitas Potensi Utama. All rights reserved </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
