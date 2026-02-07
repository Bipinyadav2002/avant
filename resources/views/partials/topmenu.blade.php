<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body">
        @if (Auth::check())
            <div class="p-3 border-top">
                <!-- <strong>{{ Auth::user()->name }}</strong><br>
      <small>{{ Auth::user()->email }}</small><br> -->
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();"
                    class="btn btn-sm btn-danger mt-2">Logout</a>
                <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endif
    </div>
</div>

<header class="site-navbar py-3" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-9 col-xl-2">
                @if (Request::is('/') || Request::is('airfreight'))
                    <h1 class="mb-0"><a href="/" class="text-white h2 mb-0"><img
                                src="{{ asset('img/logo_white_svg.svg') }}"
                                onerror="this.onerror=null; this.src='{{ asset('img/avantlogo.png') }}'" alt="Avant"
                                width="150px;"></a></h1>
                @else
                    <h1 class="mb-0"><a href="/" class="text-white h2 mb-0"><img
                                src="{{ asset('img/logo_blue_svg.svg') }}"
                                onerror="this.onerror=null; this.src='{{ asset('img/avantbluelogo.png') }}'"
                                alt="Avant" width="150px;"></a></h1>
                @endif
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                        <li class="active"><a href="{{ route('login') }}">Home</a></li>
                        <li class="has-children">
                            <a href="{{ url('/oceanfreight#headingOne') }}">Ocean Freight</a>
                            <ul class="dropdown">
                                <li><a class="oceanfreight" href="{{ url('/oceanfreight#headingOne') }}">lcl
                                        consolidation</a></li>
                                <li><a class="oceanfreight" href="{{ url('/oceanfreight#headingTwo') }}">freight
                                        forwarding</a></li>
                                <li><a class="oceanfreight"
                                        href="{{ url('/oceanfreight#headingThree') }}">transportation</a></li>
                                <li><a class="oceanfreight" href="{{ url('/oceanfreight#headingFour') }}">hazardous
                                        cargo</a></li>
                                <li><a class="oceanfreight"
                                        href="{{ url('/oceanfreight#headingFive') }}">warehousing</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('airfreight') }}">Air Freight</a></li>
                        <li><a href="{{ route('hazardous') }}">Hazardous Cargo</a></li>
                        <li><a href="{{ route('customercenter') }}">Customer Center</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact')}}">Contact</a></li>
                        <li>@if (Auth::check() && (Request::is('customercenter') || Request::is('account_invoices')|| Request::is('track-shipment')))
                    <div class="user-profile-box mt-4 me-4 p-3 d-none d-md-block"
                        style="position: absolute; top: 20px; right: 20px; border-radius: 8px; z-index: 1000; text-align: right; background: transparent; box-shadow: none;">
                        <strong class="d-block" style="color: #000; font-size: 14px;">
                            Welcome, {{ Auth::user()->name }}
                        </strong>
                        <small style="color: #555; font-size: 13px;">
                            {{ Auth::user()->email }}
                        </small><br>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="btn btn-sm btn-danger mt-2 px-3">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endif</li>
                    </ul>
                </nav>


                <!-- @if (Auth::check() && (Request::is('customercenter') || Request::is('account_invoices')|| Request::is('track-shipment')))
                    <div class="user-profile-box mt-4 me-4 p-3 d-none d-md-block"
                        style="position: absolute; top: 20px; right: 20px; border-radius: 8px; z-index: 1000; text-align: right; background: transparent; box-shadow: none;">
                        <strong class="d-block" style="color: #000; font-size: 14px;">
                            Welcome, {{ Auth::user()->name }}
                        </strong>
                        <small style="color: #555; font-size: 13px;">
                            {{ Auth::user()->email }}
                        </small><br>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="btn btn-sm btn-danger mt-2 px-3">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endif -->

            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto ml-auto py-3" style="position: relative; top: 3px;">
                <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                    @if (Request::is('/') || Request::is('airfreight'))
                        <span class="icon-menu h3"></span>
                    @else
                        <span class="icon-menu h3" style="color: #1f3a6d;"></span>
                    @endif
                </a>
            </div>
        </div>
    </div>
</header>
