@extends('layout')
@section('fbsdk')
@stop
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News
                    <small>Latest Updates from E&T Auto</small>
                </h1>
            </div>
        </div>
        <!-- /.row --><?php $count = 0; ?>

        @foreach ($graphEdge as $graphNode)
        @if (($count < 5)&&(isset($graphNode['message'])))
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
            @if ($graphNode['type'] == 'photo')
                <p><i class="fa fa-camera blue-font fa-4x"></i></p>
            @elseif ($graphNode['type'] == 'link')
                <p><i class="fa fa-link blue-font fa-4x"></i></p>
            @elseif ($graphNode['type'] == 'status')
                <p><i class="fa fa-pencil-square blue-font fa-4x"></i></p>
            @elseif ($graphNode['type'] == 'video')
                <p><i class="fa fa-film blue-font fa-4x"></i></p>
            @elseif ($graphNode['type'] == 'offer')
                <p><i class="fa fa-money blue-font fa-4x"></i></p>
            @else
                <p><i class="fa fa-comment blue-font fa-4x"></i></p>
            @endif
                <p>{{ $graphNode['created_time']->format('F d, Y') }}</p>
            </div>
            <div class="col-md-5">
                @if (isset($graphNode['full_picture']))
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="{{ $graphNode['full_picture'] }}" alt="" height="300" width="600">
                </a>
                @else
                <a href="https://placeholdit.imgix.net/~text?txtsize=56&txt=600%C3%97300&w=600&h=300">
                    <img class="img-responsive img-hover" src="https://placeholdit.imgix.net/~text?txtsize=56&txt=600%C3%97300&w=600&h=300" alt="">
                </a>
                @endif
            </div>
            <div class="col-md-6">
                <p>Posted on {{ $graphNode['created_time']->format('F d \a\t g:ia') }}.
                </p>
                <p>{{ $graphNode['message'] }}</p>
                <a class="btn btn-primary" href="https://www.facebook.com/{{ $graphNode['id'] }}">Read on Facebook <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <hr>
        <!-- /.row --><?php $count++; ?>
        
        @endif
        @endforeach

        <!-- Facebook Link -->
        <div class="row">
            <div class="col-lg-12">
                <p>For more news, please visit our <a href="https://www.facebook.com/ET-Auto-Repair-Inc-194281337341129/">facebook page</a>!</p>
            </div>
        </div>
        <!-- /.row -->

@stop
@section('postjquery')

@stop