@extends('layout')
@section('title')
Contact - E &amp; T Auto Repair, Inc.
@stop
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@stop
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->
            <div class="col-md-6 contact-box">
                <h3>Contact Details</h3>
                <p>
                    509 Commack Rd<br>Deer Park, NY 11729<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    Phone: <a href="tel:+1-631-586-7110">(631) 586-7110</a></p>
                <p><i class="fa fa-fax"></i> 
                    Fax: <a href="tel:+1-631-586-7111">(631) 586-7111</a></p>
                <p><i class="fa fa-truck"></i> 
                    24-Hr Towing: <a href="tel:+1-917-586-4300">(917) 586-4300</a></p>
                <p><i class="fa fa-envelope-o"></i> 
                    Email: <a href="service@etautodeerparkny.com">service@etautodeerparkny.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    Hours: Monday - Friday: 8:00 AM to 5:30 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/ET-Auto-Repair-Inc-194281337341129/"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/ET-Auto-Repair-Inc-194281337341129/"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.yelp.com/biz/e-and-t-automobile-repr-deer-park"><i class="fa fa-yelp fa-2x" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Map Column -->
            <div class="col-sm-1 col-xs-1 visible-xs visible-sm"></div>
            <div class="col-sm-10 col-xs-10 col-md-6">
                <!-- Embedded Google Map -->
                <iframe class="red-shadow" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.786937235246!2d-73.31253628459339!3d40.766710679326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e82ddac9f32f03%3A0x1c79370f85289765!2sE+%26+T+Automobile+Repair+Inc!5e0!3m2!1sen!2sus!4v1473480861698&amp;output=embed"></iframe>
            </div>
        </div>
        <!-- /.row -->
@stop