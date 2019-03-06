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
    <!-- header begin -->
    <?php
    $data = DB::table('pages')->where('slug', 'sc')->first();
    
    ?>

    <header>

        <div class="header-wrapper">
            <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
        </div> <!-- /.header-wrapper -->


    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">Web Track</h2>
                     <table class="text-center table table-bordered">
                        <tr>
                            <th>Place</th>
                            <th>Team Name</th>
                            <th>University Name</th>
                            <th>Team Details</th>
                        </tr>

                        <tr>
                            <td><img src="https://cdn2.iconfinder.com/data/icons/competition-success/512/gold_medal_competitive_trophy_medal_winning_popularity_glory_high_awards_winners_badge_hero_victory_hit_proud_honor_leadership_competition_prize_premium_-512.png" style="width: 40px;"> Champion</td>
                            <td>{{$web_1->team_name}} [{{$web_1->sc_track}}]</td>
                            <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/cb/Dhaka_University_logo.svg/805px-Dhaka_University_logo.svg.png" style="width: 40px;" /> {{$web_1->university}}</td>
                            <td><a href="#webTeam1" class="btn btn-default fancybox">View Details</a></td>
                        </tr>
                           <tr>
                            <td><img src="https://cdn2.iconfinder.com/data/icons/competition-success/512/silver_medal_competitive_trophy_medal_winning_popularity_glory_high_awards_winners_badge_hero_victory_hit_proud_honor_leadership_competition_prize_premium_-512.png" style="width: 40px;"> Runner up</td>
                            <td>{{$web_2->team_name}} [{{$web_2->sc_track}}]</td>
                            <td><img src="http://www.rightadmission.com/wp-content/uploads/2013/03/iubat-logo.jpg" style="width: 40px;" /> {{$web_2->university}}</td>
                            <td><a href="#webTeam2" class="btn btn-default fancybox">View Details</a></td>
                        </tr>
                     


                    </table> 
                    
                    <h2 align="center">Mobile Track</h2>
                     <table class="text-center table table-bordered">
                        <tr>
                            <th>Place</th>
                            <th>Team Name</th>
                            <th>University Name</th>
                            <th>Team Details</th>
                        </tr>

                        <tr>
                            <td><img src="https://cdn2.iconfinder.com/data/icons/competition-success/512/gold_medal_competitive_trophy_medal_winning_popularity_glory_high_awards_winners_badge_hero_victory_hit_proud_honor_leadership_competition_prize_premium_-512.png" style="width: 40px;"> Champion</td>
                            <td>{{$mobile_1->team_name}} [{{$mobile_1->sc_track}}]</td>
                            <td><img src="http://usis.bracu.ac.bd/academia/images/header/Logo.png" style="width: 40px;" /> {{$mobile_1->university}}</td>
                            <td><a href="#mobileTeam1" class="btn btn-default fancybox">View Details</a></td>
                        </tr>
                        
                        <tr>
                            <td><img src="https://cdn2.iconfinder.com/data/icons/competition-success/512/silver_medal_competitive_trophy_medal_winning_popularity_glory_high_awards_winners_badge_hero_victory_hit_proud_honor_leadership_competition_prize_premium_-512.png" style="width: 40px;"> Runner up</td>
                            <td>{{$mobile_2->team_name}} [{{$mobile_2->sc_track}}]</td>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/SUST_Color.png/220px-SUST_Color.png" style="width: 40px;" /> {{$mobile_2->university}}</td>
                            <td><a href="#mobileTeam2" class="btn btn-default fancybox">View Details</a></td>
                        </tr> 
                     


                    </table> 
                    
                    
                </div>
            </div>
        </div>
    </section>


    <!--  Team Details Pop up -->
<div id="webTeam1" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$web_1->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$web_1->member1_name}}</em></h4>
                        <p>Participant 1, {{$web_1->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/$web_1->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$web_1->member2_name}}</em></h4>
                        <p>Participant 2, {{$web_1->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$web_1->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$web_1->member3_name}}</em></h4>
                        <p>Participant 3, {{$web_1->team_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="webTeam2" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$web_2->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$web_2->member1_name}}</em></h4>
                        <p>Participant 1, {{$web_2->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/$web_2->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$web_2->member2_name}}</em></h4>
                        <p>Participant 2, {{$web_2->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$web_2->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$web_2->member3_name}}</em></h4>
                        <p>Participant 3, {{$web_2->team_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div id="mobileTeam1" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$mobile_1->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$mobile_1->member1_name}}</em></h4>
                        <p>Participant 1, {{$mobile_1->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/$mobile_1->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$mobile_1->member2_name}}</em></h4>
                        <p>Participant 2, {{$mobile_1->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$mobile_1->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$mobile_1->member3_name}}</em></h4>
                        <p>Participant 3, {{$mobile_1->team_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="mobileTeam2" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$mobile_2->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$mobile_2->member1_name}}</em></h4>
                        <p>Participant 1, {{$mobile_2->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/$mobile_2->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$mobile_2->member2_name}}</em></h4>
                        <p>Participant 2, {{$mobile_2->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$mobile_2->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$mobile_2->member3_name}}</em></h4>
                        <p>Participant 3, {{$mobile_2->team_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>






    
 


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