<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="portfolio,homepage,james,anthony,rosales" name="keywords">

    <title>@yield('title', 'Documentation')</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('asset/css/narrative.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.0/css/icofont.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.css" rel="stylesheet">

    @stack('styles')
</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex justify-content-center"> 
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="{{ route('index')}}">HomePage</a></li>
                    <li><a href="#">Narrative & Documentation</a></li>
                </ul>
            </nav>
        </div>
        <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="footer">
        <div class="container py-4">
            <div class="justify-content-center text-center mb-0">
                Web Development 2024
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class='bx bxs-chevron-up'></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/isotope-layout/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
