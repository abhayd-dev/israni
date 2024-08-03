@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<div class="bg-image3">
    <img src="images/image44.jpg" alt="" id="bg-video">
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

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center form-title">Let us get to know each other better :)</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="firstName" value="{{ old('first_name') }}">
                    @if($errors->has('first_name'))
                        <div class="text-danger">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="lastName" value="{{ old('last_name') }}">
                    @if($errors->has('last_name'))
                        <div class="text-danger">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <div class="row">
                        <div class="col">
                            <select class="form-control" name="country" id="country">
                                <option>India</option>
                                <!-- Add more countries as needed -->
                            </select>
                            @if($errors->has('country'))
                                <div class="text-danger">{{ $errors->first('country') }}</div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                            @if($errors->has('phone'))
                                <div class="text-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dates">Dates</label>
                    <input type="date" class="form-control" name="dates" id="dates" value="{{ old('dates') }}">
                    @if($errors->has('dates'))
                        <div class="text-danger">{{ $errors->first('dates') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="venue">Venue / Location</label>
                    <input type="text" class="form-control" name="venue" id="venue" value="{{ old('venue') }}">
                    @if($errors->has('venue'))
                        <div class="text-danger">{{ $errors->first('venue') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="guestCount">Guest Count</label>
                    <input type="number" class="form-control" name="guest_count" id="guestCount" value="{{ old('guest_count') }}">
                    @if($errors->has('guest_count'))
                        <div class="text-danger">{{ $errors->first('guest_count') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>What services are you looking for?</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="services[]" value="photography" id="photography" {{ in_array('photography', old('services', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="photography">
                            Photography
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="services[]" value="film" id="film" {{ in_array('film', old('services', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="film">
                            Film
                        </label>
                    </div>
                    @if($errors->has('services'))
                        <div class="text-danger">{{ $errors->first('services') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="story">Tell us your story and short description of the dream wedding.</label>
                    <textarea class="form-control" name="story" id="story" rows="3">{{ old('story') }}</textarea>
                    @if($errors->has('story'))
                        <div class="text-danger">{{ $errors->first('story') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-submit btn-block">Let's do this! :)</button>
            </form>
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
                    <p><i class="fas fa-map-marker-alt"></i> Om Heera Panna Mall, Office No. 205,<br> 2nd Floor, Oshiwara Police Station<br> Oshiwara, Mumbai, Maharashtra 400093</p>
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
