<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link href="{!! asset('assets/css/main.css') !!}" rel="stylesheet" media="screen">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{!! asset('img/icons/favicon.ico') !!}">
    {{--
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
    --}}

    @yield('style')
</head>

<body>

<!-- layout-->
<div id="layout">
    <!-- Header-->
    <header>
        <!-- End headerbox-->
        <div class="headerbox">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <!-- Logo-->
                    <div class="col">
                        <div class="logo">
                            <a href="{!! url('/') !!}" title="Return Home">
                                <img src="img/logo.png" alt="Logo" class="logo_img">
                            </a>
                        </div>
                    </div>
                    <!-- End Logo-->

                    <!-- Adds Header-->
                    <div class="col">
                        <div class="adds">
                            <a href="http://themeforest.net/user/iwthemes/portfolio?ref=iwthemes" target="_blank">
                                <img src="img/adds/banner.jpg" alt="" class="img-responsive">
                            </a>
                        </div>

                        <!-- Call Nav Menu-->
                        <a class="mobile-nav" href="#mobile-nav"><i class="fa fa-bars"></i></a>
                        <!-- End Call Nav Menu-->
                    </div>
                    <!-- End Adds Header-->
                </div>
            </div>
        </div>
        <!-- End headerbox-->
    </header>
    <!-- End Header-->

    <!-- mainmenu-->
    <nav class="mainmenu">
        <div class="container">
            <!-- Menu-->
            <ul class="sf-menu" id="menu">
                <li class="current">
                    <a href="{!! url('/') !!}">Home</a>
                    {{--
                                        <ul class="sub-current">
                                            <li>
                                                <a href="index.html">Home 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home 3</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home 4</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html">Home 5</a>
                                            </li>
                                            <li>
                                                <a href="index-6.html">Home 6</a>
                                            </li>
                                        </ul>
                    --}}
                </li>

                {{--
                                <li>
                                    <a href="#">World Cup</a>
                                    <div class="sf-mega">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5><i class="fa fa-trophy" aria-hidden="true"></i>World Cup</h5>
                                                <ul>
                                                    <li><a href="table-point.html">Point Table</a></li>
                                                    <li><a href="fixtures.html">Fixtures</a></li>
                                                    <li><a href="groups.html">Groups</a></li>
                                                    <li><a href="news-left-sidebar.html">News</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-3">
                                                <h5><i class="fa fa-users" aria-hidden="true"></i> Teams List</h5>
                                                <div class="img-hover">
                                                    <img src="img/blog/1.jpg" alt="" class="img-responsive">
                                                    <div class="overlay"><a href="teams.html">+</a></div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <h5><i class="fa fa-futbol-o" aria-hidden="true"></i> Players List</h5>
                                                <div class="img-hover">
                                                    <img src="img/blog/2.jpg" alt="" class="img-responsive">
                                                    <div class="overlay"><a href="players.html">+</a></div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <h5><i class="fa fa-gamepad" aria-hidden="true"></i> Results Info</h5>
                                                <div class="img-hover">
                                                    <img src="img/blog/3.jpg" alt="" class="img-responsive">
                                                    <div class="overlay"><a href="results.html">+</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                --}}

                <li class="current">
                    <a href="{!! url('/teams') !!}">Teams</a>
                    {{--<ul class="sub-current">
                        <li>
                            <a href="teams.html">Teams List</a>
                        </li>
                        <li>
                            <a href="single-team.html">Single Team</a>
                        </li>
                    </ul>--}}
                </li>

                <li class="current">
                    <a href="{!! url('/players') !!}">Players</a>
                    {{--<ul class="sub-current">
                        <li>
                            <a href="players.html">Players List</a>
                        </li>
                        <li>
                            <a href="single-player.html">Single Player</a>
                        </li>
                    </ul>--}}
                </li>

                <li>
                    <a href="{!! url('/fixtures') !!}">Fixtures</a>
                </li>

                <li class="current">
                    <a href="{!! url('/results') !!}">Results</a>
                    {{--<ul class="sub-current">
                        <li>
                            <a href="results.html">Results List</a>
                        </li>
                        <li>
                            <a href="single-result.html">Single Result</a>
                        </li>
                    </ul>--}}
                </li>

                <li>
                    <a href="{!! url('/point-table') !!}">Point Table</a>
                </li>

                <li>
                    <a href="{!! url('/groups') !!}">Groups</a>
                </li>

                {{--
                                <li>
                                    <a href="#">Features</a>
                                    <div class="sf-mega">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5>Features</h5>
                                                <ul>
                                                    <li><a href="page-full-width.html">Full Width</a></li>
                                                    <li><a href="page-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="page-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="page-404.html">404 Page</a></li>
                                                    <li><a href="page-faq.html">FAQ</a></li>
                                                    <li><a href="sitemap.html">Sitemap</a></li>
                                                    <li><a href="page-pricing.html">Pricing</a></li>
                                                    <li><a href="page-register.html">Register Form</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h5>Headers & Footers</h5>
                                                <ul>
                                                    <li><a href="feature-header-footer-1.html">Header Version 1</a></li>
                                                    <li><a href="feature-header-footer-2.html">Header Version 2</a></li>
                                                    <li><a href="feature-header-footer-3.html">Header Version 3</a></li>
                                                    <li><a href="index-5.html">Header Version 4</a></li>
                                                    <li><a href="feature-header-footer-1.html#footer">Footer Version 1</a></li>
                                                    <li><a href="feature-header-footer-2.html#footer">Footer Version 2</a></li>
                                                    <li><a href="feature-header-footer-3.html#footer">Footer Version 3</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-3">
                                                <h5>Pages</h5>
                                                <ul>
                                                    <li><a href="page-about.html">About Us</a></li>
                                                    <li><a href="single-player.html">About Me</a></li>
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="single-team.html">Club Info</a></li>
                                                    <li><a href="single-result.html">Match Result</a></li>
                                                    <li><a href="table-point.html">Positions</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-3">
                                                <h5>News</h5>
                                                <ul>
                                                    <li>
                                                        <a href="news-left-sidebar.html">News Lef Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="news-right-sidebar.html">News Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="news-no-sidebar.html">News No Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-news.html">Single News</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <i class="fa fa-trophy big-icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </li>
                --}}

                <li>
                    <a href="{!! url('/contact') !!}">Contact</a>
                </li>
            </ul>
            <!-- End Menu-->
        </div>
    </nav>
    <!-- End mainmenu-->

    <!-- Mobile Nav-->
    <div id="mobile-nav">
        <!-- Menu-->
        <ul>
            <li>
                <a href="index.html">Home</a>
                <ul>
                    <li>
                        <a href="index-1.html">Home 1</a>
                    </li>
                    <li>
                        <a href="index-2.html">Home 2</a>
                    </li>
                    <li>
                        <a href="index-3.html">Home 3</a>
                    </li>
                    <li>
                        <a href="index-4.html">Home 4</a>
                    </li>
                    <li>
                        <a href="index-5.html">Home 5</a>
                    </li>
                    <li>
                        <a href="index-6.html">Home 6</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">World Cup</a>
                <ul>
                    <li>
                        <a href="#">World Cup</a>
                        <ul>
                            <li><a href="table-point.html">Point Table</a></li>
                            <li><a href="fixtures.html">Fixtures</a></li>
                            <li><a href="groups.html">Groups</a></li>
                            <li><a href="news-left-sidebar.html">News</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>

                    <li><a href="teams.html">Teams List</a></li>
                    <li><a href="players.html">Players List</a></li>
                    <li><a href="results.html">Results List</a></li>
                </ul>
            </li>

            <li>
                <a href="teams.html">Teams</a>
                <ul>
                    <li>
                        <a href="teams.html">Teams List</a>
                    </li>
                    <li>
                        <a href="single-team.html">Single Team</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="players.html">Players</a>
                <ul>
                    <li>
                        <a href="players.html">Players List</a>
                    </li>
                    <li>
                        <a href="single-player.html">Single Player</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="fixtures.html">Fixtures</a>
            </li>

            <li>
                <a href="results.html">Results</a>
                <ul>
                    <li>
                        <a href="results.html">Results List</a>
                    </li>
                    <li>
                        <a href="single-result.html">Single Result</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="table-point.html">Point Table</a>
            </li>

            <li>
                <a href="groups.html">Groups</a>
            </li>

            <li>
                <a href="#">Features</a>
                <ul>
                    <li>
                        <a href="#">Features</a>
                        <ul>
                            <li><a href="page-full-width.html">Full Width</a></li>
                            <li><a href="page-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="page-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="page-404.html">404 Page</a></li>
                            <li><a href="page-faq.html">FAQ</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                            <li><a href="page-pricing.html">Pricing</a></li>
                            <li><a href="page-register.html">Register Form</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Headers & Footers</a>
                        <ul>
                            <li><a href="feature-header-footer-1.html">Header Version 1</a></li>
                            <li><a href="feature-header-footer-2.html">Header Version 2</a></li>
                            <li><a href="feature-header-footer-3.html">Header Version 3</a></li>
                            <li><a href="index-5.html">Header Version 4</a></li>
                            <li><a href="feature-header-footer-1.html#footer">Footer Version 1</a></li>
                            <li><a href="feature-header-footer-2.html#footer">Footer Version 2</a></li>
                            <li><a href="feature-header-footer-3.html#footer">Footer Version 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="single-player.html">About Me</a></li>
                            <li><a href="feature-header-footer-2.html#footer">Services</a></li>
                            <li><a href="single-team.html">Club Info</a></li>
                            <li><a href="single-result.html">Match Result</a></li>
                            <li><a href="table-point.html">Positions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">News</a>
                        <ul>
                            <li>
                                <a href="news-left-sidebar.html">News Lef Sidebar</a>
                            </li>
                            <li>
                                <a href="news-right-sidebar.html">News Right Sidebar</a>
                            </li>
                            <li>
                                <a href="news-no-sidebar.html">News No Sidebar</a>
                            </li>
                            <li>
                                <a href="single-news.html">Single News</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
        <!-- End Menu-->
    </div>
    <!-- End Mobile Nav-->

    <!-- section-hero-posts-->
    @yield('slide')
    <!-- End section-hero-posts-->

    <!-- Section Area - Content Central -->
    @yield('content')
    <!-- End Section Area -  Content Central -->

    <div class="instagram-btn">
        <div class="btn-instagram">
            <i class="fa fa-instagram"></i>
            FOLLOW
            <a href="https://www.instagram.com/fifaworldcup/" target="_blank">&#64;fifaworldcup</a>
        </div>
    </div>

    <div class="content-instagram">
        <div id="instafeed"></div>
    </div>

    <!-- footer-->
    <footer id="footer">
        <!-- Footer Top-->
        <div class="top-footer">

            <!-- Logo Footer-->
            <div class="col-lg-12">
                <div class="logo-footer">
                    <h2>Sports Cup</h2>
                </div>
            </div>
            <!-- End Logo Footer-->

            <!-- Social Icons-->
            <ul class="social">
                <li>
                    <div>
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="#" class="twitter-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="#" class="vimeo">
                            <i class="fa fa-vimeo-square"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="#" class="google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="#" class="youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- End Social Icons-->
        </div>
        <!-- End Footer Top-->

        <!-- Links Footer-->
        <div class="links-footer">
            <div class="container">
                <div class="row">

                    <!-- Column Links -->
                    <div class="col-lg-2 col-md-5 col-sm-5">
                        <div class="info-links">
                            <h5>Organisation</h5>
                            <ul>
                                <li><a href="#">Volunteers</a></li>
                                <li><a href="#">Committees</a></li>
                                <li><a href="#">Official Documents</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Column Links -->

                    <!-- Column Links -->
                    <div class="col-lg-4 col-md-7 col-sm-7">
                        <div class="info-links">
                            <h5>Groups</h5>
                            <ul class="columns">
                                <li><a href="#">GROUP A</a></li>
                                <li><a href="#">GROUP B</a></li>
                                <li><a href="#">GROUP C</a></li>
                                <li><a href="#">GROUP D</a></li>
                                <li><a href="#">GROUP E</a></li>
                                <li><a href="#">GROUP F</a></li>
                                <li><a href="#">GROUP G</a></li>
                                <li><a href="#">GROUP H</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Column Links -->

                    <!-- Column Links -->
                    <div class="col-lg-2 col-md-5 col-sm-5">
                        <div class="info-links">
                            <h5>Interest Links</h5>
                            <ul>
                                <li><a href="#">Statistics</a></li>
                                <li><a href="#">Teams</a></li>
                                <li><a href="#">Qualifiers</a></li>
                                <li><a href="#">Ticketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Column Links -->

                    <!-- Column Links -->
                    <div class="col-lg-4 col-md-7 col-sm-7">
                        <div class="info-links">
                            <h5>Organisation</h5>
                            <ul class="columns">
                                <li><a href="#">NIZHNY NOVGOROD</a></li>
                                <li><a href="#">SAINT PETERSBURG</a></li>
                                <li><a href="#">EKATERINBURG</a></li>
                                <li><a href="#">MOSCOW</a></li>
                                <li><a href="#">KAZAN</a></li>
                                <li><a href="#">KALININGRAD</a></li>
                                <li><a href="#">VOLGOGRAD</a></li>
                                <li><a href="#">ROSTOV-ON-DON</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Column Links -->

                </div>
            </div>
        </div>
        <!-- End Links Footer-->

    </footer>
    <!-- End footer-->

    <!-- footer Down-->
    <div class="footer-down">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2018 SportsCup . All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer Down-->
</div>
<!-- End layout-->

<!-- ======================= JQuery libs =========================== -->
<!-- jQuery local-->
<script type="text/javascript" src="{!! asset('assets/js/jquery.js') !!}"></script>
<!-- popper.js-->
<script type="text/javascript" src="{!! asset('assets/js/popper.min.js') !!}"></script>
<!-- bootstrap.min.js-->
<script type="text/javascript" src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!-- required-scripts.js-->
<script type="text/javascript" src="{!! asset('assets/js/theme-scripts.js') !!}"></script>
<!-- theme-main.js-->
<script type="text/javascript" src="{!! asset('assets/js/theme-main.js') !!}"></script>
<!-- ======================= End JQuery libs =========================== -->
@stack('scripts')
</body>
</html>
