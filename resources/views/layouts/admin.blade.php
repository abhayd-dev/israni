<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('../admin/css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    @yield('css')


    <style>
        body {
            font-family: 'Salsa', cursive;
            overflow-x: hidden;
        }

        .sidebar .nav-item {
            position: relative;
        }

        .sidebar .nav-link {
            color: #f2f2f6;
        }

        .sidebar .nav-link.active {
            margin-top: 10px;
            border-radius: 30px;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .sidebar .nav-link .expand-icon {
            margin-left: auto;
            transition: transform 0.3s ease;
        }

        .sidebar .nav-link.collapsed .expand-icon {
            transform: rotate(90deg);
        }

        .sidebar .sub-menu {
            display: none;
            padding-left: 20px;
        }

        .sidebar .sub-menu .nav-link {
            color: #f7fbfb;
        }

        .sidebar .nav-item.show .sub-menu {
            display: block;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">ISRANI ADMIN PANEL</a>
        <h6 class="text-white ml-5">
            <i class="fa fa-user"></i> ADMIN
        </h6>
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <h6 class="text-white ml-3"><i class="fa fa-tachometer-alt"></i> DASHBOARD</h6>
        </a>
        <div class="">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <h6 class="text-white ml-3"><i class="fa fa-sign-out-alt"></i> LOGOUT</h6>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <button class="navbar-toggler" type="button" id="sidebarToggle">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <nav class="sidebar">
        <span class="close-btn" id="sidebarClose">&times;</span>
        <div class="sidebar-sticky">
            <h3 class="mx-3 my-3">ISRANI PHOTOGRAPHY</h3>
            <hr />
            <ul class="nav flex-column mx-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('common.create') }}" id="homeMenu">
                        <i class="fa fa-database"></i>
                        Commons Data
                    </a>
                </li>
                <li class="nav-item">
                    <a href={{ route('featured.create') }} class="nav-link" id="FeaturedStory">
                        <i class="fa fa-book"></i>
                        Featured Story

                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('admin.aims.create') }}  id="aboutMenu">
                        <i class="fa fa-bullseye"></i>
                        Our Aims
                       
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a href="{{ route('testimonials.show') }}" class="nav-link" id="Testimonials">
                        <i class="fa fa-question-circle"></i>
                        Testimonials
                        
                    </a>
                  
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Faq">
                        <i class="fa fa-envelope"></i>
                        Faq
                       
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contactMenu">
                        <i class="fa fa-envelope"></i>
                        Contact
                       
                    </a>
                    
                </li>
                
            </ul>
        </div>
    </nav>
    <main role="main" class="content">
        <div class="container p-3">
            @yield('content')
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




    @yield('script')


    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show');
            document.querySelector('.content').classList.toggle('collapsed');
        });

        document.getElementById('sidebarClose').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.remove('show');
            document.querySelector('.content').classList.remove('collapsed');
        });

        document.querySelectorAll('.sidebar .nav-link:not(#dashboardMenu)').forEach(function(menuLink) {
            menuLink.addEventListener('click', function() {
                const parentItem = this.parentElement;
                parentItem.classList.toggle('show');
                parentItem.querySelector('.expand-icon').classList.toggle('collapsed');
            });
        });
    </script>
</body>

</html>
