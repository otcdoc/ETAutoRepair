@extends('layout')



@section('title')



E &amp; T Auto Repair, Inc.



@stop



@section('styles')



<style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}header,nav{display:block}a{background-color:transparent}a:active,a:hover{outline:0}h1{font-size:2em;margin:.67em 0}img{border:0}@media print{*,:after,:before{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}a[href^="#"]:after{content:""}img{page-break-inside:avoid;max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.label{border:1px solid #000}}*,:after,:before{box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-family:Raleway,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#f5f8fa}a{color:#3097d1;text-decoration:none}a:focus,a:hover{color:#216a94;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}img{vertical-align:middle}.img-responsive{display:block;max-width:100%;height:auto}h1,h2,h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;margin-top:22px;margin-bottom:11px}h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}p{margin:0 0 11px}.page-header{padding-bottom:10px;margin:44px 0 22px;border-bottom:1px solid #eee;clear}ul{margin-top:0;margin-bottom:11px}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-lg-12,.col-md-4{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:992px){.col-md-4{float:left;width:33.3333333333%}}@media (min-width:1200px){.col-lg-12{float:left;width:100%}}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav:after,.nav:before{content:" ";display:table}.nav:after{clear:both}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a{padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{text-align:center;margin-bottom:5px}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.navbar{position:relative;min-height:50px;margin-bottom:22px;border:1px solid transparent}.navbar:after,.navbar:before{content:" ";display:table}.navbar:after{clear:both}@media (min-width:768px){.navbar{border-radius:4px}}.navbar-inverse{background-color:#222;border-color:#090909}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}.carousel,.carousel-inner{position:relative}.carousel-inner{overflow:hidden;width:100%}.carousel-inner>.item{display:none;position:relative;-webkit-transition:left .6s ease-in-out;transition:left .6s ease-in-out}.carousel-inner>.item>a>img,.carousel-inner>.item>img{display:block;max-width:100%;height:auto;line-height:1}@media (-webkit-transform-3d),all and (transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;transition:-webkit-transform .6s ease-in-out;transition:transform .6s ease-in-out;transition:transform .6s ease-in-out,-webkit-transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.active.right,.carousel-inner>.item.next{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);left:0}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);left:0}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{-webkit-transform:translateZ(0);transform:translateZ(0);left:0}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;left:0;bottom:0;width:15%;opacity:.5;filter:alpha(opacity=50);font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);background-color:transparent}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,.0001));background-image:linear-gradient(90deg,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001));background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000',endColorstr='#00000000',GradientType=1)}.carousel-control.right{left:auto;right:0;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001),rgba(0,0,0,.5));background-image:linear-gradient(90deg,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5));background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#80000000',GradientType=1)}.carousel-control:focus,.carousel-control:hover{outline:0;color:#fff;text-decoration:none;opacity:.9;filter:alpha(opacity=90)}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;margin-top:-10px;z-index:5;display:inline-block}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;line-height:1;font-family:serif}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-caption{position:absolute;left:15%;right:15%;bottom:20px;z-index:7;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{left:20%;right:20%;padding-bottom:30px}}@media screen and (min-width:768px){.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .icon-prev{margin-left:-10px}.carousel-control .icon-next{margin-right:-10px}.carousel-caption{left:20%;right:20%;padding-bottom:30px}}@-ms-viewport{width:device-width}.visible-sm,.visible-xs{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}body,html{height:100%}header.carousel{height:50%}header.carousel .carousel-inner,header.carousel .item,header.carousel .item.active{height:100%}header.carousel .fill{width:100%;height:100%;background-position:50%;background-size:cover}@-webkit-keyframes a{0%{-webkit-transform:translate(0) scale(1);transform:translate(0) scale(1);opacity:0}25%{-webkit-transform:translate(-10px,-1.25px) scale(1.25);transform:translate(-10px,-1.25px) scale(1.25);opacity:1}50%{-webkit-transform:translate(-20px,-2.5px) scale(1.5);transform:translate(-20px,-2.5px) scale(1.5);opacity:1}75%{-webkit-transform:translate(-30px,-11.25px) scale(1.75);transform:translate(-30px,-11.25px) scale(1.75);opacity:1}to{-webkit-transform:translate(-40px,-20px) scale(2);transform:translate(-40px,-20px) scale(2);opacity:0}}@keyframes a{0%{-webkit-transform:translate(0) scale(1);transform:translate(0) scale(1);opacity:0}25%{-webkit-transform:translate(-10px,-1.25px) scale(1.25);transform:translate(-10px,-1.25px) scale(1.25);opacity:1}50%{-webkit-transform:translate(-20px,-2.5px) scale(1.5);transform:translate(-20px,-2.5px) scale(1.5);opacity:1}75%{-webkit-transform:translate(-30px,-11.25px) scale(1.75);transform:translate(-30px,-11.25px) scale(1.75);opacity:1}to{-webkit-transform:translate(-40px,-20px) scale(2);transform:translate(-40px,-20px) scale(2);opacity:0}}@-webkit-keyframes b{0%{-webkit-transform:translate(0);transform:translate(0);opacity:0}25%{-webkit-transform:translateX(-60px);transform:translateX(-60px);opacity:1}50%{-webkit-transform:translateX(-120px);transform:translateX(-120px);opacity:1}75%{-webkit-transform:translateX(-180px);transform:translateX(-180px);opacity:1}to{-webkit-transform:translateX(-240px);transform:translateX(-240px);opacity:0}}@keyframes b{0%{-webkit-transform:translate(0);transform:translate(0);opacity:0}25%{-webkit-transform:translateX(-60px);transform:translateX(-60px);opacity:1}50%{-webkit-transform:translateX(-120px);transform:translateX(-120px);opacity:1}75%{-webkit-transform:translateX(-180px);transform:translateX(-180px);opacity:1}to{-webkit-transform:translateX(-240px);transform:translateX(-240px);opacity:0}}@-webkit-keyframes c{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes c{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}body{color:#181a1b}#banner{height:290px;text-align:center;background:#000 url(/img/bg.png) repeat-x top;color:#fff}#banner-car{margin-top:108px;max-height:80px;z-index:5;position:relative}#banner-car,#banner-logo{margin-left:auto;margin-right:auto}#banner-logo{max-height:168px;background-color:hsla(0,0%,100%,.8);border:3px solid #000}.navbar{border-radius:0;border:none;background-color:#0252cb;padding-top:4px;margin-bottom:0;box-shadow:0 0 6px 0 #000}.navbar .nav>li{display:table-cell;width:1%;text-align:center}.navbar .nav>li>a{font-family:Fjalla One,sans-serif;color:#fff;background-color:#cb2026;margin:0 auto;width:80%;border-radius:5px;-webkit-transition:color .25s ease,background-color .25s ease;transition:color .25s ease,background-color .25s ease}.navbar .nav>li>a:focus,.navbar .nav>li>a:hover{color:#cb2026;background-color:#fff}.navbar .fa{font-size:1.5em;vertical-align:-.05em}.navbar .hidden-xs{padding-left:.5em}#banner-box{height:250px;padding-top:15px;}#banner-box,#caption-banner-box{background:rgba(107,154,224,.5);border:1px solid #fff;margin:20px 0;box-sizing:border-box}.center-this{text-align:center}.page-header{color:red;margin-top:20px;margin-bottom:10px}#contact-header,.page-header{font-weight:700}.contact-head-text{font-weight:600}.guaranteed{font-size:1.1em;box-sizing:border-box;background-color:#cb2026;color:#fff;font-weight:700;max-width:190px;margin-left:auto;margin-right:auto}#banner-car-wrap{position:relative}.smoke{position:absolute;bottom:25px;left:90px;-webkit-animation-name:a;animation-name:a;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:linear;animation-timing-function:linear}#smoke1{color:#606060;z-index:1}#smoke2{-webkit-animation-delay:.25s;animation-delay:.25s;color:gray;z-index:2}#smoke3{-webkit-animation-delay:.5s;animation-delay:.5s;color:#a0a0a0;z-index:3}#smoke4{-webkit-animation-delay:.75s;animation-delay:.75s;color:silver;z-index:4}#cloud{top:-100px;right:40px;font-size:4em;z-index:1;-webkit-animation-name:b;animation-name:b;-webkit-animation-duration:3s;animation-duration:3s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:linear;animation-timing-function:linear}#cloud,.wheel{position:absolute}.wheel{background:url(/img/wheel.png);background-size:contain;z-index:6;height:24px;width:24px;-webkit-animation-name:c;animation-name:c;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:linear;animation-timing-function:linear}#wheel1{bottom:17px;left:106px}#wheel2{bottom:17px;left:217px}@media screen and (max-width:1199px){#cloud{right:0}#wheel1{left:73px}#wheel2{left:184px}.smoke{left:57px}}.banner-phone{color:#fff;text-decoration:none;font-weight:600}@media screen and (max-width:991px){#banner-box h1{margin:20px auto}#banner-logo{max-height:110px}}.right-this{float:right}.page-header .list-social-icons{font-size:.35em}</style>



@stop



@section('content')



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



                                <p>E&amp;T has been in business for over 45 years and knows how to treat you right.</p>



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



                <h1 class="page-header clearfix center-this">



                    Welcome to E&amp;T <div style="display:inline-block;">Auto Repair</div></h1>



                <ul class="list-unstyled list-inline list-social-icons center-this">



                    <li>



                        <a href="https://www.facebook.com/ET-Auto-Repair-Inc-194281337341129/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>



                    </li>



                    <li>



                        <a href="https://twitter.com/service92713409"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></i></a>



                    </li>



                    <li>



                        <a href="https://www.yelp.com/biz/e-and-t-automobile-repr-deer-park"><i class="fa fa-yelp fa-2x" aria-hidden="true"></i></i></a>



                    </li>



                    <li>



                        <a href="http://www.cartalk.com/mechanics-files/mechanic/ny/deer-park/e-t-automobile-repair-incorporated"><img src="{{URL::asset('img/cartalk.png')}}" class="cartalk"></a>



                    </li>



                    <li>



                        <a href="https://plus.google.com/+ETAutomobileRepairIncDeerPark"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></i></a>



                    </li>

                    <li>



                        <a href="https://www.instagram.com/etautorepair/?hl=en"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></i></a>

                        


                    </li>



                </ul>





                </h1>



            </div>



            <div class="col-md-12">



                <div class="panel panel-default blue-shadow">



                    <div class="panel-heading">



                        <h4><i class="fa fa-fw fa-check"></i> E&amp;T stands for Experience and Trust</h4>



                    </div>



                    <div class="panel-body center-this">

                        <div><p>We are a family owned and operated repair shop with a keen focus on customer service and satisfaction. We employ both New York State and ASE certified technicians. Our professionalism sets us apart from the rest. Visit us for a complete line of maintenance and repair needs. A friendly, clean and efficient shop that strives to make our customers feel welcome, comfortable and satisfied with each repair.</p></div>

                        <div><video class="img img-responsive" id="flag" poster="https://media.giphy.com/media/3osxYcwi3hCVbzNYqY/200_s.gif"autoplay="" loop="" height="168" width="300">
                            <source src="https://media.giphy.com/media/3osxYcwi3hCVbzNYqY/giphy.mp4" type="video/mp4">
                            Your browser does not support the mp4 video codec.
                        </video></div>

                        <a href="/contact" class="btn btn-default btn-red">Contact Us!</a>



                    </div>



                </div>



            </div>



            <div class="col-md-12">



                <div class="panel panel-default blue-shadow">



                    <div class="panel-heading">



                        <h4><i class="fa fa-fw fa-gift"></i> Visit Our News Page!</h4>



                    </div>



                    <div class="panel-body center-this">



                        <p>Looking for something to make you smile? Come check out our news page and, if you use it, you can follow us on Facebook! We're happy to make your day and inspect your vehicle.</p>



                        <a href="/news" class="btn btn-default btn-red">E&amp;T News!</a>



                    </div>



                </div>



            </div>



            



        </div>



        <!-- /.row -->







        <!-- Portfolio Section -->



        <div class="row">



            <div class="col-md-4 col-sm-6">



                <img class="img-responsive img-portfolio red-shadow-img" src="{{ URL::asset('img/home_0_5.jpg') }}" alt="">



            </div>



            <div class="col-md-4 col-sm-6">



                <img class="img-responsive img-portfolio red-shadow-img" src="{{ URL::asset('img/home_0_12.jpg') }}" alt="">



            </div>



            <div class="col-md-4 col-sm-6">



                <img class="img-responsive img-portfolio red-shadow-img" src="{{ URL::asset('img/home_0_4.jpg') }}" alt="">



            </div>



            <div class="col-md-4 col-sm-6">



                <img class="img-responsive img-portfolio red-shadow-img" src="{{ URL::asset('img/home_0_3.jpg') }}" alt="">



            </div>



            <div class="col-md-4 col-sm-6">



                <img class="img-responsive img-portfolio red-shadow-img" src="{{ URL::asset('img/home_0_7.jpg') }}" alt="">



            </div>



            <div class="col-md-4 col-sm-6">



                <img class="img-responsive img-portfolio red-shadow-img" src="{{ URL::asset('img/home_0_8.jpg') }}" alt="">



            </div>



        </div>



        <!-- /.row -->







        <hr>







        <!-- Portfolio Item Row -->



        <div class="row">







            <div class="col-md-12">



                <h3>Testimonials</h3>



            </div>











            <div class="col-md-12">



                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">







                    <!-- Wrapper for slides -->



                    <div class="carousel-inner">



                        <div class="item active testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">Twenty five years ago, I worked in the auto parts business. I dealt with all the local repair shops on a daily basis and that's how I met Angelo and Neil. It became very clear to me that they were the best around. In a world where it's harder and harder to truly trust people, these guys are the best. I absolutely recommend their work. You will not be disappointed.</p>



                                        <hr>



                                        <div class="testimonial-author">Billy</div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">I have been going to E&amp;T Automotive for the past fifteen years. Finding a competent, honest mechanic these days is very difficult. But that's just what these guys are. They not only take pride in their work, but they go out of their way to do the right thing.</p>



                                        <hr>



                                        <div class="testimonial-author">Tony</div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">I was so impressed with my first repair in 86, that I have been bringing my cars to them ever since. I now have a few friends that go there as well. You know you're getting the work done by competent men whose main goal is good service and honesty to their customers.</p>



                                        <hr>



                                        <div class="testimonial-author">Scott</div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">Thanks for all the great work on my vehicle. My work truck is running like it was new again. I really appreciated the fact that you got me up and running again very quickly. You guys are the best.</p>



                                        <hr>



                                        <div class="testimonial-author">Vin</div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">These guys take the time to listen to their customers, and respond with years of knowledge and service excellence. They have always made sure that the customer is informed as to the repairs that are necessary, at a reasonable cost. I would recommend this shop to anyone looking for a group of hard working honest guys. Thanks guys for years of great service.</p>



                                        <hr>



                                        <div class="testimonial-author">Marissa</div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">The guys are friendly, helpful, and funny, too! They do good work on our vehicles (vans and cars), and we have had no complaints...</p>



                                        <hr>



                                        <div class="testimonial-author">Mike</div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">I found these guys through Car Talk Mechanics Files and very glad I did. They are competent and honest as the day is long. Highest integrity. Sent 4 others from my workplace there, and they are all equally amazed and happy.</p>



                                        <hr>



                                        <div class="testimonial-author">Ed</div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">I've been going there for years between three different cars and I have always been happy with the service.</p>



                                        <hr>



                                        <div class="testimonial-author">Victoria</div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">Thank you so much for handling my car problem (with extended warranty company) so well and so efficiently! It was greatly appreciated.</p>



                                        <hr>



                                        <div class="testimonial-author">



                                            Mary



                                        </div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">Thank you so much for your work. It is such a comfort to know when I bring my car to you, I am assured that what ever work is needed you are equipped to do it. Have a healthy and prosperous new year!</p>



                                        <hr>



                                        <div class="testimonial-author">



                                            Gloria



                                        </div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">Thank you all very much for doing an amazing job with fixing my car. Everything looks great. I really appreciate all that you've done. Enjoy my mom's cookies!</p>



                                        <hr>



                                        <div class="testimonial-author">



                                            Kevin



                                        </div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">Thank you so much for checking out my car today. I was amazed at the short amount of time it took. Our 25 years of involvement has given me much confidence in your service. Thank you again for your help.</p>



                                        <hr>



                                        <div class="testimonial-author">



                                            Kristin



                                        </div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">Thank you so much again for your expertise, professionalism and honesty. Thank you so much for all you did for me. My car could not be in better hands! Most of all, thanks for caring. You guys are the best!</p>



                                        <hr>



                                        <div class="testimonial-author">



                                            Jackie



                                        </div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <div class="item testimonial-slide">



                            <div class="testimonial-panel">



                                <div class="panel panel-default blue-shadow">



                                    <div class="panel-body justify-this">



                                        <p class="testimonial-text">Hey guys, we wanted to thank you very much for hooking us up with a buyer for the Avalon. From the initial inspection of the car till the vehicle changed hands you guys were great. We really appreciated all you did. We shared this with a few friends who were impressed with how you handled it all. So thanks again.</p>



                                        <hr>



                                        <div class="testimonial-author">



                                            Jay



                                        </div>



                                    </div>



                                </div>



                            </div>



                        </div>



                    </div>







                    <!-- Controls -->



                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">



                        <span class="icon-prev"></span>



                    </a>



                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">



                        <span class="icon-next"></span>



                    </a>



                </div>



            </div>







        </div>



        <!-- /.row -->







        <hr>







        <!-- Logos -->



        <div class="row">



            <div class="col-lg-5 center-this">



                <div><b>We accept:</b></div>



                <div>



                    <img class="logos" src="{{ URL::asset('img/visa-logo.png') }}" alt="Visa">



                    <img class="logos" src="{{ URL::asset('img/mastercard-logo.png') }}" alt="Mastercard">



                    <img class="logos" src="{{ URL::asset('img/discover-logo.png') }}" alt="Discover">



                </div>



            </div>



            <div class="col-lg-7 center-this">



                <div><b>We are certified by:</b></div>



                <div>



                    <img class="logos" src="{{ URL::asset('img/nyscertified.jpg') }}" alt="New York State Certified Automotive Technicians">



                    <img class="logos" src="{{ URL::asset('img/gasdacert.jpg') }}" alt="Gasoline and Automotive Service Dealers of America">



                    <img class="logos" src="{{ URL::asset('img/asecert.jpg') }}" alt="National Institute of Automotive Service Excellence">



                    <div class="second-logos">



                        <img class="logos" src="{{ URL::asset('img/nysinspections.jpg') }}" alt="New York State Inspection Station">



                        <img class="logos" src="{{ URL::asset('img/iatncert.jpg') }}" alt="International Automotive Technicians Network">



                    </div>



                </div>



            </div>



        </div>



        <!-- /.row -->



@stop



@section('deferred')



    <!-- Deferred Styles -->



    <noscript id="deferred-styles">



      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}"/>



      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



    </noscript>



    <script>



      var loadDeferredStyles = function() {



        var addStylesNode = document.getElementById("deferred-styles");



        var replacement = document.createElement("div");



        replacement.innerHTML = addStylesNode.textContent;



        document.body.appendChild(replacement)



        addStylesNode.parentElement.removeChild(addStylesNode);



      };



      var raf = requestAnimationFrame || mozRequestAnimationFrame ||



          webkitRequestAnimationFrame || msRequestAnimationFrame;



      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });



      else window.addEventListener('load', loadDeferredStyles);



    </script>



@stop



@section('postjquery')



    <!-- Script to Activate the Carousel -->



    <script>



    $('.carousel').carousel({



        interval: 7000 //changes the speed



    })



    </script>



@stop



