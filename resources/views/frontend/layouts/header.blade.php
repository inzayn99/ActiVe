@section('header')
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title}}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="activenews.com">
    <meta name="description" content="Bootstrap based News,">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('frontend/assets/images/favicon.png')}}">

    <!-- Google Font -->
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}">
    <link
        href="{{url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap')}}"
        rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/assets/vendor/tiny-slider/tiny-slider.css')}}">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{url('frontend/assets/css/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XZ4W34ZJ0L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-XZ4W34ZJ0L');
    </script>

</head>

<body>

<!-- Offcanvas START -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column pt-0">
        <div>
            <img class="light-mode-item my-3" src="{{url('frontend/assets/images/logo.png')}}" alt="logo">
            <img class="dark-mode-item my-3" src="{{url('frontend/assets/images/logo-light.png')}}" alt="logo">
            <p>The next-generation news, for you to start sharing your stories today! </p>
            <!-- Nav START -->
            <ul class="nav d-block flex-column my-4">
                <li class="nav-item">
                    <a href="index.html" class="nav-link h5">Home</a>
                <li class="nav-item">
                    <a class="nav-link h5" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h5" href="#">Our Journal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h5" href="#">Contact Us</a>
                </li>
            </ul>
            <!-- Nav END -->
            <div class="bg-primary-soft p-4 mb-4 text-center w-100 rounded">
                <span>The activenews</span>
                <h3>Save on Premium Membership</h3>
                <p>Get the insights report trusted by experts around the globe. Become a Member Today!</p>
                <a href="#" class="btn btn-warning">View pricing plans</a>
            </div>
        </div>
        <div class="mt-auto pb-3">
            <!-- Address -->
            <p class="text-body mb-2 fw-bold">New York, USA (HQ)</p>
            <address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
            <p class="mb-2">Call: <a href="#" class="text-body"><u>469-537-2410</u> (Toll-free)</a></p>
            <a href="#" class="text-body d-block">activenews.com</a>
        </div>
    </div>
</div>
<!-- Offcanvas END -->

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
    <div class="navbar-top d-none d-lg-block small">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center my-2">
                <!-- Top bar left -->
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link ps-0" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">National</a>
                    </li>
                    @if(Auth::guard('web')->user())
                        <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
                    @else

                        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                    @endif
                </ul>
                <!-- Top bar right -->
                <div class="d-flex align-items-center">
                    <!-- Dark mode switch -->
                    <div class="modeswitch" id="darkModeSwitch">
                        <div class="switch"></div>
                    </div>

                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-youtube-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 pe-0 fs-5" href="#"><i class="fab fa-vimeo"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Divider -->
            <div class="border-bottom border-2 border-primary opacity-1"></div>
        </div>
    </div>

    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="#">
                <img class="navbar-brand-item light-mode-item" src="{{url('frontend/assets/images/logo-light.png')}}"
                     alt="logo">
                <img class="navbar-brand-item dark-mode-item" src="{{url('frontend/assets/images/logo.png')}}"
                     alt="logo">

            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Main navbar START -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll mx-auto">

                @foreach($categoryData as $category)
                    @if(count($category->subCategoryData)>0)

                        <!-- Nav item 2 Pages -->
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">{{$category->slug}}</a>
                                <ul class="dropdown-menu" aria-labelledby="pagesMenu">

                                    @foreach($category->subCategoryData as $subCat)
                                        <li><a class="dropdown-item" href="">{{$subCat->sub_cat_name}}</a></li>
                                        @endforeach

                                </ul>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                            <li class="nav-item"><a class="nav-link" href="">{{$category->cat_name}}</a></li>
                            @endif
                            @endforeach


                            </li>
                                                <!-- Nav item 5 Mega menu -->
                                                <li class="nav-item dropdown dropdown-fullwidth">
                                                    <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
                                                    <div class="dropdown-menu" aria-labelledby="megaMenu">
                                                        <div class="container">
                                                            <div class="row g-4 p-3 flex-fill">
                                                                <!-- Card item START -->
                                                                <div class="col-sm-6 col-lg-3">
                                                                    <div class="card bg-transparent">
                                                                        <!-- Card img -->
                                                                        <img class="card-img rounded" src="{{url('frontend/assets/images/blog/16by9/small/01.jpg')}}" alt="Card image">
                                                                        <div class="card-body px-0 pt-3">
                                                                            <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h6>
                                                                            <!-- Card info -->
                                                                            <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                                                <li class="nav-item">
                                                                                    <a href="#" class="text-reset btn-link">Joan Wallace</a>
                                                                                </li>
                                                                                <li class="nav-item">Feb 18, 2021</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Card item END -->
                                                                <!-- Card item START -->
                                                                <div class="col-sm-6 col-lg-3">
                                                                    <div class="card bg-transparent">
                                                                        <!-- Card img -->
                                                                        <img class="card-img rounded" src="{{url('frontend/assets/images/blog/16by9/small/02.jpg')}}" alt="Card image">
                                                                        <div class="card-body px-0 pt-3">
                                                                            <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h6>
                                                                            <!-- Card info -->
                                                                            <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                                                <li class="nav-item">
                                                                                    <a href="#" class="text-reset btn-link">Lori Stevens</a>
                                                                                </li>
                                                                                <li class="nav-item">Jun 03, 2021</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Card item END -->
                                                                <!-- Card item START -->
                                                                <div class="col-sm-6 col-lg-3">
                                                                    <div class="card bg-transparent">
                                                                        <!-- Card img -->
                                                                        <img class="card-img rounded" src="{{url('frontend/assets/images/blog/16by9/small/03.jpg')}}" alt="Card image">
                                                                        <div class="card-body px-0 pt-3">
                                                                            <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h6>
                                                                            <!-- Card info -->
                                                                            <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                                                <li class="nav-item">
                                                                                    <a href="#" class="text-reset btn-link">Judy Nguyen</a>
                                                                                </li>
                                                                                <li class="nav-item">Sep 07, 2021</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Card item END -->
                                                                <!-- Card item START -->
                                                                <div class="col-sm-6 col-lg-3">
                                                                    <div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
                                                                        <h3>ACTIVE NEWS</h3>
                                                                        <p>Find the latest breaking news from Nepal, opinion & analysis on Nepali politics, business, culture & arts, sports..</p>
                                                                        <a href="#" class="btn btn-warning">follow us</a>
                                                                    </div>
                                                                </div>
                                                                <!-- Card item END -->
                                                            </div> <!-- Row END -->
                                                            <!-- Trending tags -->
                                                            <div class="row px-3">
                                                                <div class="col-12">
                                                                    <ul class="list-inline mt-3">
                                                                        <li class="list-inline-item">Trending tags:</li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">National</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Technology</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Advanture</a></li>
                                                                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">valley</a></li>


                </ul>
            </div>
        </div> <!-- Row END -->
        </div>
        </div>
        </li>


        </ul>
        </div>
        <!-- Main navbar END -->

        <!-- Nav right START -->
        <div class="nav flex-nowrap align-items-center">
            <!-- Nav Button -->
            <div class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-light mb-0 mx-2">{{date('D | M | Y')}}</a>
            </div>
            <!-- Nav Search -->
            <div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
                <a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <i class="bi bi-search fs-4"> </i>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
                    <form class="input-group">
                        <input class="form-control border-danger" type="search" placeholder="Search"
                               aria-label="Search">
                        <button class="btn btn-danger m-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <!-- Offcanvas menu toggler -->
            <div class="nav-item">
                <a class="nav-link p-0" data-bs-toggle="offcanvas" href="index.html#offcanvasMenu" role="button"
                   aria-controls="offcanvasMenu">
                    <i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
                </a>
            </div>
        </div>
        <!-- Nav right END -->
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->
@endsection
