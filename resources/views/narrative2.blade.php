@extends('components.layout')

@section('title', 'Group Laboratory 2: Layout Files')

@section('content')
    <section id="narrative" class="narrative">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1 class="mt-5">Group Laboratory 2:</h1>
                <p>Applying Layout File on a Laravel Project</p>
            </div>
            <div class="row">

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">In Group Laboratory 2, the task is to utilize the layout file and extend it to the views. Since my individual lab was used in the first group laboratory, for this lab, Diane's individual Lab 1 is to be used. The task in this lab is quicker since we are only asked to make the existing views use a layout file.</p>
                </div>
                
                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/layout.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>In this Laravel project, we created a components folder within the views directory, where the layout file is stored. The layout file serves as the main template for the entire application, providing a consistent structure across different pages. This file typically includes common elements like the header, footer, and navigation bar, ensuring that these components are reused throughout the application.<br><br>
                       By using the layout file, we can easily manage and update the core design in one place, while each individual view can inject its specific content into the layout using sections or slots. This approach simplifies the development process, as changes to the structure or design can be made globally without needing to modify each view individually. It also improves code organization and helps maintain a clean, efficient, and scalable application.
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/layoutfile.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>We created a layout file within the components folder that serves as the foundation for all pages. The file sets up the HTML structure, including a Bootstrap-based navbar in the header and a footer.<br><br> Additionaly, we used <code>@@yield</code> blade directives for sections like the title, jumbotron, and content, allowing different views to inject their unique content while maintaining a consistent layout across the site. We also added a script to hide the navbar when scrolling down, enhancing the user experience with smooth navigation. This layout file ensures reusability and a clean, organized structure for the entire application. 
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb8-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>
                
                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">
                        <br>The home view extends the layout using <code>@@extends('Components.layout')</code>, inheriting the common structure like the header, footer, and script. The title is dynamically set with <code>@@section('title', 'CNW | Home')</code>. <code>@@section('jumbotron')</code> and <code>@@section('content')</code> inject specific content into the jumbotron and main content areas of the layout. The @@endsection directive marks the end of each content section, ensuring it is correctly placed within the layout.
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb10-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">
                        <br> The about.blade.php view, also, uses <code>@@extends('Components.layout') </code>to inherit the header, footer, and scripts from the layout. The title is set with<code>@@section('title', 'CNW | About')</code> , and the main content about "Crafts N' Wraps" is placed within <code>@@section('content')</code>. The @@endsection closes the section, ensuring the content is properly inserted into the layout's placeholders.
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb9-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">
                        <br>Like other views, shop.blade.php extends the layout using <code>@@extends('Components.layout')</code>, automatically inheriting the header, footer, and scripts. The title is set with <code>@@section('title', 'CNW | Shop')</code>, and the shop content is defined within <code>@@section('content')</code>. This section displays bouquets in a card layout with images, descriptions, prices, and "Buy Now" buttons, replacing the <code>@@yield('content')</code> in the layout. The <code>@@endsection</code> marks the end of this content section.
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb11-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">
                        <br>We used the routes from my groupmate, resulting in a simpler routing structure. The code defines three basic routes: the root route (/) returns the home view, /about returns the about view, and /shop returns the shop view. This straightforward approach streamlines the routing process, making it easier to manage and navigate between the different pages.
                        <br><br><b>Rendered Page:</b><br>
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb12-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb13-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb14-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">
                        <br>In conclusion, this lab provided valuable insights into utilizing Blade directives to create a structured and dynamic Laravel application. By leveraging the <code>@@extends</code>  directive, we ensured that each view inherits a consistent layout, maintaining a unified design across all pages. The use of @@section allowed us to define and inject unique content into specific areas of the layout, such as the title and main content sections, enhancing flexibility and reusability.
                        <br><br>We also explored the simplicity of defining routes, which streamlined our navigation and made it easier to connect different views. The straightforward routing structure, derived from my groupmate's lab, facilitated a more efficient development process. Overall, this exercise highlighted the power of Blade templating in creating maintainable and dynamic web applications while reinforcing essential concepts like route management and content injection.
                    </p>
                </div>



            </div>
        </div>
    </section>
@endsection
