@extends('layouts.front_master')

@section('content')
    <!-- Section Title -->
    <div class="section-title" style="background:url(img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Players List</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Inner Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Title -->

    <!-- Section Area - Content Central -->
    <section class="content-info">

        <!-- Nav Filters -->
        <div class="portfolioFilter">
            <div class="container">
                <h5><i class="fa fa-filter" aria-hidden="true"></i>Filter By:</h5>
                <a href="#" data-filter="*" class="current">Show All</a>
                <a href="#" data-filter=".forward">Forward</a>
                <a href="#" data-filter=".defender">Defender</a>
                <a href="#" data-filter=".midfielder">Midfielder</a>
                <a href="#" data-filter=".goalkeeper">Goalkeeper</a>
            </div>
        </div>
        <!-- End Nav Filters -->

        <div class="container padding-top">
            <div class="row portfolioContainer">

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 forward">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/1.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        13
                                    </span>
                            <h4>
                                Cristiano Ronaldo
                                <span>Forward</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 defender">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/2.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        10
                                    </span>
                            <h4>
                                Lionel Messi
                                <span>Defender</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 midfielder">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/3.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        2
                                    </span>
                            <h4>
                                Neymar
                                <span>Midfielder</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 goalkeeper">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/4.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        2
                                    </span>
                            <h4>
                                Luis Suárez
                                <span>Goalkeeper</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 midfielder">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/5.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        2
                                    </span>
                            <h4>
                                Gareth Bale
                                <span>Midfielder</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 goalkeeper">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/6.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        2
                                    </span>
                            <h4>
                                Sergio Agüero
                                <span>Goalkeeper</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 forward">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/1.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        13
                                    </span>
                            <h4>
                                Cristiano Ronaldo
                                <span>Forward</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 defender">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/2.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        10
                                    </span>
                            <h4>
                                Lionel Messi
                                <span>Defender</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 midfielder">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/3.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        2
                                    </span>
                            <h4>
                                Neymar
                                <span>Midfielder</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 goalkeeper">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/4.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        2
                                    </span>
                            <h4>
                                Luis Suárez
                                <span>Goalkeeper</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 midfielder">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/5.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        2
                                    </span>
                            <h4>
                                Gareth Bale
                                <span>Midfielder</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

                <!-- Item Player -->
                <div class="col-xl-3 col-lg-4 col-md-6 goalkeeper">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="img/players/6.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                                    <span class="number-player">
                                        2
                                    </span>
                            <h4>
                                Sergio Agüero
                                <span>Goalkeeper</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Item Player -->

            </div>
        </div>

        <!-- Newsletter -->
        <div class="section-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Enter your e-mail and <span class="text-resalt">subscribe</span> to our newsletter.</h2>
                            <p>Duis non lorem porta,  eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>
                        </div>
                        <form id="newsletterForm" action="http://html.iwthemes.com/sportscup/run/php/mailchip/newsletter-subscribe.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                        <input class="form-control" placeholder="Your Name" name="name"  type="text" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                        <input class="form-control" placeholder="Your  Email" name="email"  type="email" required="required">
                                        <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit" name="subscribe" >SIGN UP</button>
                                                 </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="result-newsletter"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter -->
    </section>
    <!-- End Section Area -  Content Central -->
@endsection