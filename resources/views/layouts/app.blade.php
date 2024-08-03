<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <!-- Bootstrap 4.5.2 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Waterfall&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
</head>
<body>
  
        @yield('content')
    
        <!-- jQuery (necessary for Masonry and Bootstrap) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap 4.5.2 JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- Popper.js for Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <!-- Masonry JS -->
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <!-- Slick Carousel JS -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- Splide JS -->
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
    
        <script>
         
            $(document).ready(function () {
                var splide = new Splide('.splide', {
                    type   : 'loop',
                    perPage: 3,
                    focus  : 'center',
                    gap    : '0.05rem',
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
    
            $(document).ready(function(){
                $('.slick-slider').slick({
                    infinite: true,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: false,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
    
                $('.slick-slider2').slick({
                    infinite: true,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: false,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
    
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('.navbar').addClass('scrolled');
                    } else {
                        $('.navbar').removeClass('scrolled');
                    }
                });
            });
    
            // Pause all videos when a modal is closed
            $('.modal').on('hidden.bs.modal', function () {
                var videos = $(this).find('video');
                videos.each(function () {
                    this.pause();
                });
            });
    
            document.addEventListener('DOMContentLoaded', function () {
                var playButton = document.getElementById('play-button');
                var video = document.getElementById('background-video');
                var image = document.getElementById('background-image');
    
                playButton.addEventListener('click', function () {
                    image.classList.add('hidden');
                    video.classList.remove('hidden');
                    video.play();
                });
    
                // Handle other video thumbnails if necessary
                document.querySelectorAll('.video-thumbnail').forEach(function(thumbnail) {
                    thumbnail.addEventListener('click', function() {
                        var videoSrc = thumbnail.getAttribute('data-video-src');
                        video.src = videoSrc;
                        image.classList.add('hidden');
                        video.classList.remove('hidden');
                        video.play();
                    });
                });
            });
    
            $(document).ready(function(){
        $('.grid').imagesLoaded(function(){
            $('.grid').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });
        });
    });
    
    $(document).ready(function() {
            $('.faq-item h5').click(function() {
                $(this).parent().toggleClass('open');
            });
        });
    
        // JavaScript for modal functionality
    var slideIndex = 1;
    
    function openModal() {
        document.getElementById('myCustomModal').style.display = "block";
        showSlides(slideIndex);
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
    
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < thumbnails.length; i++) {
            thumbnails[i].className = thumbnails[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        thumbnails[slideIndex-1].className += " active";
        captionText.innerHTML = thumbnails[slideIndex-1].alt;
    }
    
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#testimonial-slider', {
            type       : 'loop',
            perPage    : 3,
            perMove    : 1,
            autoplay   : true,
            interval   : 5000, 
            pagination : false,
            breakpoints: {
                992: { perPage: 2 },
                768: { perPage: 1 },
            }
        }).mount();
    });
    
        document.addEventListener('DOMContentLoaded', function() {
            fetch('{{ asset('countries.json') }}')
                .then(response => response.json())
                .then(data => {
                    const select = document.getElementById('country');
                    data.forEach(country => {
                        const option = document.createElement('option');
                        option.value = country.name;
                        option.textContent = country.name;
                        select.appendChild(option);
                    });
    
                    // Re-select the old value if any
                    if ("{{ old('country') }}") {
                        select.value = "{{ old('country') }}";
                    }
                })
                .catch(error => console.error('Error loading countries:', error));
        });
    
    
        </script>
    
    </body>
</html>
