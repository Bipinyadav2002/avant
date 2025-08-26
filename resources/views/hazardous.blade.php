@extends("layouts.master")

@section("css")
    <style>
    .site-navbar .site-navigation .site-menu > li > a {
        padding: 10px 0px;
        color: #f89d13;
        text-decoration: none !important;
        font-weight: 400; }
    .site-navbar .site-navigation .site-menu > li > a:hover {
        color: #1f3a6d; }
    p {
        font-family: inherit !important;
    }
    </style>
@endsection

@section("content")

<div class="site-section">
    <div class="container">
      <div class="row mt-5 mb-5">
        
        <div class="col-md-6 order-md-1" data-aos="fade">
          <div class="text-left pb-1 mb-4">
            <h2 class="text-primary">hazardous cargo</h2>
          </div>
          <p><strong>Safety First,</strong> is not only a policy but our
              motto too. Handling hazardous cargoes
              has its own set of challenges. With our
              in-depth knowledge, we overcome these
              challenges by also making safety our top
              most priority. Under HAZ LCL program we
              ensure that only compatible classes are
              stored together.
              </p>

          <p>In addition to Haz FCL and Tank services we also provide weekly LCL Consolidation services from China, Taiwan, Japan, Singapore and Europe.</p>
          
          <p>To know compatibility of your haz cargoes, click Check compatibility button</p>
          
          <p>For HAZ Approval, click HAZ Approval button</p>
          <div class="col-md-12 order-md-1 text-center" data-aos="fade">
            <div class="btn-group buttons mb-1 mt-1"><a href="#"><button type="button" class="btn btn-primary">check compatibility</button></a></div>
            <div class="btn-group buttons mb-1 mt-1"><a href="#"><button type="button" class="btn btn-primary">HAZ Approval</button></a></div>
          </div>

        </div>
        <div class="col-md-5 ml-auto mb-5 mt-5 order-md-2" data-aos="fade">
          <img src="{{ asset('img/haz_cover.png') }}" alt="Image" class="img-fluid rounded">

        </div>
      </div>
    </div>
  </div>

@endsection
