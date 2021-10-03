@section('footer')

    <!-- =======================
Footer START -->
    <footer class="bg-dark pt-5">
        <div class="container">
            <!-- About and Newsletter START -->
            <div class="row pt-3 pb-4">
                <div class="col-md-3">
                    <img src="{{url('frontend/assets/images/logo-footer.png')}}" alt="footer logo">
                </div>
                <div class="col-md-5">
                    <p class="text-muted">The next-generation blog, news, and magazine theme for you to start sharing your stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
                </div>
                <div class="col-md-4">
                    <!-- Form -->
                    <form class="row row-cols-lg-auto g-2 align-items-center justify-content-end">
                        <div class="col-12">
                            <input type="email" class="form-control" placeholder="Enter your email address">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary m-0">Subscribe</button>
                        </div>
                        <div class="form-text mt-2">By subscribing you agree to our
                            <a href="index.html#" class="text-decoration-underline text-reset">Privacy Policy</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- About and Newsletter END -->

            <!-- Divider -->
            <hr>

            <!-- Widgets START -->
            <div class="row pt-5">
                <!-- Footer Widget -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <h5 class="mb-4 text-white">Recent post</h5>
                    <!-- Item -->
                    <div class="mb-4 position-relative">
                        <div><a href="index.html#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a></div>
                        <a href="post-single-3.html" class="btn-link text-white fw-normal">Up-coming business bloggers, you need to watch</a>
                        <ul class="nav nav-divider align-items-center small mt-2 text-muted">
                            <li class="nav-item position-relative">
                                <div class="nav-link">by <a href="index.html#" class="stretched-link text-reset btn-link">Dennis</a>
                                </div>
                            </li>
                            <li class="nav-item">Apr 06, 2021</li>
                        </ul>
                    </div>
                    <!-- Item -->
                    <div class="mb-4 position-relative">
                        <div><a href="index.html#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a></div>
                        <a href="post-single-3.html" class="btn-link text-white fw-normal">How did we get here? The history of the business told through tweets</a>
                        <ul class="nav nav-divider align-items-center small mt-2 text-muted">
                            <li class="nav-item position-relative">
                                <div class="nav-link">by <a href="index.html#" class="stretched-link text-reset btn-link">Larry</a>
                                </div>
                            </li>
                            <li class="nav-item">May 29, 2021</li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <h5 class="mb-4 text-white">Navigation</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link pt-0" href="index.html#">Features</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Style Guide</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Get Theme</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Support</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Privacy Policy</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Newsletter</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link pt-0" href="index.html#">News</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Career <span class="badge bg-danger ms-2">2 Job</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Technology</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Startups</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Gadgets</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html#">Inspiration</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <h5 class="mb-4 text-white">Get Regular Updates</h5>
                    <ul class="nav flex-column text-primary-hover">
                        <li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-whatsapp fa-fw me-2"></i>WhatsApp</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube fa-fw me-2"></i>YouTube</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-bell fa-fw me-2"></i>Website Notifications</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-envelope fa-fw me-2"></i>Newsletters</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-headphones-alt fa-fw me-2"></i>Podcasts</a></li>
                    </ul>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <h5 class="mb-4 text-white">Our mobile App</h5>
                    <p class="text-muted">Download our App and get the latest Breaking News Alerts and latest headlines and daily articles near you.</p>
                    <div class="row g-2">
                        <div class="col">
                            <a href="#"><img class="w-100" src="{{url('frontend/assets/images/app-store.svg')}}" alt="app-store"></a>
                        </div>
                        <div class="col">
                            <a href="#"><img class="w-100" src="{{url('frontend/assets/images/google-play.svg')}}" alt="google-play"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets END -->

            <!-- Hot topics START -->
            <div class="row">
                <h5 class="mb-2 text-white">Hot topics</h5>
                <ul class="list-inline text-primary-hover lh-lg">
                    <li class="list-inline-item"><a href="#">Covid-19</a></li>
                    <li class="list-inline-item"><a href="#">Politics</a></li>
                    <li class="list-inline-item"><a href="#">Entertainment</a></li>
                    <li class="list-inline-item"><a href="#">Media</a></li>
                    <li class="list-inline-item"><a href="#">Royalist</a></li>
                    <li class="list-inline-item"><a href="#">World</a></li>
                    <li class="list-inline-item"><a href="#">Half Full</a></li>
                    <li class="list-inline-item"><a href="#">Scouted</a></li>
                    <li class="list-inline-item"><a href="#">Travel</a></li>
                    <li class="list-inline-item"><a href="#">Beast Inside</a></li>
                    <li class="list-inline-item"><a href="#">Crossword</a></li>
                    <li class="list-inline-item"><a href="#">Newsletters</a></li>
                    <li class="list-inline-item"><a href="#">Podcasts</a></li>
                    <li class="list-inline-item"><a href="#">Auction 2021</a></li>
                    <li class="list-inline-item"><a href="#">Protests</a></li>
                    <li class="list-inline-item"><a href="#">NewsCyber</a></li>
                    <li class="list-inline-item"><a href="#">Education</a></li>
                    <li class="list-inline-item"><a href="#">Sports</a></li>
                    <li class="list-inline-item"><a href="#">Tech And Auto</a></li>
                    <li class="list-inline-item"><a href="#">Opinion</a></li>
                    <li class="list-inline-item"><a href="#">Share Market</a></li>
                </ul>
            </div>
            <!-- Hot topics END -->
        </div>

        <!-- Footer copyright START -->
        <div class="bg-dark-overlay-3 mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-md-between py-4">
                    <div class="col-md-6">
                        <!-- Copyright -->
                        <div class="text-center text-md-start text-primary-hover text-muted">©{{date('Y')}} <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
                        </div>
                    </div>
                    <div class="col-md-6 d-sm-flex align-items-center justify-content-center justify-content-md-end">
                        <!-- Language switcher -->
                        <div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
                            <a class="dropdown-toggle text-primary-hover" href="index.html#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
                                English Edition
                            </a>
                            <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                <li><a class="dropdown-item" href="l#">English</a></li>
                                <li><a class="dropdown-item" href="#">Nepali </a></li>
                            </ul>
                        </div>
                        <!-- Links -->
                        <ul class="nav text-primary-hover text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
                            <li class="nav-item"><a class="nav-link" href="index.html#">Terms</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.html#">Privacy</a></li>
                            <li class="nav-item"><a class="nav-link pe-0" href="index.html#">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer copyright END -->
    </footer>
    <!-- =======================
    Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

    <!-- =======================
    JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="{{url('frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Vendors -->
    <script src="{{url('frontend/assets/vendor/tiny-slider/tiny-slider.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/sticky-js/sticky.min.js')}}"></script>

    <!-- Template Functions -->
    <script src="{{url('frontend/assets/js/functions.js')}}"></script>

    </body>
    </html>

@endsection
