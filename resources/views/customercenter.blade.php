@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <style>
        .site-navbar .site-navigation .site-menu>li>a {
            padding: 10px 0px;
            color: #f89d13;
            text-decoration: none !important;
            font-weight: 400;
        }

        .site-navbar .site-navigation .site-menu>li>a:hover {
            color: #1f3a6d;
        }

        p {
            font-family: inherit !important;
        }

        span[class^='icon-'],
        span[class*=' icon-'] {
            color: #1f3a6d;
        }

        /* text-based popup styling */
        .white-popup {
            position: relative;
            background: #FFF;
            padding: 25px;
            width: auto;
            max-width: 400px;
            margin: 0 auto;
        }

        /* Zoom effect */
        .mfp-zoom-in .mfp-with-anim {
            opacity: 0;
            transition: all 0.2s ease-in-out;
            transform: scale(0.8);
        }

        .mfp-zoom-in.mfp-bg {
            opacity: 0;
            transition: all 0.3s ease-out;
        }

        .mfp-zoom-in.mfp-ready .mfp-with-anim {
            opacity: 1;
            transform: scale(1);
        }

        .mfp-zoom-in.mfp-ready.mfp-bg {
            opacity: 0.8;
        }

        .mfp-zoom-in.mfp-removing .mfp-with-anim {
            transform: scale(0.8);
            opacity: 0;
        }

        .mfp-zoom-in.mfp-removing.mfp-bg {
            opacity: 0;
        }
    </style>
@endsection

@section('content')
    {{-- @if (Auth::check() && (Request::is('customercenter') || Request::is('track-shipment')))
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
@endif --}}


    <div class="site-section" data-aos="fade-up">
        <div class="container">
            <div class="row mt-5 mb-2">
                <div class="col-md-12 order-md-1" data-aos="fade">
                    <div class="text-left pb-1 mb-4">
                        <h2 class="text-primary">Customer Center</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                @auth
                    <!-- Tracking shipment -->
                    <div class="col-md-4">
                        <div class="card shadow-sm" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-block m-3 text-center">
                                <span><img src="{{ asset('img/tracking.png') }}" alt="Tracking" style="width:70px;"></span>
                                <h4 class="card-title">Tracking Shipment</h4>
                                <p class="card-text">Track your shipment easily using booking ID.</p>
                                <a href="{{ route('track.index') }}" class="btn btn-primary btn-loader">Track Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Account -->
                    <div class="col-md-4">
                        <div class="card shadow-sm" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-block m-3 text-center">
                                <span><img src="{{ asset('img/account.png') }}" alt="Account" style="width:70px;"></span>
                                <h4 class="card-title">Account</h4>
                                <p class="card-text">Manage your account information and settings.</p>
                                <a href="{{ route('account.invoices')}}" class="btn btn-primary btn-loader">Go to Account</a>
                            </div>
                        </div>
                    </div>
                @endauth


                <!-- Currency Calculator -->
                <div class="col-md-4">
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-block m-3 text-center">
                            <span><img src="{{ asset('img/currency.png') }}" alt="Currency" style="width:70px;"></span>
                            <h4 class="card-title">Currency Calculator</h4>
                            <p class="card-text">Convert global currencies here. These are only reference rates.</p>
                            <a id="currConverter"
                                href="https://www.xe.com/currencyconverter/convert/?Amount=1&From=USD&To=INR"
                                target="_blank" class="btn btn-primary">Convert Currency</a>
                        </div>
                    </div>
                </div>

                <!-- Inco Terms -->
                <div class="col-md-4">
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-block m-3 text-center">
                            <span><img src="{{ asset('img/INCOTerms.png') }}" alt="INCOTerms" style="width:70px;"></span>
                            <h4 class="card-title">Inco Terms</h4>
                            <p class="card-text">Detailed explanation of Multimodal International Commercial Terms.</p>
                            <a href="/incoterms" class="btn btn-primary btn-loader">Check Inco Terms</a>
                        </div>
                    </div>
                </div>

                <!-- IMO Compatibility -->
                <div class="col-md-4">
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-block m-3 text-center">
                            <span><img src="{{ asset('img/HazCompatibility.png') }}" alt="Haz Compatibility"
                                    style="width:70px;"></span>
                            <h4 class="card-title">IMO Compatibility</h4>
                            <p class="card-text">Check which classes of cargo can or cannot be stored together.</p>
                            <button type="button" class="callCommingSoon btn btn-primary">Check IMO Chart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- UN Location -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-block m-3 text-center">
                            <span><img src="{{ asset('img/UNLocation.png') }}" alt="UN Location" style="width:70px;"></span>
                            <h4 class="card-title">UN Location Codes</h4>
                            <p class="card-text">Location codes used globally for transportation and other purposes.</p>
                            <button type="button" class="callCommingSoon btn btn-primary">Check UN Location</button>
                        </div>
                    </div>
                </div>

                <!-- Metric Conversion -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-block m-3 text-center">
                            <span><img src="{{ asset('img/measuringTape.png') }}" alt="Measuring Tape"
                                    style="width:70px;"></span>
                            <h4 class="card-title">Metric Conversion</h4>
                            <p class="card-text">Calculate CBM/Volume of your cargo and convert different units.</p>
                            <button type="button" class="callCommingSoon btn btn-primary">Check Conversions</button>
                        </div>
                    </div>
                </div>

                <!-- Container Specs -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-block m-3 text-center">
                            <span><img src="{{ asset('img/container.png') }}" alt="Container" style="width:70px;"></span>
                            <h4 class="card-title">Container Specifications</h4>
                            <p class="card-text">Detailed dimensions of all types of Shipping Containers.</p>
                            <button type="button" class="callCommingSoon btn btn-primary">Check Your Container</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup -->
    <div id="commingSoonPopup" class="white-popup mfp-with-anim mfp-hide"
        style="border-radius: 0.25rem; border-top: 3px solid #c57906;">
        <p>
            <span class="icon-cogs" style="font-size: 40px;"></span>
            <span class="text-primary pl-3" style="font-size: 20px;">Stay Tuned!!</span>
        </p>
        <p>Thank you for visiting. The feature you are looking for is under construction.</p>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        function siteMagnificPopup() {
            $('.image-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300
                }
            });

            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        }
        siteMagnificPopup();

        $(document).ready(function() {
            $('.callCommingSoon').on('click', function() {
                openPopup();
            });

            $(".btn-loader").click(function() {
                $(this).html(
                    `<span class="spinner-border text-secondary spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`
                );
            });
        });

        function openPopup() {
            $.magnificPopup.open({
                removalDelay: 500,
                callbacks: {
                    beforeOpen: function() {
                        this.st.mainClass = 'mfp-zoom-in';
                    }
                },
                items: {
                    src: '#commingSoonPopup',
                },
                type: 'inline',
                midClick: true
            });
        }
    </script>
@endsection
