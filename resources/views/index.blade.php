<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="portfolio,homepage,james,anthony,rosales" name="keywords">

    <title>HomePage</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.0/css/icofont.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.css" rel="stylesheet">

</head>

  <body>

      <header id="header" class="fixed-top">
          <div class="container-fluid d-flex justify-content-center"> 
              <nav class="nav-menu d-none d-lg-block">
                  <ul>
                      <li><a href="#enforcement">Laravel Enforcements</a></li>
                      <li><a href="#portfolio">Laboratory Exercises</a></li>
                      <li><a href="#about">About this Page</a></li>
                  </ul>
              </nav>
          </div>
      </header>

      <section id="upper" class="d-flex align-items-center">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                      <h1>Midterm Project in IT Elective 1: Web Development</h1>
                      <h2>A comprehensive compilation of laboratory exercises using Laravel</h2>
                      <p class="font-primary">James Anthony O. Rosales | BSIT 3-C</p>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 upper-img">
                      <img src="{{ asset('asset/images/top-image.svg') }}" class="img-fluid animated" alt="">
                  </div>
              </div>
          </div>
      </section>

      <main id="main">
        
          <section id="enforcement" class="enforcement section-bg">
              <div class="container">

                  <div class="section-title" data-aos="fade-up">
                      <h2>Laravel Enforcements</h2>
                      <p>List of Laravel Enforcements that was discussed and applied in the exercises</p>
                  </div>

                  <div class="row">
                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon-box">
                              <div class="icon"><i class='bx bx-cog'></i></div>
                              <h4 class="title">Herd Configuration and Setup</a></h4>
                              <p class="description">A step-by-step guide to configuring and setting up Herd for streamlined PHP development in Laravel.</p>
                          </div>
                      </div>

                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                          <div class="icon-box">
                              <div class="icon"><i class='bx bx-sitemap'></i></div>
                              <h4 class="title">Routing</a></h4>
                              <p class="description">Manage and define the flow of HTTP requests in Laravel application, connecting URLs to specific actions.</p>
                          </div>
                      </div>

                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                          <div class="icon-box">
                              <div class="icon"><i class='bx bx-file'></i></div>
                              <h4 class="title">Layout Files</a></h4>
                              <p class="description">Define the overall structure and design of Laravel views, ensuring consistency across application.</p>
                          </div>
                      </div>

                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                          <div class="icon-box">
                              <div class="icon"><i class='bx bx-filter-alt'></i></div>
                              <h4 class="title">Middleware</a></h4>
                              <p class="description">Handle request filtering, authentication, and other pre-processing tasks Laravel application, enhancing security and performance.</p>
                          </div>
                      </div>

                  </div>

              </div>
          </section>

          <section id="portfolio" class="portfolio">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>Laboratory Exercises</h2>
                <p>Check out some of the laboratory exercises and its documentation/narrative</p>
              </div>

              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item">
                  <div class="portfolio-wrap">
                    <img src="{{ asset('asset/images/lb2.svg') }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="{{ route('narrative1') }}" title="View Documentation"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                  <div class="portfolio-wrap">
                    <img src="{{ asset('asset/images/lb3.svg') }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="{{ route('narrative2') }}" title="View Documentation"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                  <div class="portfolio-wrap">
                    <img src="{{ asset('asset/images/lb4.svg') }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="{{ route('narrative3') }}" title="View Documentation"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                  <div class="portfolio-wrap">
                    <img src="{{ asset('asset/images/lb1.svg') }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="#" title="View Documentation"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section>


          <section id="about" class="about">
            <div class="container">

              <div class="row justify-content-between">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                  <img src="{{ asset('asset/images/btm-img.gif') }}" class="img-fluid" alt="" data-aos="zoom-in">
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0">
                  <h3 data-aos="fade-up">About this page</h3>
                  <p data-aos="fade-up" data-aos-delay="100">
                    This page was created as a midterm project requirement, compiling all laboratory exercises along with documentation for each.
                  </p>

                  <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Apply Laravel Techniques in Practice</h4>
                      <p>Incorporate various Laravel techniques in building the page, showcasing practical applications of the framework.</p>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <i class="bx bx-receipt"></i>
                      <h4>Reinforce Lessons Through Documentation</h4>
                      <p>Reinforce the lessons discussed by providing a narrative for each exercise.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </section>

      </main>

      <footer id="footer">
        <div class="container py-4">
          <div class="justify-content-center text-center mb-0">
            Web Development 2024</a>
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


  </body>

</html>