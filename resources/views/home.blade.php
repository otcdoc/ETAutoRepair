@extends('layout')
@section('content')
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://inertiaddict.com/images/frontend.png');"></div>
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
                <div class="fill" style="background-image:url('http://inertiaddict.com/images/lobby.jpg');"></div>
                <div id="banner">
                    <div class="container">
                        <div class="carousel-caption">
                            <div id="caption-banner-box">
                                <h2>Experienced and Trusted</h2>
                                <p>Whether it's an emergency, or just scheduled maintenance, E&T has been in business for over 40 years, and knows how to treat you, your wallet, and your vehicle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://inertiaddict.com/images/sign.jpg');"></div>
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
                    Welcome to E&T Auto Repair
                </h1>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="center-this"><i class="fa fa-fw fa-check"></i> E&T stands for Experience and Trust</h4>
                    </div>
                    <div class="panel-body">
                        <p class="center-this" >We are a family owned and operated repair shop with a keen focus on customer service and satisfaction. We employ both New York State and ASE certified technicians. Our professionalism sets us apart from the rest. Visit us for a complete line of maintenance and repair needs. A friendly, clean and efficient shop that strives to make our customers feel welcome, comfortable and satisfied with each repair. </p>
                        <a href="/contact" class="btn btn-default" class="center-this">Contact Us!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="center-this" ><i class="fa fa-fw fa-gift"></i> Visit Our News Page!</h4>
                    </div>
                    <div class="panel-body">
                        <p class="center-this" >Looking for something to make you smile? Come check out our news page and, if you use it, you can follow us on Facebook! We're happy to make your day and inspect your vehicle.</p>
                        <a href="/news" class="btn btn-default" class="center-this">E&T News!</a>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
@stop
@section('postjquery')

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
@stop
