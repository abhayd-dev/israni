
@extends('layouts.app')

@section('title', 'Films')

@section('css')

<style>
    .video-thumbnail {
    position: relative;
    width: 300px; 
    height: 350px; 
    overflow: hidden;
    margin: 20px;
}

.thumbnail-content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.thumbnail-content img {
    width: 100%;
    height: auto;
}

.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: url('images/play-icon.png') no-repeat center center;
    width: 60px;
    height: 60px;
    cursor: pointer;
}

.youtube-video {
    width: 100%;
    height: 100%;
    display: block;
}

</style>
@endsection

@section('content')
<div class="bg-image">
    <!-- Background image -->
   
    <video autoplay muted loop id="bg-video">
        <source src="{{ asset($common->film_main_video) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Logo and navigation bar -->
    <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="logo">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler ml-auto bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mt-3">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item active">
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

<<div class="video-thumbnail mt-5 mb-5" data-video-id="SxTYjptEzZs">
    <div class="thumbnail-content">
        <img src="images/image31.png" alt="Video Thumbnail">
        <div class="play-button"></div>
        <div class="video-title">Video Title 1</div>
        <div class="video-location">Location 1</div>
    </div>
    <iframe class="youtube-video" src="https://www.youtube.com/embed/SxTYjptEzZs?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="display: none;"></iframe>
</div>

<div class="video-thumbnail mt-5 mb-5" data-video-id="SxTYjptEzZs">
    <div class="thumbnail-content">
        <img src="images/image32.png" alt="Video Thumbnail">
        <div class="play-button"></div>
        <div class="video-title">Video Title 2</div>
        <div class="video-location">Location 2</div>
    </div>
    <iframe class="youtube-video" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="display: none;"></iframe>
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
<script src="https://www.youtube.com/iframe_api"></script>
<script>
         document.querySelectorAll('.video-thumbnail').forEach(thumbnail => {
            const playButton = thumbnail.querySelector('.play-button');
            const iframe = thumbnail.querySelector('.youtube-video');
            const videoId = thumbnail.getAttribute('data-video-id');
console.log(videoId);
            playButton.addEventListener('click', function() {
                console.log(`Playing video with ID: ${videoId}`); // Debug log
                iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                iframe.style.display = `block`; // Show the iframe
                thumbnail.querySelector('.thumbnail-content').style.display =
                'none'; // Hide the thumbnail content
            });
        });

</script>
@endsection


