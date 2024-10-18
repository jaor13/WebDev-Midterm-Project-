@extends('components.layout')

@section('title', 'Individual Laboratory: Laravel Installation & Creating a Project')

@section('content')
    <section id="narrative" class="narrative">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1 class="mt-5">Indivual Laboratory:</h1>
                <p>Setting-up and Creating a Laravel Project</p>
            </div>
            <div class="row">

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">In this individual laboratory, the task is to install laravel along with its dependencies and create a simple laravel project with atleast 3 views.</p>
                </div>
                

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">After successfully installing Herd, I moved on to creating a new Laravel project using the laravel new command in the command line. The process was smooth, and once the basic framework was set up, I began focusing on building the core structure of my portfolio website. I envisioned it as a place to present my personal and professional background, so I started by creating the views.</p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/view-lb1.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>One of the first views I worked on was a dedicated page for my education and experience, providing details on my academic background and previous roles. I then added sections for my projects and skills, where I could showcase the various technical abilities I’ve honed, along with a detailed "About" page that offers insight into my personal journey. Each view was carefully structured to ensure easy navigation and a clean user experience.</p>
                </div>


                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/env-set.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/routes-first.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>To store and manage data, I decided to use an SQLite database. I updated the configuration in the .env file, setting up the database connection and ensuring everything was in sync. Afterward, I defined the routes in web.php to map each view to its corresponding URL, allowing for seamless access to each section of the portfolio. This setup gave the site structure and helped me establish the foundation for future enhancements.</p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br><b>Rendered Page:</b></p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb30-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb31-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb32-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb33-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>In this project, I learned how to set up a Laravel application using Herd and create views for a portfolio website. I structured different pages such as Education & Experience, Projects & Skills, and About, while also configuring the routes in web.php. This experience helped me understand how to effectively build and organize a web application using Laravel's system.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
