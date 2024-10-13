@extends('components.layout')

@section('title', 'Group Laboratory 3: Middleware')

@section('content')
    <section id="narrative" class="narrative">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="mt-5">Group Laboratory 3:</h2>
                <p>Applying Middleware on a Laravel Project</p>
            </div>
            <div class="row">

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">In Group Laboratory 3, the task is all about middleware. In the first part, we created 2 middleware named CheckAge and LogRequests. The Checkage middleware shall check if user’s page is greater than or equal to 18. If it didn’t meet the requirements, a ‘Access Denied’ page shall be rendered. In creating the middleware, we created it in the commandline using the php artisan make:middleware command. Once making a middleware in the commandline, the middleware is now in the app/http/middleware directory
                    </p>
                </div>
                
                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/midlleware.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb15-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>We created a middleware called CheckAge to restrict access based on the user's age. The middleware retrieves the user's age from the session and checks if it meets the minimum age requirement ($minAge). If the age is either not set or below the required minimum, the user is redirected to an "Access Denied" page. Otherwise, the request proceeds to its intended destination. This middleware is an efficient way to control access based on user-specific conditions, ensuring that only eligible users can view certain pages.
                    <br><br>The code above was the latter part of the laboratory, as in the first part it doesn’t require parameters but in the 3rd part it then requires a parameter
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb16-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>For this middleware, what we did was implement the LogRequests class to capture the details of incoming requests. In the handle method, we allowed the request to pass through to the next middleware or controller without making any changes. Once the controller processed the request and the response was sent back to the user, we moved on to the terminate method.
                    <br><br>This middleware is terminable because the terminate method runs after the response is sent. This is why we used it to log important request details—such as the HTTP method, URL, and timestamp—without slowing down the response time for the user. This way, we efficiently captured logs for tracking while keeping the user experience smooth.
                     </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb17-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 align-items-stretch custom-font" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">
                        <br>We registered two key middlewares: CheckAge and LogRequests.
                    </p>
                    <ul>
                        <li class="text-justify">
                            <strong>LogRequests Middleware:</strong> We registered this middleware globally using <code>$middleware->append(LogRequests::class);</code>. This means that it will automatically run on every request to the application. Its purpose is to log important details about each request (such as the HTTP method and URL) after the response has been sent. This is helpful for auditing and debugging purposes.
                        </li>
                        <li class="text-justify">
                            <strong>CheckAge Middleware:</strong> Instead of applying CheckAge globally, we gave it an alias (<code>'check_age' => CheckAge::class</code>) so we can selectively apply it to routes that need age verification. This allows more control over where the age-check logic is applied, ensuring it only runs where necessary.
                        </li>
                    </ul>
                    <p class="text-justify">
                        By registering these middlewares, we ensured that logging happens universally while allowing the CheckAge middleware to be applied conditionally as needed on specific routes.
                    </p>
                    <p class="text-justify">
                        This middleware is terminable because the terminate method runs after the response is sent. This is why we used it to log important request details—such as the HTTP method, URL, and timestamp—without slowing down the response time for the user. This way, we efficiently captured logs for tracking while keeping the user experience smooth.
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb18-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>When user visit our site, they can access the index and several pages but if they also have the choice to access restricted content which requires to check their age before accessing it. The route above will return a view that checks the age of the username 
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb19-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>On the other hand, the route above will be called and returns a ‘Access Denied’ view whenever age does not meet the condition of the middleware.
                   </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb20-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 align-items-stretch custom-font" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">
                        <br>In this part of the lab, we handled the submission of an age verification form through <code>Route::post('/verify-age')</code>.
                    </p>
                    <ul>
                        <li class="text-justify">
                            <strong>Validation:</strong> The input age is first validated to ensure it's a required field, an integer, and not negative (<code>'age' => 'required|integer|min:0'</code>). This ensures the data is valid before proceeding.
                        </li>
                        <li class="text-justify">
                            <strong>Retrieving Age and Destination:</strong> We grab the age and destination inputs from the request. The destination allows us to determine where to redirect the user after verification.
                        </li>
                        <li class="text-justify">
                            <strong>Storing Age in Session:</strong> We store the user's age in the session using <code>session(['age' => $age]);</code>. This allows us to persist the age across requests and use it in the CheckAge middleware later to ensure the user meets the age requirement.
                        </li>
                        <li class="text-justify">
                            <strong>Redirect Logic:</strong> If the age is 18 or older, the user is redirected based on the selected destination (e.g., dashboard, source code, or code tutorials). If the age is less than 18, or if no valid destination is provided, the user is redirected to the access-denied route.
                        </li>
                    </ul>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb21-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>In this section of the lab, we applied age restrictions to different routes using the CheckAge middleware. The dashboard route (/dashboard) is protected by the check_age:18 middleware, which ensures that only users who are 18 years or older can access it. If the user doesn’t meet this requirement, they are redirected to the "Access Denied" page.
                        <br><br>Similarly, the source code route (/source-code) also uses the check_age:18 middleware, meaning only users 18 years or older can view the source code.
                        <br><br>For the code tutorials route (/code-tutorials), we applied a stricter age restriction using the check_age:21 middleware, which allows access only to users aged 21 or older. The middleware ensures that users who do not meet the minimum age requirement are appropriately redirected, enforcing the age-based access control for each route.
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify">
                        <br><b>Rendered Page:</b>
                    </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb23-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb24-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb25-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb26-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb27-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb28-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb29-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('asset/images/lb22-rd.png') }}" class="img-fluid animated img-format" alt="">
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>
                    The LogRequests middleware captures key interactions within the application, providing a timestamped record of HTTP requests made by users. This log includes entries for accessing pages such as "access-denied," "home," "age-verification," and various content sections, reflecting user navigation and age verification submissions. These logs serve as an essential tool for monitoring user activity and troubleshooting potential access issues
                </p>
                </div>

                <div class="col-md-12 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <p class="text-justify"><br>
                    In this lab, we effectively implemented middleware to enforce age-based access restrictions across various routes within our application. By utilizing the CheckAge middleware, we were able to control user access to specific pages, ensuring that only users who met the designated age requirements could view sensitive content. The middleware not only streamlined our code but also enhanced security by providing a centralized mechanism for validating user age before granting access.
                    <br><br>Additionally, we explored the LogRequests middleware, which demonstrated the use of terminable middleware to log request details after the response has been sent. This feature is particularly beneficial for monitoring and auditing purposes, allowing us to track user interactions with the application.
                    <br><br>Overall, the lab reinforced our understanding of how middleware functions in Laravel, enabling us to implement customized logic for handling incoming requests and responses, while also maintaining a clean and organized code structure. This experience has provided us with valuable skills in middleware application, which are crucial for developing robust and secure web applications.
                </p>
                </div>

            </div>
        </div>
    </section>
@endsection
