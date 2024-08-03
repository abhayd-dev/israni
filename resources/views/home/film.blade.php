@extends('layouts.app')

@section('title', 'Films')

@section('content')
<div class="bg-image2">
    <!-- Background image -->
    <img src="{{ asset('images/image30.png') }}" alt="Background Image" id="background-image" class="active img1">

    <video id="background-video" class="hidden" style="width: 100%; height: 100%; object-fit: cover;">
        <source src="video/video1.mp4" type="video/mp4">
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


    <button id="play-button" class="btn btn-primary d-none">Play Video</button>
</div>

<div class="video-container">
    <div class="video-thumbnail mt-5 mb-5 " data-video-src="video/pulkit.mp4">
        <img src="images/image31.png" alt="Rohan & Sonakshi">
        <div class="video-overlay">
            <div class="play-button"></div>
        </div>
        <div class="video-title">Rohan & Sonakshi</div>
        <div class="video-location">Bangalore, India</div>
    </div>

    <div class="video-thumbnail mt-5 mb-5" data-video-src="video/rakul.mp4">
        <img src="images/image32.png" alt="Nupur & Ayush">
        <div class="video-overlay">
            <div class="play-button"></div>
        </div>
        <div class="video-title">Nupur & Ayush</div>
        <div class="video-location">The unreal love story...</div>
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





