<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    @yield('css')
</head>

<body>
    <!-- Back to top button -->
    <a id="button"><img src="{{ asset('img/scollToTopWhite.png') }}" alt="Scroll To Top">
    </a>

    <div class="site-wrap">

        @include('partials.topmenu')

        @if (Request::is('/'))
            @include('partials.homemainbackground')
        @endif
        <div class="content">

            @yield('content')

        </div>

        <footer class="site-footer">
            @include('partials.footer')
        </footer>
    </div>

    @include('partials.scripts')
    @yield('script')
</body>

</html>
