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
<!-- header begin -->
<!-- header begin -->
<?php
$data = DB::table('pages')->where('slug', 'ps')->first();

?>

<header>

    <div class="header-wrapper">
        <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
    </div> <!-- /.header-wrapper -->
    <div class="header-wrapper" >
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Teams</a></li>
                            <li class="active">Project Showcasing Teams</li>
                        </ol> 

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <div class="row">
                @if(sizeof($teams)==0)
                <style>
                    @keyframes blink {  
                        0% { color: red; }
                        100% { color: black; }
                    }
                    @-webkit-keyframes blink {
                        0% { color: red; }
                        100% { color: black; }
                    }
                    .blink {
                        -webkit-animation: blink 1s linear infinite;
                        -moz-animation: blink 1s linear infinite;
                        -ms-animation: blink 1s linear infinite;
                        -o-animation: blink 1s linear infinite;
                        animation: blink 1s linear infinite;
                    } 

                </style>

                <section class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 align="center" style='color:red' class="blink"> No Team Registered!!!{{-- Oops....Registration Closed !!! --}}</h2>

                            </div>
                        </div>
                    </div>
                    </section>
                @else
                <div class="col-md-12">
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Team Number</th>
                            <th>Team Name</th>
                            <th>University Name</th>
                            <th>Status</th>
                            <th>Team Details</th>
                        </tr>
                        <?php $count=1; ?>
                        @foreach($teams as $team)
                        <tr>
                            <td>{{$count}}</td>
                            <td>{{$team->team_name}}</td>
                            <td>{{$team->university}}</td>
                            @if($team->status == 0)
                            <td style="color:red">Pending</td>
                            @elseif($team->status == 1)
                            <td style="color:red">Waiting for Payment</td>
                            @elseif($team->status == 2)
                            <td style="color:green">Accepted</td>
                            @elseif($team->status == 3)
                            <td style="color:blue">Under Review</td>
                            @elseif($team->status == 4)
                            <td style="color:red">Cancel</td>
                            @endif
                            <td><a href="#programmingTeam{{$team->id}}" class="btn btn-default fancybox">View Details</a></td>
                        </tr>
                        <?php $count++; ?>
                        @endforeach
                    </table>
                </div>
                @endif
            </div>
        </div>
    </section>




    <!--  Team Details Pop up -->


    @foreach($teams as $team)
    <div id="programmingTeam{{$team->id}}" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/ps/$team->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team->member1_name}}</em></h4>
                        <p>Participant 1, {{$team->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/ps/$team->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team->member2_name}}</em></h4>
                        <p>Participant 2, {{$team->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/ps/$team->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team->member3_name}}</em></h4>
                        <p>Participant 3, {{$team->team_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    <!-- <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Not selected yet</h2>
                </div>
            </div>
        </div>
    </section> -->
    
    <!--  Necessary scripts  -->

    @include('site_includes.footer')
    @stop
