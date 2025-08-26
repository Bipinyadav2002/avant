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

<div class="site-section bg-image" style="background-image: url('{{ asset('img/aboutus.jpg') }}');">
    <div class="container">
      <div class="row mt-5 mb-5">
        
        <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
          <!-- <img src="img/img_1.jpg" alt="Image" class="img-fluid rounded"> -->
        </div>
        <div class="col-md-6 order-md-1" data-aos="fade">
          <div class="text-left pb-1 mb-4">
            <h2 class="text-primary">about us</h2>
          </div>
          <p>We are a neutral NVOCC offering International Logistics services by integrating varied service
              segments. We are Head Quartered in Mumbai, the financial capital of India.</p>

          <p>Avant specializes in LCL and FCL Ocean Freight. With a team that has decades of cumulative
              experience, we have been able to meet our customers’ expectations and more.</p>

          <p>At Avant, we continuously upgrade our Information Technology and ensure skill development
            through our HR practices. This ensures that the customer always gets the best of the services.</p>

          <p class="mb-5">We believe that the customer at all points of service should experience “SEA” while doing business
            with us. Safety of their cargo, Excellence in service and Affordability of logistics costs thus become
            our core values.</p>

          <div class="row">
            <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
              <div class="unit-4">
                <div class="unit-4-icon mb-3 mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
                <div>
                  <h3>Ground Shipping</h3>
                  <p>With vast knowledge and expertise we provide solutions to move cargo from across the globe to and fro India.</p>
                  <p class="mb-0"><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
              <div class="unit-4">
                <div class="unit-4-icon mb-3 mr-4"><span class="text-primary flaticon-travel"></span></div>
                <div>
                  <h3>Air Freight</h3>
                  <p>With an extensive agency network throughout the world, we provide Air Freight solutions tailored to your needs.</p>
                  <p class="mb-0"><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="site-section bg-image overlay">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <h2 class="font-weight-light text-primary" data-aos="fade">how we work</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <div class="how-it-work-item">
            <span class="number">1</span>
            <div class="how-it-work-body">
              <h2>customer supported</h2>
              <p class="mb-5">We keep the Customer at fore front of all our processes. We customize the services to fulfil the minutest of needs of our patrons.</p>
              <ul class="ul-check list-unstyled white">
                <li class="text-white">Quick Responses</li>
                <li class="text-white">Transparency in Costs</li>
                <li class="text-white">Process Guidance</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <div class="how-it-work-item">
            <span class="number">2</span>
            <div class="how-it-work-body">
              <h2>IT edge</h2>
              <p class="mb-5">It is imperative that automation needs to keep evolving to enable faster information delivery. We ensure quick adaptation of customers’ needs into our Information Technology platform.</p>
              <ul class="ul-check list-unstyled white">
                <li class="text-white">Daily Status Reports</li>
                <li class="text-white">E-Commerce</li>
                <li class="text-white">Support Tools</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
          <div class="how-it-work-item">
            <span class="number">3</span>
            <div class="how-it-work-body">
              <h2>ambition</h2>
              <p class="mb-5">What is an organization which does not know where it wants to go? We want to be known as the
                finest logistics service provider in our industry.</p>
              <ul class="ul-check list-unstyled white">
                <li class="text-white">Never Lose a Customer</li>
                <li class="text-white">Maintain Best HR Practices</li>
                <li class="text-white">Re-Imagine Services</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection