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
    .address p {
      font-family: inherit !important;
    }
    .panel-body b{
      font-weight: 600;
    }
  </style>
@endsection

@section("content")

<div class="site-section bg-white">
    <div class="container">
      <div class="row mt-5">
                <div class="accordionS">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne" data-aos="fade" data-aos-delay="100">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><span class="accordionSpan"><img src="{{ asset('img/arrowWhiteRight.png') }}"></span>
                            LCL Consolidation
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body bg-light" style="padding: 1em 0.5em;">
                          <div class="row text-center panel-body-btn justify-content-between align-items-center">
                            <div class='col-lg-6'>
                              <div>
                                <div>
                                  We provide <b>Import LCL Consolidation</b> service from major trade routes. Our LCL Import Consolidation service provides weekly and sometimes twice weekly sailings from Singapore, Shanghai, Hamburg, Tianjin , Shenzhen, Hong Kong, Taiwan, Korea etc.
                                </div>
                                <div class="btn-group buttons mb-1 mt-3"><a href="/userrequest/1"><button type="button" id="req1" class="btn btn-primary userRequest">Ask for Rates</button></a></div>
                                <div class="btn-group buttons mb-1 mt-3"><a href="/userrequest/2"><button type="button" class="btn btn-primary">Ask for Schedule</button></a></div>
                              </div>

                              <div class="mt-3">
                                <div>
                                  We provide <b>Export LCL Consolidation</b> service from India to Singapore, Hong
                                  Kong, Malaysia, UAE and major European destinations.
                                </div>
                                <div class="btn-group buttons mb-1 mt-3"><a href="/userrequest/3"><button type="button" class="btn btn-primary">Ask for Rates</button></a></div>
                                <div class="btn-group buttons mb-1 mt-3"><a href="/userrequest/4"><button type="button" class="btn btn-primary">Ask for Schedule</button></a></div>
                              </div>
                            </div>
                            <div class='col-lg-6'>
                              <div class="mb-1 mt-3">
                                <img src="{{ asset('img/lclconsol.png') }}" class="img-thumbnail" width="90%">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo" data-aos="fade" data-aos-delay="200">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" ><span class="accordionSpan"><img src="{{ asset('img/arrowWhiteRight.png') }}"></span>
                            Freight Forwarding
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body bg-light" style="padding: 1em 0.5em;">
                          <div class="row text-center panel-body-btn justify-content-between align-items-center">
                            <div class='col-lg-6'>
                              Managing international logistics can be very complex. At AVANT, our team of
                              specialist can help you to ensure that your supply chain runs seamlessly. Our
                              international network and partnerships with carriers ensures that all logistics
                              needs can be met under one roof.
                              <div class="row text-center panel-body-btn">
                                <div class='col-lg-12'>
                                  <div class="btn-group buttons mb-1 mt-1"><a href="/userrequest/5"><button type="button" class="btn btn-primary">Ask for Rates</button></a></div>
                                </div>
                              </div>
                            </div>
                            <div class='col-lg-6'>
                              <div class="mb-1 mt-3">
                                <img src="{{ asset('img/fcl.png') }}" class="img-thumbnail" width="90%">
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree" data-aos="fade" data-aos-delay="400">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span class="accordionSpan"><img src="{{ asset('img/arrowWhiteRight.png') }}"></span>
                            Transportation
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body bg-light" style="padding: 1em 0.5em;">
                          <div class="row text-center panel-body-btn justify-content-between align-items-center">
                            <div class='col-lg-6'>
                              We maintain a policy of “no cargo too small, no cargo too big”. At Avant you
                              can access our pan India transportation services with ease. We not only
                              provide transportation for internationals good but provide domestic
                              intra state connectivity too.
                            </div>
                            <div class='col-lg-6'>
                              <div class="mb-1 mt-3">
                                <img src="{{asset('img/transport.png')}}" class="img-thumbnail" width="90%">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour" data-aos="fade" data-aos-delay="300">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span class="accordionSpan"><img src="{{ asset('img/arrowWhiteRight.png') }}"></span>
                            Hazardous Cargo
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body bg-light" style="padding: 1em 0.5em;">
                          <div class="row text-center panel-body-btn justify-content-between align-items-center">
                            <div class='col-lg-6'>
                              Safety First, is not only a policy but our motto too. Handling hazardous cargoes
                              has its own challenges and limitations. With our in-depth knowledge, we
                              overcome these challenges by also making safety our top most priority. Under
                              HAZ LCL program we ensure that only compatible classes are stored together.
                              <div class="row text-center panel-body-btn">
                                <div class='col-lg-12'>
                                  <div class="btn-group buttons mb-1 mt-1"><a href="/userrequest/6"><button type="button" class="btn btn-primary">Contact Haz Specialist</button></a></div>
                                  <div class="btn-group buttons mb-1 mt-1"><a href="#"><button type="button" class="btn btn-primary">Check Haz Charts</button></a></div>
                                </div>
                              </div>
                            </div>

                            <div class='col-lg-6'>
                              <div class="mb-1 mt-3">
                                <img src="{{ asset('img/haz_oceanfrieght.png')}}" class="img-thumbnail" width="90%">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive" data-aos="fade" data-aos-delay="500">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><span class="accordionSpan"><img src="{{ asset('img/arrowWhiteRight.png') }}"></span>
                            Warehousing
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body bg-light" style="padding: 1em 0.5em;">
                          <div class="row text-center panel-body-btn justify-content-between align-items-center">
                            <div class='col-lg-6'>
                              As an international logistics service provider, it is imperative that we provide
                              customers with Safe and Secure storage space. Our partnerships with carefully
                              vetted private warehouse and customs bonded warehouses provide peace of
                              mind to our customers.
                              <div class="row text-center panel-body-btn">
                                <div class='col-lg-12'>
                                  <div class="btn-group buttons mb-1 mt-1"><a href="/userrequest/7"><button type="button" class="btn btn-primary">Ask for Storage Tariffs</button></a></div>
                                </div>
                              </div>
                            </div>
                            <div class='col-lg-6'>
                              <div class="mb-1 mt-3">
                                <img src="{{asset('img/warehouse.jpg')}}" class="img-thumbnail" width="90%">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>

@endsection
