@extends('layouts.app')

@section('title', 'FAQ')

@section('css')

@endsection

@section('content')
<div class="bg-image3">
   <img src="{{ asset('storage/' . $common->faq_image) }}" alt="" id="bg-video">
    <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="logo">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler ml-auto bg-transparent" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mt-3">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/films') }}">Films</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container faq-section box5 my-5">
    <div class="faq-header">
        <h2>{{ $common->faq_heading }}</h2>
        <p>{{ $common->faq_description }}</p>
    </div>
    <div class="faq-item">
        <h5>What is your approach to shoot a wedding?</h5>
        <p>We aim to capture the true essence of your wedding day by focusing on candid moments, emotions, and the beautiful details that make your event unique. Our approach is both unobtrusive and creative, ensuring that your photos tell the story of your special day.</p>
    </div>
    <div class="faq-item">
        <h5>Where are you guys based? And do you travel?</h5>
        <p>We are based in Mumbai and Bangalore, but we love to travel! Whether your wedding is in a remote destination or a bustling city, we are more than happy to accommodate your location.</p>
    </div>
    <div class="faq-item">
        <h5>What is the crew size of Epic Stories that is going to cover my wedding?</h5>
        <p>The crew size depends on the scale of your wedding. Typically, we have a team of 2-4 professionals, including photographers and videographers, to ensure comprehensive coverage.</p>
    </div>
    <div class="faq-item">
        <h5>My wedding is very off-beat, do you shoot non-conventional weddings?</h5>
        <p>Absolutely! We thrive on creativity and love to capture unique and unconventional weddings. Whether it's a themed wedding, a destination event, or something completely different, we're excited to be a part of it.</p>
    </div>
    <div class="faq-item">
        <h5>What's the deadline for the completion of the project? What are the deliverables from your end?</h5>
        <p>We typically deliver the final edited photos and videos within 4-6 weeks after the wedding. The deliverables include a wedding trailer, a full-length wedding film, a set of edited high-resolution photos, and a beautiful photo album.</p>
    </div>
    <div class="faq-item">
        <h5>Who picks the music for wedding trailer and film?</h5>
        <p>We collaborate with you to choose the music that best represents your style and the feel of your wedding day. Your input is important to us, and we ensure that the music enhances the storytelling of your wedding film.</p>
    </div>
    <div class="faq-item">
        <h5>We're very busy and won't be able to meet. What are our other options?</h5>
        <p>We understand busy schedules. We offer consultations via phone, email, or video calls to discuss your needs and plan your wedding coverage. This allows us to gather all the necessary information without the need for an in-person meeting.</p>
    </div>
    <div class="faq-item">
        <h5>How do I reserve you for my date?</h5>
        <p>To reserve us for your wedding date, please contact us to check availability. Once confirmed, we require a signed contract and a deposit to secure your booking. The remaining balance is due closer to the wedding date.</p>
    </div>
</div>

<div class="container-fluid hero-section">
    <div class="row no-gutters justify-content-center align-items-center">
      <div class="col-md-12 text-center">
        <div class="hero-image" style="background-image: url('images/image51.jpg');">
          <div class="hero-overlay"></div>
          <div class="hero-content">
            <a href="{{ url('contact') }}" class="btn btn-outline-light">ENQUIRE</a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

@section('script')
<script>
     $(document).ready(function() {
            $('.faq-item h5').click(function() {
                $(this).parent().toggleClass('open');
            });
        });

</script>
@endsection

