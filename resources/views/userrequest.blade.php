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
        <div class="col-md-10 mb-5" data-aos="fade">
          
          @if(Session::has('success'))
            <div class="alert alert-success">
              {{ Session::get('success') }}
            </div>
          @endif

          <form action="/userrequest" method="POST" class="p-5 bg-light">
            <div class="row form-group">
            <span class="font-weight-bold" style="font-size: 20px;">Service Request</span>
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
            
            {{-- <div class="row form-group">
              
            </div> --}}

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label> 
                <input type="hidden" id="subject" name="subject" value="{{ $subject }}">
                <input type="text" id="subjectshow" name="subjectshow" class="form-control input @error('subject') is-invalid @enderror" value="{{ $subject }}" disabled>
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
            
            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
              <div class="col-md-12">
              <label class="text-black" for="Captcha">Captcha</label>
                {!! app('captcha')->display() !!}
                @if ($errors->has('g-recaptcha-response'))
                        <strong style="color: #f23a2e;">Please verify that you’re a human</strong>
                @endif
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
      </div>
    </div>
  </div>

@endsection

@section('script')
{!! NoCaptcha::renderJs() !!}
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