<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ Auth::guest() ? 'Login |' : '' }} {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('admin/image/Logopotensiutama.png') }}" sizes="32x32" />
    <!-- CSS files -->
    <link href="{{ asset('admin/dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    {{-- Trix --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        trix-editor .attachment {
            display: inline-block;
            width: auto;
            margin: 0 10px 10px 0; 
        }
    
        trix-editor .attachment img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        
    </style>
</head>

<body>
    <script src="{{ asset('admin/dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page">
        {{-- Sidebar --}}
        @include('admin.partials.sidebar')

        {{-- Header --}}
        @include('admin.partials.header')

        <div class="page-wrapper">
				@yield('content')

				@include('admin.partials.footer')
        </div>
    </div>
    <!-- Libs JS -->
    @include('admin.partials.script')
</body>

</html>
