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
    body {
    }
    #banner {
        height: 250px;
        text-align: center;
        background: black url("{{ URL::asset('img/bg.png') }}") repeat-x top;
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
    @media (max-width: 480px) {
        .main-navbar .fa {
            font-size: 1.3em;
        }
        .main-navbar > li > a {
            padding-left: 0;
            padding-right: 0;
        }
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
            <div id="banner-box">
                <h1 id="store-name">E&T Auto Repair</h1>
                <p id="store-address">1111 Some St. | Deer Park, NY 11111 | 123.456.7890</p>
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
                    <a href="{{ URL::to('/profiles') }}" aria-label="Profiles" title="Profiles"><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs">Profiles</span></a>
                </li>
                <li>
                    <a href="{{ URL::to('/specials') }}" aria-label="Specials" title="Specials"><i class="fa fa-star" aria-hidden="true"></i><span class="hidden-xs">Specials</span></a>
                </li>
                <li>
                    <a href="{{ URL::to('/matt') }}" aria-label="Contact" title="Contact"><i class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs">Matt</span></a>
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
</body>
</html>