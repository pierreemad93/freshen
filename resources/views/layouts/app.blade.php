<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="auto">

<head>

    <!-- Include JavaScript for color modes -->
    <script src="{{ asset('app') }}/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Update the 'content' attribute to reflect the actual content description -->
    <meta name="description" content="your_description_goes_here">

    <!-- Modify the 'content' attribute to include appropriate keywords -->
    <meta name="keywords" content="your_keywords_goes_here">

    <meta name="author" content="tigmatemplate">
    <meta name="generator" content="Bootstrap">

    <!-- Change the text within the <title> tag to match the webpage's content -->
    <title> your_title_goes_here </title>

    <!--
        Set the website's favicon and Apple touch icon using the files in the assets/logo folder. You can change these files to your own icons by replacing them with the same names and sizes.

        Be careful if you change the site.webmanifest file, as you need to update the src attribute of the icons array to match the new path of your icon files. Otherwise, your icons may not display correctly on some devices.
    -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app') }}/assets/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('app') }}/assets/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('app') }}/assets/logo/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="{{ asset('app') }}/assets/logo/favicon.ico">
    <link rel="manifest" href="{{ asset('app') }}/assets/logo/site.webmanifest">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('app') }}/assets/libraries/glide/css/glide.core.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/assets/libraries/aos/aos.css">
    <link rel="stylesheet" href="{{ asset('app') }}/assets/css/main.min.css">
    <link rel="stylesheet" href="{{ asset('app') }}/assets/css/style.css">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta property="og:title" content="your_title_goes_here">
    <meta property="og:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta property="og:image" content="your_absolute_image_url_goes_here">
    <!-- Update with the absolute URL of the content like: https://example.com/index.html -->
    <meta property="og:url" content="your_absolute_content_url_goes_here">
    <!-- Update with the type of object you’re sharing. (e.g., article, website, etc.) -->
    <meta property="og:type" content="website">
    <!-- Defines the content language -->
    <meta property="og:locale" content="en_US">


    <!-- X/Twitter Card Meta Tags for Social Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- Update with your X/Twitter handle -->
    <meta name="twitter:site" content="@yourtwitterhandle">
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta name="twitter:title" content="your_title_goes_here">
    <meta name="twitter:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta name="twitter:image" content="your_absolute_image_url_goes_here">

    <!--
        The following line specifies the canonical URL for this page.
        Replace your_canonical_url_goes_here with the actual canonical URL if needed like: https://example.com/index.html
        Or just remove it!!!!
    -->
    <link rel="canonical" href="your_canonical_url_goes_here">

</head>

<body>


    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>



    <!-- header top -->
    <header
        class="navigation position-absolute w-100 bg-body-tertiary shadow border-bottom border-light border-opacity-10 rounded-bottom-3 rounded-bottom-sm-4">
        <x-end-user.globals.navbar />
    </header>

    {{ $content }}


    <footer class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
        <div class="container">
            <div class="row gy-5">
                <div class="col-12 col-xl-6">
                    <div class="pb-3 max-w-lg position-relative">
                        <form method="post" target="_blank" novalidate class="mc-embedded-subscribe-form">

                            <h2 class="text-body-emphasis leading-6 text-4xl tracking-tight fw-bold">
                                Subscribe to our newsletter.
                            </h2>
                            <p class="m-0 mt-3 text-body-secondary text-lg leading-8">
                                Experience the ease of code deployment with just a click. Simplify your development
                                tasks, and increase productivity.
                            </p>

                            <div class="mt-4 mb-2 d-flex flex-column flex-sm-row w-100 gap-2 js-form-inputs">
                                <label for="emailSubscribe1" class="visually-hidden">Email address</label>
                                <input type="email" name="EMAIL" id="emailSubscribe1" value=""
                                    class="form-control leading-6 text-sm max-w-xl" placeholder="Enter your email">
                                <button type="submit" name="subscribe"
                                    class="btn btn-primary text-white fw-semibold text-sm">Subscribe</button>
                            </div>

                            <!-- This div is related to Mailchimp integration and handled by a function in our scripts.js file, so no need to worry about it. -->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" class="js-validate-robot"
                                    name="b_a4752870f583bb49a02427b3c_143fa46c21" tabindex="-1" value="">
                            </div>

                            <!-- response -->
                            <div class="js-subscribe-response"></div>

                        </form>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="row row-cols-1 row-cols-sm-2 gx-3 gy-5">
                        <div class="d-flex flex-column align-items-start">
                            <div class="p-2 bg-body-tertiary rounded-3 border">
                                <svg class="text-body-emphasis" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                            </div>
                            <div class="m-0 mt-3 text-body-emphasis fw-semibold">
                                Weekly articles
                            </div>
                            <div class="m-0 mt-2 text-body-secondary leading-7">
                                Accelerate your deployment process effortlessly. Seamlessly manage your code deployment.
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-start">
                            <div class="p-2 bg-body-tertiary rounded-3 border">
                                <svg class="text-body-emphasis" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                                </svg>
                            </div>
                            <div class="m-0 mt-3 text-body-emphasis fw-semibold">
                                No spam
                            </div>
                            <div class="m-0 mt-2 text-body-secondary leading-7">
                                Accelerate your deployment process effortlessly. Seamlessly manage your code deployment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <hr class="my-6 text-body-emphasis opacity-10">

            <div class="d-flex flex-column flex-xl-row gap-5 justify-content-between align-items-xl-center">
                <div class="order-first order-xl-last">
                    <ul class="nav row gy-4 gx-sm-4 row-cols-2 row-cols-sm-auto">
                        <li class="nav-item">
                            <a href="{{ asset('app') }}/about.html"
                                class="p-0 text-body-secondary nav-link leading-6 text-sm"> About </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('app') }}/services.html"
                                class="p-0 text-body-secondary nav-link leading-6 text-sm"> Services </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('app') }}/blog.html"
                                class="p-0 text-body-secondary nav-link leading-6 text-sm"> Blog </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('app') }}/contact.html"
                                class="p-0 text-body-secondary nav-link leading-6 text-sm"> Contact us </a>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <a href="{{ asset('app') }}/index.html"
                        class="link-body-emphasis d-flex align-items-center text-decoration-none">
                        <img src="{{ asset('app') }}/assets/logo/logo.png" height="24" alt="logo"
                            loading="lazy">
                    </a>
                </div>

                <div class="order-last order-xl-first">
                    <p class="mb-0 text-body-secondary leading-6 text-sm">
                        ©
                        <span class="current-year"></span>
                        Company, Inc Distributed by <a href="https://themewagon.com">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Back to top button -->
    <button type="button"
        class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-caret-up-fill" viewBox="0 0 16 16">
            <path
                d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
        </svg>
    </button>



    <!-- Bootstrap JavaScript: Bundle with Popper -->
    <script src="{{ asset('app') }}/assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('app') }}/assets/libraries/glide/glide.min.js"></script>
    <script src="{{ asset('app') }}/assets/libraries/aos/aos.js"></script>
    <script src="{{ asset('app') }}/assets/js/scripts.js"></script>
    <script src="{{ asset('app') }}/assets/php/contact/script.js"></script>



</body>

</html>
