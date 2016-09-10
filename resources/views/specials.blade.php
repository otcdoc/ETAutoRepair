@extends('layout')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Specials
                    <small>Tune in for Amazing Deals</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Specials Coupons -->
        <div class="row">
            <div class="col-lg-12">
                <object id="specials" style="width:100%; height: 600px;" data="{{ URL::asset('pdf/specials.pdf') }}"></object> 
            </div>
        </div>
@stop