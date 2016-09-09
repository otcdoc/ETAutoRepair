@extends('layout')
@section('content')
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Services
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item" data-toggle="collapse" data-target="#oil" data-parent="#services">Oil and Filter</a>
                    <a class="list-group-item" data-toggle="collapse" data-target="#inspection" data-parent="#services">NY State Inspections</a>
                    <a href="#" class="list-group-item">Diagnostic Scan</a>
                    <a href="#" class="list-group-item">Tire Rotation</a>
                    <a href="#" class="list-group-item">Annual Service</a>
                    <a href="#" class="list-group-item">Brake System</a>
                    <a href="#" class="list-group-item">Cabin Filter</a>
                    <a href="#" class="list-group-item">Minor Engine Tune-Up</a>
                    <a href="#" class="list-group-item">Brake Fluid Flush</a>
                    <a href="#" class="list-group-item">Power Steering System</a>
                    <a href="#" class="list-group-item">Cooling System Flush</a>
                    <a href="#" class="list-group-item">Fuel Injection System</a>
                    <a href="#" class="list-group-item">Automatic Transmission</a>
                    <a href="#" class="list-group-item">4 Wheel and All Wheel Drive</a>
                    <a href="#" class="list-group-item">Tire Care and Replacement</a>
                    <a href="#" class="list-group-item">Major Engine Tune-Up</a>
                    <a href="#" class="list-group-item">Air Conditioning</a>
                    <a href="#" class="list-group-item">Timing Belt</a>
                    <a href="#" class="list-group-item">Wheel Alignment</a>
                    <a href="#" class="list-group-item">Shocks and Struts</a>
                    <a href="#" class="list-group-item">Used Car Check</a>
                    <a href="#" class="list-group-item">Trip Check</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <p>We can perform all the necessary services to keep your vehicle running at peak performance.  Here are some of our most common services.</p>
                <div id="oil" class="collapse fade">
                <h2>Oil and Filter</h2>
                <p>This service is one of the most important services you can have done to your vehicle. Changing the oil at the recommended interval is critical for long engine life. Look in the upper left corner of your windshield for the oil reminder sticker and call us for an appointment when you reach that mileage or time interval. All fluids and air pressure are checked with this service.</p>
                </div>
                <div id="inspection" class="collapse fade">
                <h2>NY State Inspections</h2>
                <p>All vehicles need to be inspected once a year.  We will send a post card in the mail about 1 month prior to your inspection.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->
@stop