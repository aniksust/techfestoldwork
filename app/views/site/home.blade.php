@extends('carnival')

@section('content')
<body onload="countdown(2017,08,04,09,00)">

    <section class="header">
        <div id="window-height">
            <div class="heading-wrapper">

               {{--
                =============================================
                =============================================
            --}}

            {{-- @include('site_includes.topbar') --}}
           {{-- top navigation bar FINISH--}}

               {{--
                =============================================
                    main navigation bar
                    Welcome to LICT SUST Tech Fest 2019{{-- Event is Over, See you in next Carnival
                =============================================
            --}}

            @include('site_includes.navbar')
           {{-- end of /#navigation --}}
            

            <div class="heading-content text-center">
                 <div class="timer">
                    <div class="container">
                   
                        <div>
                            <h2 style="margin: 0px !important; padding: 0px !important; color: white !important; font-size: 46px">Welcome to</h2>      
                        </div>
                        
                        <div class="row" style="display: flex !important; justify-content: center !important">
                            
                            <div style="padding-top: 43px !important">
                                <a class="navbar-brand" href="" style="color:white;font-size:20px">
                                    <span><img style="height:100px" src="/carnival_assets/img/logo.png"></span>
                                </a>
                            </div>
                                
                            <div>
                                <h1> SUST Tech Fest 2019 </h1>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                             
                            <!--<div class="col-sm">-->
                            <!--    <a class="navbar-brand" href="" style="color:white;font-size:20px">-->
                            <!--        <span><img style="height:45px" src="/carnival_assets/img/logo.png"></span>-->
                            <!--    </a>-->
                            <!--</div>-->
                                
                            <!--<div class="col-sm">-->
                            <!--    <h1> SUST Tech Fest 2019 </h1>-->
                            <!--</div>-->
                                
                                
                            </div>

                            <!--<div class="row">-->
                            <!--    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">-->
                            <!--        <div class="numbers" id="count2"></div>-->
                            <!--    </div>-->

                            <!--    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 counter1 text-center" id="spacer1">-->
                            <!--        <div class="day numbers" id="dday"></div>-->
                            <!--        <div class="hr numbers" id="dhour"></div>-->
                            <!--        <div class="min numbers" id="dmin"></div>-->
                            <!--        <div class="sec numbers" id="dsec"></div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        

                        
                        <a href="" class="btn btn-registeration text-capitalize">
                            Programming Contest
                        </a>
                        <a href="" class="btn btn-registeration text-capitalize">
                            Hackathon
                        </a>
                        <a href="" class="btn btn-registeration text-capitalize">
                            Robotics Competition
                        </a>
                        {{-- <a href="/event/projectshowcasing" class="btn btn-registeration text-capitalize">
                            Project Showcasing
                        </a> --}}
                        <!--<a href="/event/gamingCompetition" class="btn btn-registeration text-capitalize">-->
                        <!--    Project Showcasing-->
                        <!--</a>-->
                        <a href="" class="btn btn-registeration text-capitalize">
                            Project Showcasing
                        </a>
                    </div> {{-- end of .heading-content--}}
                    </div> {{--  end of .timer   --}}

                    {{-- mobile  e oaky ache but eita dekh...... --}}
                </div>
            </div>{{-- end of .heading-wrapper --}}
        </div>
    </section>{{-- end of header section --}}


   {{-- begin:about --}}
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About The Event
                        <small>You need to do is very simple just join us</small>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            <a href="#"><i class="fa fa-home"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>Great Venue</h3>
                            <hr class="hover-extend">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
               {{-- break --}}
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            {{-- <a href="{{url('/judges')}}"><i class="fa fa-users"></i></a> --}}
                            <a href=""><i class="fa fa-users"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>Renowned Judge</h3>
                            <hr class="hover-extend">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            {{-- <a href="{{url('/contact')}}"><i class="fa fa-thumbs-up"></i></a> --}}
                            <a href=""><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>24/7 Support</h3>
                            <hr class="hover-extend">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   {{-- end:about --}}


 <section class="main-content">
        <div class="container">
            <div style="margin: 0px auto">
                <div class="col-md-12 text-center">
                    <h2>Schedule of LICT SUST Tech Fest 2019</h2>
            <small>Shortest way to explore what will happen on Carnival</small>  
{{--  --}}
                </div>
            </div>
            @if(sizeof($dates)==0)
            <h3 class="col-md-8 text-center">Full Schedule Will Be Added Soon.</h3>
            @endif
            <div class="col-md-12 text-center" style="margin: 0px auto">
                <?php $day = 1;?>
                @foreach($dates as $date)
                <div style="margin: 0px auto">
                    <h3 class="text-center">Day {{$day++}} ({{(new DateTime($date->date))->format('d/m/Y - l')}})</h3>
                    <table style="margin: 0px auto" class="text-center table table-bordered">
                        <tr>
                            <th>Time</th>
                            <th>Programme Description</th>
                        </tr>
                        @foreach($events as $event)
                        <?php if($date->date!=$event->date) continue; ?>
                        <tr>
                            <td>{{(new DateTime($event->time))->format('h:i A')}}</td>
                            <td>{{$event->description}}</td> 
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endforeach
            </div>
        </div>
    </section>


</div>
</div>
</section>
</body>



{{-- @include('site_includes.footer') --}}
@stop