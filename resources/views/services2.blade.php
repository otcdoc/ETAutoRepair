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

			    <nav class="navbar navbar-default" role="navigation">

			        <div class="navbar-header">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>
			        <div class="collapse navbar-collapse">
		                <ul class="nav nav-stacked">
		                    <li class="active"><a data-toggle="pill" href="#oil">Oil and Filter</a></li>
		                    <li><a data-toggle="pill" href="#inspect">NY State Inspections</a></li>
		                    <li><a data-toggle="pill" href="#scan">Diagnostic Scan</a></li>
		                    <li><a data-toggle="pill" href="#tire">Tire Rotation</a></li>
		                    <li><a data-toggle="pill" href="#annual">Annual Service</a></li>
		                    <li><a data-toggle="pill" href="#brakesys">Brake System</a></li>
		                    <li><a data-toggle="pill" href="#cabin">Cabin Filter</a></li>
		                    <li><a data-toggle="pill" href="#minor">Minor Engine Tune-Up</a></li>
		                    <li><a data-toggle="pill" href="#brakefluid">Brake Fluid Flush</a></li>
		                    <li><a data-toggle="pill" href="#powersteering">Power Steering System</a></li>
		                    <li><a data-toggle="pill" href="#coolingsys">Cooling System Flush</a></li>
		                    <li><a data-toggle="pill" href="#fuelinject">Fuel Injection System</a></li>
		                    <li><a data-toggle="pill" href="#autotrans">Automatic Transmission</a></li>
		                    <li><a data-toggle="pill" href="#wheeldrive">4 Wheel and All Wheel Drive</a></li>
		                    <li><a data-toggle="pill" href="#tirerep">Tire Care and Replacement</a></li>
		                    <li><a data-toggle="pill" href="#major">Major Engine Tune-Up</a></li>
		                    <li><a data-toggle="pill" href="#ac">Air Conditioning</a></li>
		                    <li><a data-toggle="pill" href="#timing">Timing Belt</a></li>
		                    <li><a data-toggle="pill" href="#wheelalign">Wheel Alignment</a></li>
		                    <li><a data-toggle="pill" href="#shock">Shocks and Struts</a></li>
		                    <li><a data-toggle="pill" href="#usedcheck">Used Car Check</a></li>
		                    <li><a data-toggle="pill" href="#tripcheck">Trip Check</a></li>
		                </ul>
	                </div>
                </nav>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
	            <div class="tab-content">
					<div id="oil" class="tab-pane fade in active">
						<h3>Oil and Filter</h3>
						<p>Some content.</p>
					</div>
					<div id="inspect" class="tab-pane fade">
						<h3>Menu 1</h3>
						<p>Some content in menu 1.</p>
					</div>
					<div id="scan" class="tab-pane fade">
						<h3>Diagnostic Scan</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="tire" class="tab-pane fade">
						<h3>Tire Rotation</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="annual" class="tab-pane fade">
						<h3>Annual Service</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="brakesys" class="tab-pane fade">
						<h3>Brake System</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="cabin" class="tab-pane fade">
						<h3>Cabin Filter</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="minor" class="tab-pane fade">
						<h3>Minor Engine Tune-Up</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="brakefluid" class="tab-pane fade">
						<h3>Brake Fluid Flush</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="powersteering" class="tab-pane fade">
						<h3>Power Steering System</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="coolingsys" class="tab-pane fade">
						<h3>Cooling System Flush</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="fuelinject" class="tab-pane fade">
						<h3>Fuel Injection System</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="autotrans" class="tab-pane fade">
						<h3>Automatic Transmission</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="wheeldrive" class="tab-pane fade">
						<h3>4 Wheel and All Wheel Drive</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="tirerep" class="tab-pane fade">
						<h3>Tire Care and Replacement</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="major" class="tab-pane fade">
						<h3>Major Engine Tune-Up</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="ac" class="tab-pane fade">
						<h3>Air Conditioning</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="timing" class="tab-pane fade">
						<h3>Timing Belt</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="wheelalign" class="tab-pane fade">
						<h3>Wheel Alignment</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="shock" class="tab-pane fade">
						<h3>Shocks and Struts</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="usedcheck" class="tab-pane fade">
						<h3>Used Car Check</h3>
						<p>Some content in menu 2.</p>
					</div>
					<div id="tripcheck" class="tab-pane fade">
						<h3>Trip Check</h3>
						<p>Some content in menu 2.</p>
					</div>
				</div>
            </div>
        </div>
        <!-- /.row -->
@stop
@section('postjquery')
@stop