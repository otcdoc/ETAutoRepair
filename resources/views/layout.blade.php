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
    @yield('styles')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}"/>
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
                    <h1 class="center-this"><img id="banner-logo" class="img-responsive" src="{{ URL::asset('img/header-logo.png') }}"></h1>
                    <div class="visible-sm visible-xs guarenteed label">All Work Guarenteed!</div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <h3 id="contact-header">Contact Us!</h3>
                    <p class="contact-head-text">509 Commack Rd | Deer Park, NY 11729</p>
                    <p class="contact-head-text">The right choice for auto and light truck repair in Suffolk County since 1971.</p>
                    <div class="guarenteed label">All Work Guarenteed!</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation" data-spy="affix" data-offset-top="250">
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
@yield('content')
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-sm-6">
                    <div class="contact-heading">Contact Us:</div>
                    <div>509 Commack Rd</div>
                    <div>Deer Park, NY 11729</div>
                    <div>(631) 586-7110</div>
                </div>
                <div class="col-sm-6">
                    <div class="contact-heading">Follow us:</div>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="https://www.facebook.com/ET-Auto-Repair-Inc-194281337341129/"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="row">
                <div class="copyright col-sm-12">
                    <div>Copyright &copy; E&amp;T Auto Repair {{ date('Y') }} - <a href="{{ URL::to('/privacypolicy') }}">Privacy Policy</a> - Powered by <a href="http://otchest.com" target="_blank">Off The Chest Ent</a>.</div>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
    @yield('deferred')
    <!-- jQuery -->
    <script
              src="https://code.jquery.com/jquery-3.1.0.min.js"
              integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
              crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
    <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    @yield('postjquery')
    <script>
    </script>
</body>
</html>