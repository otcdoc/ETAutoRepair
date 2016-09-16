<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:url" content="{{ URL::to('/') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="The right choice for auto and light truck repair in Suffolk County since 1971." />
    <meta property="og:image" content="{{ URL::asset('/img/logo.jpg')}}" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@etautodeerpark">
    <meta name="twitter:creator" content="@OTChest">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="The right choice for auto and light truck repair in Suffolk County since 1971.">
    <meta name="twitter:image" content="{{ URL::asset('/img/logo.jpg')}}">

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link href="{{ URL::asset('favicon.ico') }}" rel="shortcut icon">
    @yield('styles1')

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head_scripts')
    <!-- Google Analytics -->
</head>
<body>
    <!-- Banner -->
    <div id="banner">
        <div class="container">
            <div id="banner-box" class="row">
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div id="banner-car-wrap">
                        <img id="banner-car" class="img-responsive" src="{{ URL::asset('img/logo-car.png') }}">
                        <span id="smoke1" class="smoke"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                        <span id="smoke2" class="smoke"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                        <span id="smoke3" class="smoke"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                        <span id="smoke4" class="smoke"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                        <span id="cloud" class="cloud"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                        <span id="wheel1" class="wheel"></i></span>
                        <span id="wheel2" class="wheel"></i></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1 class="center-this"><a class="banner-phone" href="tel:+1-631-586-7110"><img id="banner-logo" class="img-responsive" src="{{ URL::asset('img/header-logo.png') }}"></a></h1>
                    <div class="contact-head-text visible-xs visible-sm">
                        <div class="">509 Commack Rd<br>Deer Park, NY 11729</div>
                        <div>M-F: 8:00AM - 5:30PM</div>
                        <div>Phone: <a class="banner-phone" href="tel:+1-631-586-7110">(631) 586-7110</a></div>
                        <div>24Hr Tow: <a class="banner-phone" href="tel:+1-917-586-4300">(917) 586-4300</a></div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs contact-head-text">
                    <h3 id="contact-header">Contact Us!</h3>
                    <p>509 Commack Rd | Deer Park, NY 11729</p>
                    <p>The right choice for auto and light truck repair in Suffolk County since 1971.</p>
                    <div class="guaranteed label">All Work Guarenteed!</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation" data-spy="affix" data-offset-top="290">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav nav-justified">
                <li>
                    <a href="{{ URL::to('/') }}" aria-label="Home" title="Home"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs">Home</span></a>
                </li>
                <li>
                    <a href="{{ URL::to('/services') }}" aria-label="Services" title="Services"><i class="fa fa-wrench" aria-hidden="true"></i><span class="hidden-xs">Services</span></a>
                </li>
                <li>
                    <a href="{{ URL::to('/news') }}" aria-label="News" title="News"><i class="fa fa-star" aria-hidden="true"></i><span class="hidden-xs">News</span></a>
                </li>
                <li>
                    <a href="{{ URL::to('/contact') }}" aria-label="Contact" title="Contact"><i class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs">Contact</span></a>
                </li>
            </ul>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="nav-pad"></div>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('{{ URL::asset('img/frontend.png') }}')"></div>
                <div id="banner">
                    <div class="container">
                        <div class="carousel-caption">
                            <div id="caption-banner-box">
                                <h2>All Work Guaranteed!</h2>
                                <p>Call us to schedule an appointment today!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('{{ URL::asset('img/lobby.jpg') }}')"></div>
                <div id="banner">
                    <div class="container">
                        <div class="carousel-caption">
                            <div id="caption-banner-box">
                                <h2>Experienced and Trusted</h2>
                                <p>Whether it's an emergency, or just scheduled maintenance, E&amp;T has been in business for over 40 years, and knows how to treat you, your wallet, and your vehicle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('{{ URL::asset('img/sign.jpg') }}')"></div>
                <div id="banner">
                    <div class="container">
                        <div class="carousel-caption">
                            <div id="caption-banner-box">
                                <h2>Established and Tested</h2>
                                <p>Since 1971 we have been the right choice for auto and light truck repair in Suffolk County.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to E&amp;T Auto Repair
                </h1>
            </div>
        </div>
    </div>
</body>
</html>