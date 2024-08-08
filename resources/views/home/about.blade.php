@extends('layouts.app')

@section('title', 'About Us')

@section('css')
<!-- Splide CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
@endsection

@section('content')
<div class="bg-image4">
    <img src="{{ asset('storage/' . $common->about_main_image) }}" alt="" id="bg-img2">
    <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="logo">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler ml-auto bg-transparent" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mt-3">
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('/films') }}">Films</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="about-heading text-center">
        <h1 class="text-white mb-3 mt-4" style="font-family: 'Salsa', cursive;">{{ $common->about_main_heading }}</h1>
        <h3 class="text-white" style="font-family: 'Salsa', cursive;">{{ $common->about_main_subheading }}</h3>
    </div>
</div>



<div class="container py-5" style="text-shadow:2px 2px 7px rgba(28, 16, 16, 0.6)">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h3 class="display-4" style="font-family: 'Salsa', cursive; color: #333;text-shadow:2px 2px 4px rgba(28, 16, 16, 0.6)">
                {!! $common->about_title !!}
            </h3>
        </div>
        <div class="col-md-6">
            {!! $common->about_description1 !!}
        </div>
    </div>
</div>

<div class="container mt-5 mb-5" style="text-shadow:2px 2px 7px rgba(28, 16, 16, 0.6)">
   <div class="row">
      <div class="col-md-6">
        {!! $common->about_description2 !!}
      </div>
      <div class="col-md-6">
         <img src="{{ asset('storage/' . $common->about_image) }}" alt="About Us Image" class="img-fluid image3">
      </div>
   </div>
</div>


<div class="container py-5" style="text-shadow:2px 2px 7px rgba(79, 75, 75, 0.6)">
    <h3 class="text-center mb-4" style="font-family: 'Salsa', cursive; color: #333;">OUR AIM</h3>
    <div class="row">
        @foreach($aims as $aim)
            <div class="col-md-4 mb-4">
                <div class="card h-100" style="box-shadow: 0 8px 8px 4px rgba(147, 24, 24, 0.7);">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            {{-- <i class="fas fa-camera-retro fa-3x"></i>  --}}
                            <img src="{{ asset('storage/' . $aim->image)}}" height="50" width="50" alt="">
                        </div>
                        <h5 class="card-title text-center" style="font-family: 'Salsa', cursive;">{{ $aim->title }}</h5>
                        <p class="card-text text-center">
                            {{ $aim->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<div class="container-fluid py-5" style="font-family: 'Salsa', cursive;text-shadow:2px 2px 7px rgba(79, 75, 75, 0.4)">
    <h1 class="text-center mb-4" style="font-family: 'Salsa', cursive; color: #333;">TESTIMONIALS</h1>
    <div  class="splide" role="group" aria-label="Testimonials">
        <div class="splide__track">
            <ul class="splide__list mx-5">
                @foreach($testimonials as $testimonial)
                <li class="splide__slide">
                    <div class="card h-100" style="background-color: #333; color: #3e0303;border-radius:10px;box-shadow: 4px 8px 8px 4px rgba(147, 24, 24, 0.7);">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fas fa-quote-left fa-2x"></i>
                            </div>
                            <p class="card-text text-center" style="font-family: 'Arial', sans-serif;">
                               {{ $testimonial->content }}
                            </p>
                            <h5 class="card-title text-center mt-3" style="font-family: 'Salsa', cursive;">- {{ $testimonial->author }}</h5>
                        </div>
                    </div>
                </li>
                @endforeach
              
             
            </ul>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<script>
    $(document).ready(function() {
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            focus: 'center',
            gap: '0.05rem',
            pagination: false,
            breakpoints: {
                768: {
                    perPage: 1,
                },
                1024: {
                    perPage: 2,
                },
            },
        });
        splide.mount();
    });
</script>
@endsection

