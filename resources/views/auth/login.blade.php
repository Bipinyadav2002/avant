@extends('layouts.master')

<!-- @section('css')
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
                                            <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
                                            <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
                                            <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
@endsection -->

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center no-gutters align-items-stretch overlap-section">

            <!-- Vision -->
            <div class="col-md-4">
                <div class="feature-1 pricing h-100 text-center">
                    <div>
                        <span><img src="{{ asset('img/eye-in-a-circle.svg') }}" alt="Icon" style="width: 6em;"></span>
                    </div>
                    <h2 class="my-4 heading">Vision</h2>
                    <p>
                        To provide professionally managed global logistics solutions,
                        with commitment towards maintaining best services and practices
                        at realistic cost to patrons.
                    </p>
                </div>
            </div>
            {{-- @auth
                <div class="col-md-4">
                    <div class="free-quote h-100 p-4" style="background-color: #343a40;">
                        <h2 class="my-4 heading text-center text-white">Track Your Shipment</h2>

                        <form id="trackForm" class="text-center mb-4">
                            <input type="text" name="booking_id" id="booking_id" class="form-control d-inline-block w-100"
                                placeholder="Enter Booking ID" required>

                            <div class="form-group mt-4 mt-sm-5">
                                <button type="submit" id="trackBtn" class="btn text-white px-4 py-2"
                                    style="background-color: #fca311; font-weight: bold; letter-spacing: 1px;">
                                    TRACK NOW
                                </button>
                            </div>

                            <!-- Loader (hidden by default) -->
                            <div id="loader" style="display: none; margin-top: 15px;">
                                <div class="spinner-border text-light" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            @endauth --}}


            @guest
                <div class="col-md-4">
                    <div class="free-quote bg-dark h-100 p-4">
                        <h2 class="my-4 heading text-center text-white">Customer Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            @if ($errors->has('login'))
                                <div class="alert alert-danger">{{ $errors->first('login') }}</div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class="form-group">
                                <label for="email" class="text-white">Email</label>
                                <input id="email" class="form-control" type="email" name="email"
                                    value="{{ old('email') }}" placeholder="Enter Email" autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group mb-4">
                                <label for="password" class="text-white">Password</label>
                                <input id="password" class="form-control" type="password" name="password"
                                    placeholder="Enter Password" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            {{-- <div class="form-group mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label text-white" for="remember">Remember Me</label>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary text-white btn-block" value="Login">
                            </div>

                            {{-- <div class="form-group mt-2">
                                <a href="{{ route('password.request') }}" class="text-white">Forgot Password?</a>
                            </div> --}}
                        </form>
                    </div>
                </div>

            @endguest
            <!-- Mission -->
            <div class="col-md-4">
                <div class="feature-3 pricing h-100 text-center">
                    <div>
                        <span><img src="{{ asset('img/target.svg') }}" alt="Icon" style="width: 6em;"></span>
                    </div>
                    <h2 class="my-4 heading">Mission</h2>
                    <p>
                        To continuously learn and evolve with the feedback and advice we get.
                        To be able to measure our growth by the quality of customer service we provide.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- model call -->
    <div id="track-result" class="mt-4"></div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="mb-0 text-primary">What We Offer</h2>
                    <p class="color-black-opacity-5">Your trust our commitment</p>
                </div>
            </div>

            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span>
                        </div>
                        <div>
                            <h3>LCL Consolidation</h3>
                            <p>Our LCL groupage service enables to cut costs of transporting smaller shipments.</p>
                            <p class="mb-0"><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
                        <div>
                            <h3>Freight Forwarding</h3>
                            <p>With vast knowledge and expertise we provide solutions to move cargo from across the globe to
                                and fro
                                India.</p>
                            <p class="mb-0"><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
                        <div>
                            <h3>Air Freight</h3>
                            <p>With an extensive agency network throughout the world, we provide Air Freight solutions
                                tailored to
                                your needs.</p>
                            <p class="mb-0"><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section block-13">

        <div class="owl-carousel nonloop-block-13">
            <div class="item">
                <a href="#" class="unit-1 text-center">
                    <img src="{{ asset('img/img_1.jpg') }}" alt="Image">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Storage</h3>
                        <p class="px-5"><br><br><br><br></p>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#" class="unit-1 text-center">
                    <img src="{{ asset('img/img_2.jpg') }}" alt="Image">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Air Transport</h3>
                        <p class="px-5"><br><br><br><br></p>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#" class="unit-1 text-center">
                    <img src="{{ asset('img/img_3.jpg') }}" alt="Image">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Road Transport</h3>
                        <p class="px-5"><br><br><br><br></p>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#" class="unit-1 text-center">
                    <img src="{{ asset('img/img_4.jpg') }}" alt="Image">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Sea Transport</h3>
                        <p class="px-5"><br><br><br><br></p>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#" class="unit-1 text-center">
                    <img src="{{ asset('img/img_5.jpg') }}" alt="Image">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Ware Housing</h3>
                        <p class="px-5"><br><br><br><br></p>
                    </div>
                </a>
            </div>


        </div>
    </div>
    </div>
    <div class="site-section border-top">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="mb-5 text-black">Try Our Services</h2>
                    <p class="mb-0"><a href="{{ url('/contact') }}" class="btn btn-primary py-3 px-5 text-white">Get
                            Started</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- model -->
    <!-- Modal popup-->
    <!-- <div class="modal fade" id="trackModal" tabindex="-1" role="dialog" aria-labelledby="trackModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header bg-dark text-white">
                                                    <h5 class="modal-title" id="trackModalLabel">Shipment Tracking Result</h5>
                                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body" id="track-result">
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                            </div> -->
@endsection

@section('script')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(function() {
            if ($('.nonloop-block-13').length > 0) {
                $('.nonloop-block-13').owlCarousel({
                    center: false,
                    items: 1,
                    loop: true,
                    stagePadding: 0,
                    margin: 0,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    nav: true,
                    navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
                    responsive: {
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        }
                    }
                });
            }

            $(window).stellar({
                responsive: false,
                parallaxBackgrounds: true,
                parallaxElements: true,
                horizontalScrolling: false,
                hideDistantElements: false,
                scrollProperty: 'scroll'
            });
        });


        $(document).ready(function() {
            $('#trackForm').on('submit', function(e) {
                e.preventDefault();
                const bookingId = $('#booking_id').val();

                if (!bookingId) return;

                $.ajax({
                    url: "{{ url('/track') }}",
                    method: "GET",
                    data: {
                        booking_id: bookingId
                    },
                    beforeSend: function() {
                        $('#track-result').html(
                            '<div class="text-center text-muted">Tracking shipment...</div>'
                        );
                    },
                    success: function(response) {
                        $('#track-result').html(response); // just display in same page
                    },
                    error: function() {
                        $('#track-result').html(
                            '<div class="alert alert-danger text-center">Something went wrong. Please try again.</div>'
                        );
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("trackForm").addEventListener("submit", function(e) {
                document.getElementById("loader").style.display = "block";
                document.getElementById("trackBtn").disabled = true;

                // Hide loader after 3 seconds
                setTimeout(() => {
                    document.getElementById("loader").style.display = "none";
                    document.getElementById("trackBtn").disabled = false;
                }, 1000);
            });
        });
    </script>
@endsection
