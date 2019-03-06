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


    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">Project Showcasing Result</h2>
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Place</th>
                            <th>Team Name</th>
                            <th>University Name</th>
                            <th>Team Details</th>
                        </tr>

                        <tr>
                            <td><img src="https://cdn1.iconfinder.com/data/icons/the-competition/450/trophy-512.png" style="width: 40px;"> Champion</td>
                            <td>{{$team_1->team_name}}</td>
                            <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/86/University_of_Chittagong_logo.svg/724px-University_of_Chittagong_logo.svg.png" style="width: 40px;" /> {{$team_1->university}}</td>
                            <td><a href="#team_1" class="btn btn-default fancybox">View Details</a></td>
                        </tr>
                        
                        <tr>
                            <td><img src="https://cdn2.iconfinder.com/data/icons/competition-success/512/gold_medal_competitive_trophy_medal_winning_popularity_glory_high_awards_winners_badge_hero_victory_hit_proud_honor_leadership_competition_prize_premium_-512.png" style="width: 40px;">1st Runners up</td>
                            <td>{{$team_2->team_name}}</td>
                            <td><img src="http://ayatskills.com/wp-content/uploads/2015/05/logo.png" style="width: 40px;" /> {{$team_2->university}}</td>
                            <td><a href="#team_2" class="btn btn-default fancybox">View Details</a></td>
                        </tr> 
                        
                        <tr>
                            <td><img src="https://cdn2.iconfinder.com/data/icons/competition-success/512/silver_medal_competitive_trophy_medal_winning_popularity_glory_high_awards_winners_badge_hero_victory_hit_proud_honor_leadership_competition_prize_premium_-512.png" style="width: 40px;">2nd Runners up</td>
                            <td>{{$team_3->team_name}}</td>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/SUST_Color.png/220px-SUST_Color.png" style="width: 40px;" /> {{$team_3->university}}</td>
                            <td><a href="#team_3" class="btn btn-default fancybox">View Details</a></td>
                        </tr> 
                     


                    </table> 
                </div>
            </div>
        </div>
    </section>


    <!--  Team Details Pop up -->
<div id="team_1" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$team_1->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_1->member1_name}}</em></h4>
                        <p>Participant 1, {{$team_1->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/$team_1->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_1->member2_name}}</em></h4>
                        <p>Participant 2, {{$team_1->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$team_1->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_1->member3_name}}</em></h4>
                        <p>Participant 3, {{$team_1->team_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="team_2" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$team_2->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_2->member1_name}}</em></h4>
                        <p>Participant 1, {{$team_2->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/$team_2->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_2->member2_name}}</em></h4>
                        <p>Participant 2, {{$team_2->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$team_2->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_2->member3_name}}</em></h4>
                        <p>Participant 3, {{$team_2->team_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="team_3" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$team_3->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_3->member1_name}}</em></h4>
                        <p>Participant 1, {{$team_3->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/$team_3->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_3->member2_name}}</em></h4>
                        <p>Participant 2, {{$team_3->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$team_3->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team_3->member3_name}}</em></h4>
                        <p>Participant 3, {{$team_3->team_name}}</p>
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