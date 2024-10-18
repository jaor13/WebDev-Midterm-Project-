@extends('components.layout')

@section('title', 'Group Laboratory 1: Routing Concepts')

@section('content')
    <section id="narrative" class="narrative">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1 class="mt-5">Group Laboratory 1:</h1>
                <p>Applying Routing Concepts on a Laravel Project</p>
            </div>
            <div class="row">

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">In Group Laboratory 1, the tasks are divided into two main parts: defining basic routes and working with route parameters.<br><br>
                    <b>Part 1: Defining Basic Routes</b><br><br>
                        The first step involved setting up a simple route for the homepage. My task was to create a route that would return a view displaying a welcome message. This was straightforward, as it required defining the route and linking it to the corresponding view. After that, I needed to create additional routes: one for an "About Us" page, which also returns a specific view, and another that would handle a redirection from /home to the homepage (/). Finally, I had to build a route that displays a "Contact Us" form, allowing users to fill out their details and send messages. These tasks helped reinforce my understanding of basic routing in Laravel.<br><br>
                    <b>Part 2: Using Route Parameters</b><br><br>
                        The second part of the lab focused on using route parameters. I started by creating a route that accepts a required username parameter. This route needed to display a personalized welcome message based on the username entered in the URL. For example, if someone visited /user/johndoe, they would see "Welcome, johndoe!" in the view. Afterward, I modified the route to make the username optional. If no username was provided (e.g., just /user), the route would return a generic message like "Welcome, Guest!" instead.
                       <br><br>To ensure better validation, I applied regular expression constraints on the username parameter, making sure it only accepts alphabetic characters (a-z, A-Z). This step was essential in preventing the use of invalid characters like numbers or symbols in the username, adding a layer of input validation to the route.
                    </p>
                </div>
                
                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/views.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>In this laravel project, my groupmates and I decided to utilize my fist individual laboratory as a basis for this group lab. As seen in the photo above, it has 5 views.<br><br></p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/route1.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>Continuing, I defined a route for the homepage using <code>Route::get('/').</code> This route returns the view index, which serves as the main homepage content. Additionally, I assigned a name to the route using <code>->name('homepage')</code>, allowing me to reference this route elsewhere in the application more easily (I used this named routes in nav reference links in the navbar). This setup simplifies future modifications, as I can use the route name instead of the URL path directly.</p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/route2.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>I also set up a redirect route using <code>Route::redirect('/home', destination: '/')</code> to handle the redirection from /home to the homepage (/). Since the homepage route is named homepage, this ensures that any visits to /home are automatically redirected to the main index page.</p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/route3.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 align-items-stretch custom-font" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"></p>I also grouped several routes using <code>Route::group(['prefix' => 'pages'])</code>, which organizes them under a common URL prefix, "pages." This structure includes the following named routes:
                        <br><br>
                        <ul>
                            <li>/pages/about returns the "about" view (->name('about')).</li>
                            <li>/pages/contact-us returns the "contact-us" view (->name('contact-us')).</li>
                            <li>/pages/education-experience returns the "education-experience" view (->name('education-experience')).</li>
                            <li>/pages/project-skills returns the "project-skills" view (->name('project-skills')).</li>
                        </ul>
                        <br>This makes managing these related pages more structured and efficient.
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/route4.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>Moreover, I defined a route with regular constraints using <code>Route::get('/user/{username?}')</code> that includes an optional username parameter. Within this route, I implemented a check using a regular expression to ensure the username contains only alphabetic characters. If the username is invalid, it defaults to "Guest." The route then passes the validated $username variable to the index view, allowing for a personalized greeting based on the provided username or a generic welcome for guests.
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <b>Rendered Page:</b><br><br>
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb1-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>Since in the route with regular constraints, the username parameter is optional, I also added a default value of "Guest", thus the modal will return a default greeting for guests.</p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb2-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>Route group is observed in these rendered views, they all have the same prefix which is '/pages'</p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb3-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb4-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb5-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>
                
                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb6-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>Parameter passed (url- /user) ‘JamesAnthony’ which contains only alphabetic characters (a-z,case-insensitive) thus modal displays the inputted username</p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb7-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                
                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>Parameter passed (url- /user) ‘James13’ which contains numeric characters thus modal displays the default value of username which is 'Guest'
                    <br><br>In conclusion, Group Laboratory 1 provided a comprehensive introduction to essential routing concepts in Laravel. By creating named routes, I enhanced the clarity and maintainability of the application, allowing for easy reference throughout the codebase. Implementing route groups streamlined the organization of related routes under a common prefix, making the structure more logical and manageable.
                    <br><br>The exercise also reinforced my understanding of required and optional parameters. By validating input with regular expression constraints, I ensured that user data met specific criteria, enhancing the application's robustness. Additionally, the redirect feature allowed for seamless navigation, directing users from /home to the homepage, thereby improving user experience. Overall, this lab exercise equipped me with practical skills in routing that are fundamental to building efficient web applications.</p>
                </div>

            </div>
        </div>
    </section>
@endsection
