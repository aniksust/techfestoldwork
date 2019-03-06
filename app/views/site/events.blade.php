@extends('carnival')

@section('content')


<body>

<!--
=============================================
  top navigation bar
=============================================
-->

@include('site_includes.topbar')
<!-- top navigation bar FINISH-->

<!--
=============================================
    main navigation bar
=============================================
-->

@include('site_includes.navbar')
<!-- end of /#navigation -->
<!-- header begin -->
<?php
$data = DB::table('pages')->where('slug', 'ep')->first();

$date = explode("*", $data->dates);
?>

<header>

    <div class="header-wrapper">
        <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
    </div> <!-- /.header-wrapper -->
</header> <!-- /.page-head (header end) -->

<div class="header-wrapper" >
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Events</li>
                    </ol> 

                </div>
            </div>
        </div> --> <!-- /.container -->
    </div> <!-- /.header-wrapper -->
</header> <!-- /.page-head (header end) -->


<section id="events" class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>All Our Events
                    <small>The Event Description of This Programme</small>
                </h2>
            </div>
        </div>

        <div class="event-description">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    $data = DB::table('pages')->where('slug', 'pc')->first();

                    $date = explode("*", $data->dates);
                    ?>


                        <div class="header-wrapper">
                        <img style="height: 100px;" class="img-responsive center-block" src="{{asset('carnival_assets/banners').'/'.$data->banner}}" alt="Event Featured Image">
                        </div> 

                </div>

                <div class="col-md-6">
                    <h3>SUST Inter University Programming Contest (SIUPC)</h3>

                    <a href="{{route('event.pc')}}" class="btn btn-black">Event Details</a>
                    <a href="{{route('reg.pc')}}" class="btn btn-black">Register Now</a>

                </div>
            </div>
        </div>

        <div class="event-description">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <?php
                    $data = DB::table('pages')->where('slug', 'sc')->first();

                    $date = explode("*", $data->dates);
                    ?>


                        <div class="header-wrapper">
                        <img style="height: 100px;" class="img-responsive center-block" src="{{asset('carnival_assets/banners').'/'.$data->banner}}" alt="Event Featured Image">
                        </div> 

                </div>

                <div class="col-md-6 col-md-pull-6 ">
                    <h3>Hackathon</h3>

                    <a href="{{route('event.sc')}}" class="btn btn-black">Event Details</a>
                    <a href="{{route('reg.sc')}}" class="btn btn-black">Register Now</a>                </div>
                </div>
            </div>
            <div class="event-description">
                <div class="row">
                    <div class="col-md-6">
                    <?php
                    $data = DB::table('pages')->where('slug', 'rc')->first();

                    $date = explode("*", $data->dates);
                    ?>


                        <div class="header-wrapper">
                        <img style="height: 100px;" class="img-responsive center-block" src="{{asset('carnival_assets/banners').'/'.$data->banner}}" alt="Event Featured Image">
                        </div> 

                </div>

                    <div class="col-md-6 ">
                        <h3>Robotics Contest</h3>
                        <a href="{{route('event.rc')}}" class="btn btn-black">Event Details</a>
                        <a href="{{route('reg.rc')}}" class="btn btn-black">Register Now</a>
                    </div>
                </div>
            </div>


            <div class="event-description">
                <div class="row">
                    <div class="row">
                    <div class="col-md-6 col-md-push-6">
                    <?php
                    $data = DB::table('pages')->where('slug', 'game')->first();

                    $date = explode("*", $data->dates);
                    ?>


                        <div class="header-wrapper">
                        <img style="height: 100px;" class="img-responsive center-block" src="{{asset('carnival_assets/banners').'/'.$data->banner}}" alt="Event Featured Image">
                        </div> 

                </div>

                    <div class="col-md-6 col-md-pull-6">
                        <h3>Gaming Contest</h3>

                        <a href="{{route('event.gc')}}" class="btn btn-black">Event Details</a>
                        <a href="{{route('reg.gc')}}" class="btn btn-black">Register Now</a>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <!--  Necessary scripts  -->
    <!--  Necessary scripts  -->

    @include('site_includes.footer')
    @stop