@extends('layout')
@section('title')
Services - E &amp; T Auto Repair, Inc.
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
                <h1 class="page-header">Services
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <br>

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"># - B</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab">C - M</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab">M - T</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab">T - W</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4><b>4 Wheel and All Wheel Drive Services</b></h4>
                        <p>The Transfer Case and Differential Fluids are serviced when it is recommended by the vehicles manufacturer.</p>
                        <h4><b>Air Conditioning Service</b></h4>
                        <p>When your air conditioning is not as cold as it should be, it is probably time to have your air conditioning system serviced. All components are checked and the system is leak checked, evacuated and recharged.</p>
                        <h4><b>Annual Service</b></h4>
                        <p>All the brakes are checked cleaned and adjusted. Tires are rotated and checked for proper air pressure. Exhaust system is checked for integrity and leaks, cooling system is pressurized and checked for leaks. The belts and hoses are checked along with load testing the battery and testing the charging system. Front and rear suspension components are checked. All doors and hinges are lubed. Your vehicle is than given a thorough road test.</p>
                        <p>Recommended every 15,000 miles.</p>
                        <h4><b>Automatic Transmission Service</b></h4>
                        <p>This service completely exchanges the transmission fluid and helps to ensure proper operation and protection of your transmission.</p>
						<p>Recommended every 60,000 miles in most vehicles.</p>
                        <h4><b>Brake Fluid Flush Service</b></h4>
                        <p>This service is separate from the brake system service because of a specific mileage interval. Moisture in the brake fluid can damage the hydraulic system. Most vehicles have ABS (Anti-lock Brake Systems). These complicated systems need to be flushed to avoid expensive repairs.</p>
                        <p>Recommended every 45,000 miles.</p>
                        <h4><b>Brake System Service</b></h4>
                        <p>Your brake system needs to be checked and serviced at least once a year. We use only high quality brake components to ensure the proper stopping of your vehicle.</p>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4><b>Cabin Filter Service</b></h4>
                        <p>This service is done to keep the dirty air coming into the vehicle fresh and clean.</p>
                        <p>Recommended every 15,000 or 30,000 miles, depending on the vehicles manufacturer.</p>
                        <h4><b>Cooling System Flush Service</b></h4>
                        <p>This service completely flushes and installs all new antifreeze at the proper mix. All coolant hoses and components are checked to make sure they are in proper working condition.</p>
                        <p>Recommended every 60,000 miles or when it is recommended by the vehicles manufacturer.</p>
                        <h4><b>Diagnostic Scan Service</b></h4>
                        <p>When the CHECK ENGINE, SRS or ABS lights come on you should come in and have your Computer System scanned. This is very important because certain codes can cause damage to critical components of your vehicle.</p>
                        <h4><b>Fuel Injection System Service</b></h4>
                        <p>This service is necessary for the care and maintenance of the throttle, air induction and fuel injectors. After hand cleaning the system, we run the vehicle on a special machine designed to flush the fuel injectors and clean the carbon deposits on the inside of your engine.</p>
                        <p>Recommended every 60,000 miles in most vehicles.</p>
                        <h4><b>Major Engine Tune-Up Service</b></h4>
                        <p>After scanning the computer system for any fault codes, we replace all worn filters and spark plugs.</p>
                        <p>This service is performed when it is recommended by the vehicles manufacturer.</p>
                        <h4><b>Manual Transmission Service</b></h4>
                        <p>This service is performed when it is recommended by the vehicles manufacturer.</p>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4><b>Minor Engine Tune-Up Service</b></h4>
                        <p>After scanning the computer system for any fault codes, we replace all worn filters and check for proper engine performance.</p>
                        <p>Recommended every 30,000 miles.</p>
                        <h4><b>New York State Inspections</b></h4>
                        <p>All vehicles need to be inspected once a year.  We will send a post card in the mail about 1 month prior to your inspection.</p>
                        <h4><b>Oil and Filter Service</b></h4>
                        <p>This service is one of the most important services you can have done to your vehicle. Changing the oil at the recommended interval is critical for long engine life. Look in the upper left corner of your windshield for the oil reminder sticker and call us for an appointment when you reach that mileage or time interval. All fluids and air pressure are checked with this service.</p>
                        <h4><b>Power Steering System Service</b></h4>
                        <p>This important control system is chemically flushed and refilled with high quality fluid.</p>
                        <p>Recommended every 45,000 miles</p>
                        <h4><b>Shocks and Struts</b></h4>
                        <p>Vehicle safety, comfort and performance are basically what shocks and struts are designed to control. These new components will result in a safer and smoother ride, designed to keep the driver in control.</p>
                        <p>This service is performed when your vehicle lacks that new car feel.</p>
                        <h4><b>Timing Belt Service</b></h4>
                        <p>This is a very important service to take care of. Most engines are interference engines which means the engine can get seriously damaged if the timing belt breaks. The water pump, tensioner, pulleys and drive belts are all checked with this service.</p>
                        <p>This service is performed when it is recommended by the vehicles manufacturer.</p>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4><b>Tire Care and Replacement</b></h4>
                        <p>Your 4 tires are the only thing between you and the road. We mount and high speed balance new tires and plug and patch when needed. We sell all major brands of tires.</p>
                        <h4><b>Tire Rotation Service</b></h4>
                        <p>Rotation is needed to get good life from your tires and good fuel economy from your vehicle.</P>
                        <p>Recommended every 9,000 to 10,000 miles.</p>
                        <h4><b>Trip Check Service</b></h4>
                        <p>This service is for peace of mind before you take that trip. We check the belts and hoses. All fluid levels are topped off. The tires and the spare are checked and properly inflated. We also check the wipers, lights and battery. A thorough road test is always given.</p>
                        <h4><b>Used Car Check</b></h4>
                        <p>A complete vehicle check that should be done before any used car purchase. There are many things that you will not find without lifting a vehicle and having it checked by a professional. It is important to know you're getting the right vehicle for the right price.</p>
                        <h4><b>Wheel Alignment</b></h4>
                        <p>This service checks and adjusts all the necessary wheel angles to keep your tires wearing their best and also a properly aligned vehicle will get you your best fuel economy.</p>
                    </div>
                </div>

            </div>
        </div>

        <hr>
        <div class="center-this"> 
            <img src="http://inertiaddict.com/images/mastercard.jpg" alt="We accept Visa and Mastercard">
            <img src="http://inertiaddict.com/images/nyscertified.jpg" alt="New York State Certified Automotive Technicians">
            <img src="http://inertiaddict.com/images/nysinspections.jpg" alt="New York State Inspection Station">            
            <img src="http://inertiaddict.com/images/asecert.jpg" alt="National Institute of Automotive Service Excellence">
            <img src="http://inertiaddict.com/images/iatncert.jpg" alt="International Automotive Technicians Network">
            <img src="http://inertiaddict.com/images/gasdacert.jpg" alt="Gasoline and Automotive Service Dealers of America">
        </div>
@stop