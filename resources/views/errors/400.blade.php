@extends('layout')
@section('title')
400 - E&amp;T Repair, Inc.
@stop
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@stop
@section('content')
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bad Request</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                Sorry, your browser sent a query this server could not understand.  Please contact our webmaster at mfallon@otchest.com if the problem persists.  Click <a href="{{ URL::to('/') }}">here</a> to return to the main page.  
            </div>
        </div>
@stop