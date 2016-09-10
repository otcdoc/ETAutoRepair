@extends('layout')
@section('fbsdk')
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1115550901858422',
      xfbml      : true,
      version    : 'v2.7'
    });
    FB.api('/194281337341129', function(response) {
        console.log(response);
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@stop
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

        <div
            class="fb-like"
            data-share="true"
            data-width="450"
            data-show-faces="true">
        </div>
@stop