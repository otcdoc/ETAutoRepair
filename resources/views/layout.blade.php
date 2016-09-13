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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modern-business.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}"/>
    <style>
    @keyframes smoke {
        0% { transform: translate(0,0); opacity: 0; font-size: 1em;}
        25% { transform: translate(-10px,-1.25px); opacity: 1; font-size: 1.25em;}
        50% { transform: translate(-20px,-2.5px); opacity: 1; font-size: 1.5em;}
        75% { transform: translate(-30px,-11.25px); opacity: 1; font-size: 1.75em;}
        100% { transform: translate(-40px,-20px); opacity: 0; font-size: 2em;}
    }
    @keyframes cloud {
        0% { transform: translate(0,0); opacity: 0;}
        25% { transform: translateX(-60px); opacity: 1;}
        50% { transform: translateX(-120px); opacity: 1;}
        75% { transform: translateX(-180px); opacity: 1;}
        100% { transform: translateX(-240px); opacity: 0;}
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    #banner {
        height: 250px;
        text-align: center;
        background: black url('img/bg.png') repeat-x top;
        color: white;
    }
    #banner-car {
        margin-top: 108px;
        max-height:80px;
        margin-left: auto;
        margin-right: auto;
        z-index: 5;
        position: relative;
    }
    #banner-logo {
        max-height:168px;
        margin-left: auto;
        margin-right: auto;
        background-color: rgba(255,255,255,.8);
        border: 3px solid black;
    }
    #store-name, #store-address {
        color: white;
    }
    .main-navbar {
    border-radius: 0;
    border: none;
    background-color: rgb(2,82,203);
    padding-top: 4px;
    margin-bottom: 0;
    box-shadow: 0px 0px 6px 0 black;
    }
    .main-nav > li {
        display: table-cell;
        width: 1%;
        text-align: center;
    }
    .main-nav > li > a {
        font-family:'Fjalla One', sans-serif;
        color: white;
        background-color: #cb2026;
        margin: 0 auto;
        width: 80%;
        border-radius: 5px;
        transition: color .25s ease, background-color .25s ease;
    }
    .main-nav > li > a:hover, .main-nav > li > a:focus, .main-nav > li.open > a  {
        color: #cb2026;
    }
    .main-navbar .fa {
        font-size: 1.5em;
        vertical-align: -.05em;
    }
    .main-navbar .hidden-xs {
        padding-left: .5em;
    }
    .affix {
        top: 0;
        right: 0;
        left: 0;
        z-index: 1000;
    }
    .affix + .nav-pad {
        padding-top:50px;
    }
    #banner-box {
        background: rgba(107,154,224,.5);
        border: 1px solid white;
        margin: 20px 0;
        height: 210px;
        box-sizing: border-box;
    }
    #caption-banner-box {
        background: rgba(107,154,224,.5);
        border: 1px solid white;
        margin: 20px 0;
        box-sizing: border-box;
    }
    .center-this {
            text-align: center;
        }
    .page-header {
        color:red;
        font-weight:bold;
    }
    .blue-shadow {
        border-color:#9ecaed;
        box-shadow: 0px 3px 3px 0 #0000ff;
    }
    .panel-heading {
        color:red;
        font-weight:bold;
        text-align: center;
    }
    .btn-red {
        background-color: red;
        color: white;
        font-weight: bold;
        text-align: center;
    }
    .btn-red:hover {
        color: red;
        background-color: white;
        transition: color .25s ease, background-color .25s ease;
    }
    .red-shadow-img {
        height: 370px;
        width: 700px;
        border-color:#9ecaed;
        box-shadow: 0px 3px 3px 0 #ff0000;
    }
    #contact-header {
        font-weight: bold;
    }
    .contact-head-text {
        font-weight: 600;
    }
    .guarenteed {
        font-size: 1.1em;
        box-sizing: border-box;
        background-color: #cb2026;
        color: white;
        font-weight: bold;
        max-width: 190px;
        margin-left: auto;
        margin-right: auto;
    }
    #banner-car-wrap {
        position: relative;
    }
    .smoke {
        position: absolute;
        bottom: 25px;
        left: 90px;
        animation-name: smoke;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    #smoke1 {
        color: rgb(96,96,96);
        z-index: 1;
    }
    #smoke2 {
        animation-delay: .25s;
        color: rgb(128,128,128);
        z-index: 2;
    }
    #smoke3 {
        animation-delay: .5s;
        color: rgb(160,160,160);
        z-index: 3;
    }
    #smoke4 {
        animation-delay: .75s;
        color: rgb(192,192,192);
        z-index: 4;
    }
    #cloud {
        position: absolute;
        top: -100px;
        right: 40px;
        font-size: 4em;
        z-index: 1;
        animation-name: cloud;
        animation-duration: 3s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    .wheel {
        position: absolute;
        background: url('/img/wheel.png');
        background-size: contain;
        z-index: 6;
        height: 24px;
        width: 24px;
        animation-name: spin;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    #wheel1 {
        bottom: 17px;
        left: 106px;
    }
    #wheel2 {
        bottom: 17px;
        left: 217px;
    }
    .blue-font {
        color: #0000ff;
    }
    @media (max-width: 1199px) {
        #cloud {
            right: 0px;
        }
        #wheel1 {
            left: 73px;
        }
        #wheel2 {
            left: 184px;
        }
        .smoke {
            left: 57px;
        }
    }
    @media screen and (max-width: 1048px) {
        #banner-logo {
            max-height: 130px;
        }
    }
    @media (max-width: 480px) {
        .main-navbar .fa {
            font-size: 1.3em;
        }
        .main-navbar > li > a {
            padding-left: 0;
            padding-right: 0;
        }
    }
    </style>
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
    <nav class="navbar navbar-inverse main-navbar" role="navigation" data-spy="affix" data-offset-top="250">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav nav-justified main-nav">
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