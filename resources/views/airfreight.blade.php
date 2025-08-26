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

<div class="site-section bg-image img-fluid" style="background-image: url('{{ asset('img/airfright_cover.png') }}');">
    <div class="container">
      <div class="row mt-5 mb-5">
        
        <div class="col-md-6 order-md-1" data-aos="fade">
          <div class="text-left pb-1 mb-4">
            <h2 class="text-primary">air freight</h2>
          </div>
          <p style="color: #fff;">AVANT strives for efficiency by ensuring swift and cost effective measures while handling air freight. We believe the fastest mode of transport should also not be most expensive. To meet times constraints we try to be a step ahead of the system and processes. </p>

          <p style="color: #fff;">Extensive Global Network and partnerships with leading air carriers ensure optimal operational performance.</p>
          
          <div class="text-left pb-1 mb-4 mt-4">
            <h2 class="text-primary">some key services</h2>
          </div>
          <ul style="color: #fff;">
            <li><p>Worldwide Consolidation Service</p></li>
            <li><p>Full-Weight Loads</p></li>
            <li><p>Door-to-Door</p></li>
            <li><p>Customs Clearance</p></li>
            <li><p>Domestic Air Freight service</p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

@endsection