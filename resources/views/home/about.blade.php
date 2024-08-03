@extends('layouts.app')

@section('title', 'About Us')

@section('content')
{{-- @php
    $about = App\Models\About::first();
@endphp --}}

<div class="bg-image4">
    <img src="{{ asset('images/image47.jpg')}}" alt="" id="bg-img2">
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
        <h1 class="text-white mb-3 mt-4" style="font-family: 'Salsa', cursive;">About Us</h1>
        <h3 class="text-white" style="font-family: 'Salsa', cursive;">Our background and journey</h3>
    </div>
    </div>
    
    <div class="container py-5" style="text-shadow:2px 2px 7px rgba(28, 16, 16, 0.6)">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3 class="display-4" style="font-family: 'Salsa', cursive; color: #333;text-shadow:2px 2px 4px rgba(28, 16, 16, 0.6)">
                    CAPTURE THE MOMENTS<br> THAT MATTER<br> WITH ISRANI PHOTOGRAPHY
                </h3>
            </div>
            <div class="col-md-6">
                <p style="font-family: 'Salsa', cursive; color: #333;">
                    Israni Photography & Films is renowned for its unique approach to capturing the essence of special moments. Our experienced team specializes in wedding photography, corporate events, and more. We use the latest techniques and equipment to ensure that every shot is perfect and every moment is captured beautifully.
    
                    <br><br>We believe in storytelling through our lens, making every photo and video a memorable piece of art. Our commitment to quality and client satisfaction is unwavering, and we strive to provide a personalized experience that caters to your specific needs and preferences.
    
                    <br><br>At Israni Photography & Films, we don't just take photos; we create memories that you will cherish for a lifetime. Let us be a part of your special moments and help you relive them over and over again.
                </p>
            </div>
        </div>
    </div>
    
    <div class="container mt-5 mb-5" style="text-shadow:2px 2px 7px rgba(28, 16, 16, 0.6)">
       <div class="row">
          <div class="col-md-6">
             <p style="font-family: 'Salsa', cursive;">
                Israni Photography & Films is dedicated to capturing the magic of moments that are special and unforgettable. Our team of talented photographers and filmmakers is committed to providing high-quality services that meet the unique needs of our clients. With years of experience in the industry, we specialize in wedding photography, corporate events, and more.
             </p>
             <p style="font-family: 'Salsa', cursive;">
                We believe in building lasting relationships with our clients by delivering exceptional work that exceeds expectations. Our commitment to quality and customer satisfaction is reflected in every project we undertake. At Israni Photography & Films, we capture not just pictures but memories that you will cherish forever.Our commitment to quality and customer satisfaction is reflected in every project we undertake. At Israni Photography & Films, we don't just take photos; we create memories that you will cherish for a lifetime.
             </p>
          </div>
          <div class="col-md-6">
             <img src="images/image49.jpg" alt="About Us Image" class="img-fluid image3">
          </div>
       </div>
    </div>
    </div>
    
    <div class="container py-5" style="text-shadow:2px 2px 7px rgba(79, 75, 75, 0.6)">
        <h3 class="text-center mb-4" style="font-family: 'Salsa', cursive; color: #333;">OUR AIM</h3>
        <div class="row">
            <!-- Vision Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100" style="box-shadow: 0 8px 8px 4px rgba(147, 24, 24, 0.7);">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="fas fa-camera-retro fa-3x"></i>
                        </div>
                        <h5 class="card-title text-center" style="font-family: 'Salsa', cursive;">VISION</h5>
                        <p class="card-text text-center">
                            Our vision is to capture the most precious moments of life, providing clients with timeless memories that they can cherish forever. We aim to be the leading photography service provider, known for our creativity, innovation, and excellence.
                            Our vision is to capture the most precious moments of life, providing clients with timeless memories that they can cherish forever. We aim to be the leading photography service provider, known for our creativity, innovation, and excellence.
                        </p>
                    </div>
                </div>
            </div>
    
            <!-- Mission Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100" style="box-shadow: 0 8px 8px 4px rgba(147, 24, 24, 0.7);">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="fas fa-bullseye fa-3x"></i>
                        </div>
                        <h5 class="card-title text-center" style="font-family: 'Salsa', cursive;">MISSION</h5>
                        <p class="card-text text-center">
                            Our mission is to provide high-quality photography services, capturing every emotion and detail with precision and artistry. We are dedicated to delivering exceptional customer service and ensuring that each client's vision is realized.
                            Our mission is to provide high-quality photography services, capturing every emotion and detail with precision and artistry. We are dedicated to delivering exceptional customer service and ensuring that each client's vision is realized.
                        </p>
                    </div>
                </div>
            </div>
            
    
            <!-- Values Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100" style="box-shadow:0 8px 8px 4px rgba(147, 24, 24, 0.7);">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="fas fa-gem fa-3x"></i>
                        </div>
                        <h5 class="card-title text-center" style="font-family: 'Salsa', cursive;">VALUES</h5>
                        <p class="card-text text-center">
                            Our core values include creativity, professionalism, integrity, and client satisfaction. We strive to create a positive and memorable experience for every client, continuously improving our skills and services to exceed expectations.
                            Our core values include creativity, professionalism, integrity, and client satisfaction. We strive to create a positive and memorable experience for every client, continuously improving our skills and services to exceed expectations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-5" style="font-family: 'Salsa', cursive;text-shadow:2px 2px 7px rgba(79, 75, 75, 0.4)">
        <h1 class="text-center mb-4" style="font-family: 'Salsa', cursive; color: #333;">TESTIMONIALS</h1>
        <div id="testimonial-slider" class="splide" role="group" aria-label="Testimonials">
            <div class="splide__track">
                <ul class="splide__list mx-5">
                    <!-- Testimonial 1 -->
                    <li class="splide__slide ">
                        <div class="card h-100" style="background-color: #333; color: #3e0303;border-redius:10px;box-shadow: 4px 8px 8px 4px rgba(147, 24, 24, 0.7);">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                </div>
                                <p class="card-text">
                                    "Israni Photography captured the most beautiful moments of our wedding. Their attention to detail and creative approach exceeded our expectations. We couldn't be happier with the results!"
                                </p>
                                <h5 class="card-title text-center mt-4" style="font-family: 'Salsa', cursive;">- John & Jane Doe</h5>
                            </div>
                        </div>
                    </li>
                    <!-- Testimonial 2 -->
                    <li class="splide__slide">
                        <div class="card h-100" style="background-color: #333; color: #3e0303;box-shadow: 4px 8px 8px 4px rgba(147, 24, 24, 0.7);">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                </div>
                                <p class="card-text">
                                    "The team at Israni Photography made our family photoshoot an amazing experience. They were professional, friendly, and captured the essence of our family perfectly. We highly recommend them!"
                                </p>
                                <h5 class="card-title text-center mt-4" style="font-family: 'Salsa', cursive;">- Sarah & Family</h5>
                            </div>
                        </div>
                    </li>
                    <!-- Testimonial 3 -->
                    <li class="splide__slide">
                        <div class="card h-100" style="background-color: #333; color: #3e0303;box-shadow: 4px 8px 8px 4px rgba(147, 24, 24, 0.7);">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                </div>
                                <p class="card-text">
                                    "We had an incredible experience with Israni Photography for our corporate event. Their professionalism and ability to capture key moments were impressive. The photos turned out great and were delivered on time."
                                </p>
                                <h5 class="card-title text-center mt-4" style="font-family: 'Salsa', cursive;">- ABC Corporation</h5>
                            </div>
                        </div>
                    </li>
                    <!-- Add more testimonials as needed -->
                </ul>
            </div>
        </div>
    </div>

<footer class="footer-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5 d-flex flex-column align-items-center">
                <p class="quote mt-5 text-center" style="font-family: 'Salsa', cursive;">“Once in a while, right in the middle<br>of ordinary life, love gives us a fairy tale”</p>
                <div class="mt-5">
                    <p class="get">Get In Touch With Us</p>
                    <hr class="hrtag"/>
                </div>
                <div class="social-icons mt-3">
                    <a href="#"><img src="images/facebook.svg" alt="Facebook"></a>
                    <a href="#"><img src="images/youtube.svg" alt="YouTube"></a>
                    <a href="#"><img src="images/messenger.svg" alt="Instagram"></a>
                </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center align-items-center">
                <img src="images/logo1.png" alt="Israni Photography & Films" class="footer-logo">
            </div>
            <div class="col-md-5 d-flex flex-column align-items-center">
                <div class="contact-info mt-5 text-left">
                    <h5>Address (Mumbai)</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Om Heera Panna Mall, Office No. 205,<br> 2nd Floor, Oshiwara Police Station<br> Oshiwara, Mumbai, Maharashtra 400093</br>
                    <p><i class="fas fa-envelope"></i> enquiry@israniphotography.com</p>
                    <p><i class="fas fa-phone"></i> +91-9821192777</p>

                    <h5>Address (Bangalore)</h5>
                    <p><i class="fas fa-map-marker-alt"></i> No.48, 3rd floor, 9th A Main Rd,<br> Indira Nagar 1st Stage, Bengaluru,<br> Karnataka 560038</p>
                    <p><i class="fas fa-envelope"></i> enquiry@israniphotography.com</p>
                    <p><i class="fas fa-phone"></i> +91-77189 37444</p>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection