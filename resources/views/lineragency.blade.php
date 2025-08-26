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
        
        <div class="col-md-6 order-md-1" data-aos="fade" data-aos-delay="100">
            <div class="text-left pb-1 mb-4">
                <h2 class="text-primary">liner agency</h2>
            </div>
            <p>
                Our well-rounded service portfolio includes sales and marketing, port
                operations, container tracking, haulage, documentation, finance reporting and
                claims handling expertise. We are experienced in handling all types of cargo
                whatever the shape or size. Whether you need assistance or advice with
                containers, RORO, break-bulk or out-of-gauge cargoes, Team Avant will meet all
                of your requirements.
            </p>
        
        
            <div class="text-left pb-1 mb-2 mt-5">
                <h3 class="text-primary">Sales and Marketing</h3>
                <p>Our team of professional salesmen with organic knowledge of local market help in marketing our principal’s services.</p>
            </div>
        
            <div class="text-left pb-1 mb-2 mt-2">
                <h3 class="text-primary">Port Operations</h3>
                <p>Our experts on the ground at the port ensure clinical handling of port inward and outward operations of all types of vessels.</p>
            </div>
            
            <div class="text-left pb-1 mb-2 mt-2">
                <h3 class="text-primary">Container Tracking</h3>
                <p>Our IT gives our Principals an Edge on real-time tracking of containers. Inventory management and related reports assist all teams enable all teams for high performance</p>
            </div>
            
            <div class="text-left pb-1 mb-2 mt-2">
                <h3 class="text-primary">Inland Haulage</h3>
                <p>We help our Principals to be able to use Extensive network of ICD’s in India. Predefined rates help our principals in marketing their services.</p>
            </div>
            
            <div class="text-left pb-1 mb-2 mt-2">
                <h3 class="text-primary">Documentation</h3>
                <p>Team Avant ensures that documentation is processed in accordance with local laws and international guidelines.</p>
            </div>
            
            <div class="text-left pb-1 mb-2 mt-2">
                <h3 class="text-primary">Finance Reporting</h3>
                <p>Financial Governance is a high priority task for us, we ensure that Freight, Detention and other collection data is swiftly shared with our Principals.</p>
            </div>
            
            <div class="text-left pb-1 mb-2 mt-2">
                <h3 class="text-primary">Claims Handling Expertise.</h3>
                <p>Our personnel handle claims with risk management procedures in accordance with the requirements of our Principals.</p>
            </div>
          
          <div class="col-md-12 order-md-1 text-center" data-aos="fade">
            <div class="btn-group buttons mb-1 mt-1"><a href="/userrequest/8"><button type="button" class="btn btn-primary">Get in Touch</button></a></div>
          </div>

        </div>
        <div class="col-md-5 ml-auto mb-2 mt-5 order-md-2" data-aos="fade" data-aos-delay="100">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="card shadow-sm" data-aos="fade-up">
                        <div class="card-block m-3">
                            <div class="text-center">
                            <span><img src="img/INCOTerms.png" alt="" style="width:70px;"></span>
                            <h4 class="card-title">Detention Tariff</h4>
                            </div>
                            <br\>
                            <div class="text-center">
                                <div class="btn-group buttons mb-1 mt-1"><a href="{{ asset('pdf/Exports Detention Tariff.pdf') }}" class="btn btn-primary btn-loader" style="font-size:11px !important;">Exports Detention Tariff.pdf</a></div>
                                <div class="btn-group buttons mb-1 mt-1"><a href="{{ asset('pdf/Imports Detention Tariff.pdf') }}" class="btn btn-primary btn-loader" style="font-size:11px !important;">Imports Detention Tariff.pdf</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr data-aos="fade-up">
          <img src="img/liner_freight_containers-min.jpg" alt="Image" class="img-fluid rounded mt-5" data-aos="fade-up">
        </div>
      </div>
    </div>
  </div>

@endsection
