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
  </style>  
@endsection

@section("content")

<div class="site-section bg-white">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-7 mb-5" data-aos="fade">
          
          @if(Session::has('success'))
            <div class="alert alert-success">
              {{ Session::get('success') }}
            </div>
          @endif

        <form method="POST" class="p-5 bg-light" action="{{ route('contact.post') }}">
            <div class="row form-group">
            <span class="font-weight-bold">Contact  Us</span>
            </div>
            @csrf
            
            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control input @error('fname') is-invalid @enderror" value="{{ old('fname') }}">
                @error('fname')
                  <p class="help invalid-feedback">{{ $errors->first('fname') }}</p>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control input @error('lname') is-invalid @enderror" value="{{ old('lname') }}">
                @error('lname')
                  <p class="help invalid-feedback">{{ $errors->first('lname') }}</p>
                @enderror
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-6">
                <label class="text-black" for="email">Email</label> 
                <input type="email" id="email" name="email" class="form-control input @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                  <p class="help invalid-feedback">{{ $errors->first('email') }}</p>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="text-black" for="mobile">Mobile</label> 
                <input type="text" id="mobile" name="mobile" class="form-control input @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}">
                @error('mobile')
                  <p class="help invalid-feedback">{{ $errors->first('mobile') }}</p>
                @enderror
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label> 
                <input type="subject" id="subject" name="subject" class="form-control input @error('subject') is-invalid @enderror" value="{{ old('subject') }}">
                @error('subject')
                  <p class="help invalid-feedback">{{ $errors->first('subject') }}</p>
                @enderror
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control input @error('message') is-invalid @enderror" placeholder="Write your notes or questions here...">{{ old('message') }}</textarea>
                @error('message')
                  <p class="help invalid-feedback">{{ $errors->first('message') }}</p>
                @enderror
              </div>
            </div>
            

            <div class="row form-group">
              <div class="col-md-12">
                {{-- <input type="submit" id="submitForm" value="Send Message" class="btn btn-primary py-2 px-4 text-white"> --}}
                <button type="submit" id="submitForm" class="btn btn-primary py-2 px-4 text-white">Send Message</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5" data-aos="fade">
          
          <div class="p-4 mb-3 bg-light address">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Avant Freight Systems Pvt. Ltd.</p>
            <!--<p class="mb-4">A-37, C-39-A, S Central Rd, TTC Industrial Area, MIDC Industrial Area, Pawne, Navi Mumbai, Maharashtra 400705</p>-->

            <p class="mb-0 font-weight-bold">Head Office (H.O.)</p>
            <p class="mb-4">S.No. 2, Rameshwarm building, CS Link Raod, Near NL Complex, Anand Nagar, Dahisar East, Mumbai, Maharashtra 400 068</p>
            
            <p class="mb-0 font-weight-bold">Landline</p>
            <p class="mb-4"><a href="#">+91 022 497 34 178</a></p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+91 9819501000</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">hemant@avantfreight.in</a></p>

          </div>

        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
<script>
$(document).ready(function() {
  $("#submitForm").click(function() {    
    $(this).html(
      `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...`
    );
    $(this).submit();
  });
});
</script>
@endsection