@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-image">
    <video autoplay muted loop id="bg-video">
        <source src="{{ asset('video/sidhartha.mp4') }}" type="video/mp4">
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
<div class="container-fluid box1 text-center ">
    
        
   
    <h1 class="display-4">WE BELIEVE IN CAPTURING MOMENTS!</h1>
    <div class=" lead">
        <p class="para"><i>Israni Photography is a team of young Creative photographers & cinematographers
       specializing in creating stories for a lifetime. As a brand, they believe in understanding the needs,
      desires, and requirements of a family to create tailor-made, handcrafted wedding films.</i></p>
    </div>
 
    <div class="lead">
        <p class="para"><i>The Israni Siblings believe in making every wedding look no less than a Bollywood film, along 
       with a striking balance  between creativity & technology, to make each  product a masterpiece.</i></p>
    </div>

    <div class="lead">
    
        <p class="para"><i>We have been creating memories for over a decade. Our Mission is to weave stories
        that make you relive the memories for years to come.</i></p>
    </div>  
</div>
<div class="box2">
    <h2 class="text-center">FEATURED STORIES</h2>
    <div class="container-fluid">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="cardm mb-5">
                            <div class="card-image">
                                <img src="{{ asset('images/image2.png') }}" alt="Karishma & Varun">
                            </div>
                            <div class="card-body">
                                <h3>Karishma & Varun</h3>
                                <p class="subtitle">Romance in the city...</p>
                                <p class="description">We felt it from our hearts when Karishma described Varun as the last piece of jigsaw puzzle that made her life complete. In three days, we were fortunate to capture...</p>
                                <a href="{{ route('viewmore') }}" class="btn ">View More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardm mb-5">
                            <div class="card-image">
                                <img src="{{ asset('images/image3.png') }}" alt="Nandini & Sahil">
                            </div>
                            <div class="card-body">
                                <h3>Nandini & Sahil</h3>
                                <p class="subtitle">A fairy tale story...</p>
                                <p class="description">We felt it from our hearts when Karishma described Varun as the last piece of jigsaw puzzle that made her life complete. In three days, we were fortunate to capture...</p>
                                <a href="{{ route('viewmore') }}" class="btn ">View More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardm mb-5">
                            <div class="card-image">
                                <img src="{{ asset('images/image4.png') }}" alt="Salman & Joya">
                            </div>
                            <div class="card-body">
                                <h3>Salman & Joya</h3>
                                <p class="subtitle">Romance in the city...</p>
                                <p class="description">We felt it from our hearts when Karishma described Varun as the last piece of jigsaw puzzle that made her life complete. In three days, we were fortunate to capture...</p>
                                <a href="{{ route('viewmore') }}" class="btn ">View More</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid text-center box2">
    <h1 class="heading1">WEDDING FILMS</h1>
    <p class="leading">Your Story We Saved it</p>

    <div class="container-fluid box2">
        <div class="row justify-content-center">
            <div class="col-md-5 mb-4">
                <div class="cardl">
                    <img src="{{ asset('images/image5.png') }}" class="card-img-top" alt="Revika & Chirag, Wedding">
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="cardl">
                    <img src="{{ asset('images/image6.png') }}" class="card-img-top" alt="Rahul & Disha, Wedding">
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="cardl">
                    <img src="{{ asset('images/image7.png') }}" class="card-img-top" alt="Mukta & Jaikaran, Wedding">
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="cardl">
                    <img src="{{ asset('images/image9.png') }}" class="card-img-top" alt="Aalika & Pranav, Wedding">
                </div>
            </div>
        </div>
    </div>

    <div class="gallery">
        <h2>Follow along on <a href="https://instagram.com"><span class="insta">instagram</span></a></h2>
        <div class="container-fluid box2">
            <div class="row justify-content-center slick-slider">
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image10.png') }}" alt="Image 1" class="image-slider">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image11.png') }}" alt="Image 2" class="image-slider">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image12.png') }}" alt="Image 3" class="image-slider">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image10.png') }}" alt="Image 4" class="image-slider">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image14.png') }}" alt="Image 5" class="image-slider">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image12.png') }}" alt="Image 3" class="image-slider">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image10.png') }}" alt="Image 4" class="image-slider">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image14.png') }}" alt="Image 5" class="image-slider">
                </div>
            </div>
            <div class="row justify-content-center slick-slider2">
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image16.png') }}" alt="Image 1" class="image-slider2">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image17.png') }}" alt="Image 2" class="image-slider2">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image18.png') }}" alt="Image 3" class="image-slider2">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image19.png') }}" alt="Image 4" class="image-slider2">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image20.png') }}" alt="Image 5" class="image-slider2">
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <img src="{{ asset('images/image21.png') }}" alt="Image 3" class="image-slider2">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid box4">
    <div class="row">
      <div class="col-md-7 pb-5">
        <div class="col-sm-11 text-center mt-5">
        <h2 class="text-dark heading2">Plan your <span style="color:#FF6682;">wedding</span> with us</h2>
        </div>
        <form id="wedding-form" action="{{ route('submit.wedding') }}" method="POST">
            @csrf
            <div class="form-group col-sm-9 mx-auto mt-4">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder=" " required>
            </div>
            <div class="row">
                <div class="form-group col-sm-9 d-flex mx-auto mt-4">
                    <div class="col-sm-6">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder=" " required>
                    </div>
                    <div class="col-sm-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-9 mx-auto">
                <label for="needs">Describe What are your needs!</label>
                <textarea class="form-control" name="needs" id="needs" rows="4" placeholder="" required></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn-submit">Submit</button>
            </div>
        </form>
        
      </div>
      <div class="col-md-5 image-section">
        <img src="images/image15.png" alt="Wedding Image">
      </div>
    </div>
  </div>
 

  <section class="sponsors-section text-center">
        <div class="container">
            <h2 class="heading2">Our <span class="highlight">Sponsors</span></h2>
            <div class="row justify-content-center">
                <div class="col-md-3 col-6">
                    <img src="images/image22.png" alt="Hindustan Times" class="img-fluid">
                </div>
                <div class="col-md-3 col-6">
                    <img src="images/image23.png" alt="Bollywood Shaadis" class="img-fluid">
                </div>
                <div class="col-md-3 col-6">
                    <img src="images/image24.png" alt="WedMeGood" class="img-fluid">
                </div>
                <div class="col-md-3 col-6">
                    <img src="images/image25.png" alt="Khush Wedding" class="img-fluid">
                </div>
                <div class="col-md-3 col-6">
                    <img src="images/image26.png" alt="Filmfare" class="img-fluid">
                </div>
                <div class="col-md-3 col-6">
                    <img src="images/image27.png" alt="Vogue" class="img-fluid">
                </div>
                <div class="col-md-3 col-6">
                    <img src="images/image28.png" alt="The Times of India" class="img-fluid">
                </div>
            </div>
        </div>
    </section>




@endsection

