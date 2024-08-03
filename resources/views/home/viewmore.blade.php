@extends('layouts.app')

@section('title', 'ViewMore')

@section('content')
<div class="bg-image">
    <video controls autoplay muted loop id="bg-video">
        <source src="{{ asset('video/pulkit.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
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

<section class="custom-section text-center">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 para2">
                <p>
                    We felt it from our hearts when Karishma described Varun as the last piece of jigsaw puzzle that made her life complete. In three days, we were fortunate to capture how adorably Varun & Karishma were looking at each other. But what we couldn't capture, were the brimming emotions inside the heart of these two. The feeling of finally living the dream, the anticipation of how life would unfold, and the excitement of finally solving the jigsaw puzzle. What also couldn't be captured were living some of the most unforgettable days with this duo. All the chaos in getting the shoot done, the unfolding craziness, all the drama which now gets itched in our hearts... We are sure whenever we are going to look back to these days, our heart will be filled with lots of joys and memories which will remain special in our heart.
                </p>
                <p class="font-weight-bold mt-4">WEDDING MAKERS :</p>
                <p class="text-muted mb-4">Photos & Film by | Style by Anaita Shroff Adajania</p>
                <p class="text-muted">
                    OUTFIT: falgunishanepeacockindia (wedding), Gopi Vaid (Mehendi) Jewellery: Tyaani jewellery | Decor: Aash Studio Mumbai<br>
                    Venue: Taj Lands End Mumbai (wedding), Estella Mumbai (Mehendi)
                </p>
            </div>
        </div>
    </div>
</section>
<div class="container box5 my-5">
    <div class="grid row">
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image32.png') }}" alt="Gallery Image 1" class="img-fluid custom-hover-shadow" onclick="openModal(1)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image33.jpg') }}" alt="Gallery Image 2" class="img-fluid custom-hover-shadow" onclick="openModal(2)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image34.jpg') }}" alt="Gallery Image 3" class="img-fluid custom-hover-shadow" onclick="openModal(3)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image35.jpg') }}" alt="Gallery Image 4" class="img-fluid custom-hover-shadow" onclick="openModal(4)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image36.jpg') }}" alt="Gallery Image 5" class="img-fluid custom-hover-shadow" onclick="openModal(5)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image37.jpg') }}" alt="Gallery Image 6" class="img-fluid custom-hover-shadow" onclick="openModal(6)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image38.jpg') }}" alt="Gallery Image 7" class="img-fluid custom-hover-shadow" onclick="openModal(7)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image39.jpg') }}" alt="Gallery Image 8" class="img-fluid custom-hover-shadow" onclick="openModal(8)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image40.jpg') }}" alt="Gallery Image 9" class="img-fluid custom-hover-shadow" onclick="openModal(9)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image41.jpg') }}" alt="Gallery Image 10" class="img-fluid custom-hover-shadow" onclick="openModal(10)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image42.webp') }}" alt="Gallery Image 11" class="img-fluid custom-hover-shadow" onclick="openModal(11)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/images43.jpeg') }}" alt="Gallery Image 12" class="img-fluid custom-hover-shadow" onclick="openModal(12)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image44.jpg') }}" alt="Gallery Image 13" class="img-fluid custom-hover-shadow" onclick="openModal(13)">
        </div>
        <div class="grid-item col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('images/image45.jpg') }}" alt="Gallery Image 14" class="img-fluid custom-hover-shadow" onclick="openModal(14)">
        </div>
    </div>

    <!-- The Modal/Lightbox -->
    <div id="myCustomModal" class="custom-modal">
        <span class="custom-close cursor" onclick="closeModal()">&times;</span>
        <div class="custom-modal-content">
            <div class="mySlides">
                <div class="custom-numbertext">1 / 14</div>
                <img src="{{ asset('images/image32.png') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">2 / 14</div>
                <img src="{{ asset('images/image33.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">3 / 14</div>
                <img src="{{ asset('images/image34.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">4 / 14</div>
                <img src="{{ asset('images/image35.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">5 / 14</div>
                <img src="{{ asset('images/image36.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">6 / 14</div>
                <img src="{{ asset('images/image37.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">7 / 14</div>
                <img src="{{ asset('images/image38.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">8 / 14</div>
                <img src="{{ asset('images/image39.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">9 / 14</div>
                <img src="{{ asset('images/image40.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">10 / 14</div>
                <img src="{{ asset('images/image41.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">11 / 14</div>
                <img src="{{ asset('images/image42.webp') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">12 / 14</div>
                <img src="{{ asset('images/images43.jpeg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">13 / 14</div>
                <img src="{{ asset('images/image44.jpg') }}" class="custom-modal-img">
            </div>
            <div class="mySlides">
                <div class="custom-numbertext">14 / 14</div>
                <img src="{{ asset('images/image45.jpg') }}" class="custom-modal-img">
            </div>
            <a class="custom-prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="custom-next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="custom-thumbnail-container mt-5">
            <img class="custom-thumbnail" src="{{ asset('images/image32.png') }}" onclick="currentSlide(1)" alt="Thumbnail 1">
            <img class="custom-thumbnail" src="{{ asset('images/image33.jpg') }}" onclick="currentSlide(2)" alt="Thumbnail 2">
            <img class="custom-thumbnail" src="{{ asset('images/image34.jpg') }}" onclick="currentSlide(3)" alt="Thumbnail 3">
            <img class="custom-thumbnail" src="{{ asset('images/image35.jpg') }}" onclick="currentSlide(4)" alt="Thumbnail 4">
            <img class="custom-thumbnail" src="{{ asset('images/image36.jpg') }}" onclick="currentSlide(5)" alt="Thumbnail 5">
            <img class="custom-thumbnail" src="{{ asset('images/image37.jpg') }}" onclick="currentSlide(6)" alt="Thumbnail 6">
            <img class="custom-thumbnail" src="{{ asset('images/image38.jpg') }}" onclick="currentSlide(7)" alt="Thumbnail 7">
            <img class="custom-thumbnail" src="{{ asset('images/image39.jpg') }}" onclick="currentSlide(8)" alt="Thumbnail 8">
            <img class="custom-thumbnail" src="{{ asset('images/image40.jpg') }}" onclick="currentSlide(9)" alt="Thumbnail 9">
            <img class="custom-thumbnail" src="{{ asset('images/image41.jpg') }}" onclick="currentSlide(10)" alt="Thumbnail 10">
            <img class="custom-thumbnail" src="{{ asset('images/image42.webp') }}" onclick="currentSlide(11)" alt="Thumbnail 11">
            <img class="custom-thumbnail" src="{{ asset('images/images43.jpeg') }}" onclick="currentSlide(12)" alt="Thumbnail 12">
            <img class="custom-thumbnail" src="{{ asset('images/image44.jpg') }}" onclick="currentSlide(13)" alt="Thumbnail 13">
            <img class="custom-thumbnail" src="{{ asset('images/image45.jpg') }}" onclick="currentSlide(14)" alt="Thumbnail 14">
        </div>
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





