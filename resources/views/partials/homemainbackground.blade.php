<div class="site-blocks-cover overlay" style="background-image: url('{{ asset('img/hero_bg_1.jpg') }}');" data-aos="fade"
  data-stellar-background-ratio="0.5">
  @auth
  <div class="user-hero-box d-none d-md-block"
    style="
    position:absolute;
    top:50px;
    right:145px;
    z-index:999;
    background:rgba(0,0,0,0.45);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    color:#fff;
    padding:18px 20px;
    border-radius:10px;
    text-align:right;
    min-width:240px;">

    <strong style="font-size:14px;">
      Welcome, {{ Auth::user()->name }}
    </strong><br>

    <small style="font-size:12px;color:#ddd;">
      {{ Auth::user()->email }}
    </small>

    <form method="POST" action="{{ route('logout') }}" class="mt-3">
      @csrf
      <button type="submit"
        class="btn btn-sm px-4"
        style="background:#ff3b3b;color:#fff;border:none;">
        LOGOUT
      </button>
    </form>
  </div>
  @endauth
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white font-weight-light mb-4" style="margin-bottom: 151px !important;">connecting india to the
          world</h1>
      </div>
    </div>
  </div>
</div>