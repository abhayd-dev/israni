@extends('layouts.app')

@section('title', 'ViewMore')

@section('content')
<div class="bg-image">
    <video controls autoplay muted loop id="bg-video">
        <source src="{{ asset($viewmoreItem->video) }}" type="video/mp4">
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
                    {{ $viewmoreItem->description }}
                </p>
                <p class="font-weight-bold mt-4">WEDDING MAKERS :</p>
                <p class="text-muted mb-4">  {{ $viewmoreItem->film_by }} </p>
                <p class="text-muted">
                    {{ $viewmoreItem->outfit }}
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container box5 my-5">
    <div class="grid row">
        @foreach($bulkImages as $index => $image)
            <div class="grid-item col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image {{ $index + 1 }}" class="img-fluid custom-hover-shadow" onclick="openModal({{ $index + 1 }})">
            </div>
        @endforeach
    </div>

    <!-- The Modal/Lightbox -->
    <div id="myCustomModal" class="custom-modal">
        <span class="custom-close cursor" onclick="closeModal()">&times;</span>
        <div class="custom-modal-content">
            @foreach($bulkImages as $index => $image)
                <div class="mySlides">
                    <div class="custom-numbertext">{{ $index + 1 }} / {{ count($bulkImages) }}</div>
                    <img src="{{ asset('storage/' . $image) }}" class="custom-modal-img">
                </div>
            @endforeach
            <a class="custom-prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="custom-next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="custom-thumbnail-container mt-5">
            @foreach($bulkImages as $index => $image)
                <img class="custom-thumbnail" src="{{ asset('storage/' . $image) }}" onclick="currentSlide({{ $index + 1 }})" alt="Thumbnail {{ $index + 1 }}">
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid hero-section">
    <div class="row no-gutters justify-content-center align-items-center">
        <div class="col-md-12 text-center">
            <div class="hero-image" style="background-image: url('{{ asset('images/image51.jpg') }}');">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRIs8RuoDtAenGmHbY6vYjD0D9yfYX6WBXT08Y7AN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
<script>
    $(document).ready(function() {
        $('.grid').imagesLoaded(function() {
            $('.grid').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });
        });
    });

    // JavaScript for modal functionality
    var slideIndex = 1;

    function openModal(index) {
        document.getElementById('myCustomModal').style.display = "block";
        showSlides(slideIndex = index);
    }

    function closeModal() {
        document.getElementById('myCustomModal').style.display = "none";
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var thumbnails = document.getElementsByClassName("custom-thumbnail");
        var captionText = document.getElementById("caption");

        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < thumbnails.length; i++) {
            thumbnails[i].className = thumbnails[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        thumbnails[slideIndex - 1].className += " active";
    }
</script>
@endsection
