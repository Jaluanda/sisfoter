<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Commander Dashboard - Test Apps">
    <meta name="author" content="Jaluanda - Interoperabilitas">
    <meta name="keyword" content="Bootstrap,Admin,Template,jQuery,CSS,HTML,Dashboard,WhatsApp">
    <title>@yield('title', 'Stisla Laravel') &mdash; {{ config('app.name', 'Laravel') }}</title>
    @isset($meta)
        {{ $meta }}
    @endisset
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">--}}

<!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
    {{--    <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('vendor/notyf/notyf.min.css') }}">--}}

</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg" style="background-color: #758332"></div>
        {{--        whatsapp style--}}
        {{--      <div class="navbar-bg" style="background-color: #22c75f"></div>--}}
        <nav class="navbar navbar-expand-lg main-navbar">
            @include('backend.partials.topnav')
        </nav>
        <div class="main-sidebar">
            @include('backend.partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @include('backend.partials.alerts')
            @yield('content')
        </div>
        <footer class="main-footer">
            @include('backend.partials.footer')
        </footer>
    </div>
</div>

<script src="{{ asset('stisla/js/modules/jquery.min.js') }}"></script>
<script src="{{ asset('stisla/js/modules/bootstrap.min.js') }}"></script>
<script defer async src="{{ asset('stisla/js/modules/popper.js') }}"></script>
<script defer async src="{{ asset('stisla/js/modules/tooltip.js') }}"></script>
<script defer src="{{ asset('stisla/js/modules/jquery.nicescroll.min.js') }}"></script>
<script defer src="{{ asset('stisla/js/modules/moment.min.js') }}"></script>
<script defer src="{{ asset('stisla/js/modules/marked.min.js') }}"></script>
<script defer src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>
<script defer src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
<script defer src="{{ asset('stisla/js/modules/chart.min.js') }}"></script>
<script defer src="{{ asset('vendor/select2/select2.min.js') }}"></script>

<script src="{{ asset('stisla/js/stisla.js') }}?{{ uniqid() }}"></script>
<script src="{{ asset('stisla/js/scripts.js') }}"></script>
<script src="{{ asset('stisla/js/page/components-chat-box.js') }}"></script>

{{--<script src="{{ route('js.dynamic') }}"></script>--}}
{{--<script src="{{ asset('assets/js/app.js') }}?{{ uniqid() }}"></script>--}}
{{--<script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/moment.min.js') }}"></script>--}}
<script src="{{ asset('assets/js/summernote.js') }}"></script>
{{--<script src="{{ asset('assets/js/stisla.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/scripts.js') }}"></script>--}}
{{--<script src="{{ asset('assets/modules/popper.js') }}"></script>--}}
{{--<script src="{{ asset('assets/modules/tooltip.js') }}"></script>--}}
{{--<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>--}}
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
@isset($script)
    {{ $script }}
@endisset
@yield('scripts')
</body>
</html>
