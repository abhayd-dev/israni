<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('css')

</head>

<body>

    @yield('content')

    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-5 d-flex flex-column align-items-center">
                    <p class="quote mt-5 text-center">“Once in a while, right in the middle<br>of ordinary life, love
                        gives us a fairy tale”</p>
                    <div class="mt-5">
                        <p class="get">Get In Touch With Us</p>
                        <hr class="hrtag" />
                    </div>
                    <div class="social-icons mt-3">
                        <a href="#"><img src="{{ asset('images/facebook.svg') }}" alt="Facebook"></a>
                        <a href="#"><img src="{{ asset('images/youtube.svg') }}" alt="YouTube"></a>
                        <a href="#"><img src="{{ asset('images/messenger.svg') }}" alt="Instagram"></a>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/logo1.png') }}" alt="Israni Photography & Films" class="footer-logo">
                </div>
                <div class="col-md-5 d-flex flex-column align-items-center">
                    <div class="contact-info mt-5 text-left">
                        <h5>{{ $common->footer_address1_title }}</h5>
                        <p><i class="fas fa-map-marker-alt"></i> {!! $common->full_address1 !!}</p>
                        <p><i class="fas fa-envelope"></i> {{ $common->email1 }}</p>
                        <p><i class="fas fa-phone"></i> {{ $common->phone2 }}</p>

                        <h5>{{ $common->footer_address2_title }}</h5>
                        <p><i class="fas fa-map-marker-alt"></i>{!! $common->full_address2 !!}</p>
                        <p><i class="fas fa-envelope"></i> {{ $common->email2 }} </p>
                        <p><i class="fas fa-phone"></i> {{ $common->phone2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Masonry and Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4.5.2 JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Popper.js for Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
   





    @yield('script')

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('.navbar').addClass('scrolled');
                } else {
                    $('.navbar').removeClass('scrolled');
                }
            });
        });
        $(document).ready(function() {
            $('#wedding-form').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        // Assuming a successful response from the server
                        toastr.success(
                            'Your message has been sent successfully! We will contact you soon.'
                        );
                        $('#wedding-form')[0].reset(); // Reset the form fields
                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>

</body>

</html>
