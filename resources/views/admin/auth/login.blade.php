<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login | {{env('APP_NAME')}}</title>
    <link rel="shortcut icon" href="{{asset('landing/assets/img/logo-img/Logopotensiutama.png')}}" type="image/x-icon">
    
    <!-- CSS files -->
    <link href="{{ asset('admin/dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="{{ asset('admin/dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-5 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img
                            src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" height="70" alt=""></a>
                </div>
                <div class="">
                    <h2 class="h2 text-center mb-4">Masuk ke akun anda</h2>
                    <x-alert></x-alert>
                    <form action="{{ route('admin.auth.authenticate') }}" method="post" autocomplete="off" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="username" name="username" class="form-control" placeholder="Masukkan username"
                                autocomplete="off">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Password
                            </label>
                            <div class="input-group input-group-flat">
                                <input id="password-input" type="password" class="form-control"
                                    placeholder="Masukkan password" name="password" autocomplete="off">
                                <span class="input-group-text">
                                    <a href="#" id="toggle-password" class="link-secondary" title="Lihat password"
                                        data-bs-toggle="tooltip">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="mb-2">
                           <label class="form-check">
                               <input type="checkbox" class="form-check-input" name="remember" />
                               <span class="form-check-label">Remember me on this device</span>
                           </label>
                        </div>                       
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        </div>
                    </form>
                </div>
                <div class="hr-text">atau</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('landing.home') }}" class="btn w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    class="icon text-twitter" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-unlink">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M17 22v-2" />
                                    <path d="M9 15l6 -6" />
                                    <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                    <path
                                        d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    <path d="M20 17h2" />
                                    <path d="M2 7h2" />
                                    <path d="M7 2v2" />
                                </svg>
                                Kembali ke Situs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-7 d-none d-lg-block">
            <!-- Photo -->
            <div class="position-relative bg-cover h-100 min-vh-100"
                style="background-image: url('{{ asset('landing/assets/img/building-img/gedung-upu.jpg') }}');">
                <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.5;"></div>
            </div>

        </div>
    </div>

    <script src="{{ asset('admin/dist/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('admin/dist/js/demo.min.js?1684106062') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password-input');
            const togglePassword = document.getElementById('toggle-password');

            togglePassword.addEventListener('click', function(event) {
                event.preventDefault(); // Prevents the default link behavior
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;

                // Toggle the icon or tooltip if necessary
                const icon = togglePassword.querySelector('svg');
                if (type === 'password') {
                    // Change icon to "show" password
                    icon.innerHTML = `
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                      <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                  `;
                } else {
                    // Change icon to "hide" password
                    icon.innerHTML = `
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                      <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                  `;
                }
            });
        });
    </script>
</body>

</html>
