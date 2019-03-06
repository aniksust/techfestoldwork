<div id="navigation">
    <!-- main navigaion begin -->
    <nav class="yamm navbar navbar-default ">
        <div class="container">
            <!-- navbar header begin -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style="color:white;font-size:20px">
                <span><img style="height:45px" src="/carnival_assets/img/logo.png"></span> LICT SUST Tech Fest 2019
                </a>
            </div>

            <!-- main navigation begin -->
            <div class="collapse navbar-collapse navHead pull-right" id="mainMenu">

                <ul class="nav navbar-nav">
                    <!-- HOME item: begin -->
                    <li><a href="{{url('/')}}">Home</a></li>
                    <!--<li><a href="{{url('/gallery')}}">Gallery</a></li>-->
                    <!--<li><a href="">Gallery</a></li>-->
                    <li class="dropdown">
                        <!--<a href="{{url('/events')}}">Events</a>-->
                        <a href="">Events</a>
                        <ul class="dropdown-menu">
                            <li>
                                <!--<a href="{{route('event.pc')}}">Programmimg Contest</a>-->
                                <a href="">Programmimg Contest</a>
                            </li>
                            <li>
                                <!--<a href="{{route('event.sc')}}">Hackathon</a>-->
                                <a href="">Hackathon</a>
                            </li>
                            {{-- <li>
                                <a href="{{route('event.ps')}}">Project Showcasing</a>-->
                            </li> --}} 
                            <li>
                                <!--<a href="{{route('event.rc')}}">Robotics Contest</a>-->
                                <a href="">Robotics Contest</a>
                            </li>

                            <li>
                                <!--<a href="{{route('event.gc')}}">Gaming Contest</a>-->
                                <a href="">Project Showcasing</a>
                            </li>
                            <li>
                                <!--<a href="{{URL('seminar')}}">Seminar</a>-->
                                <a href="">Seminar</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li>
                    <li>
                        <a href="{{url('/schedule')}}">Schedule</a>
                        <!--<a href="">Schedule</a>-->
                    </li>
                    <!--<li class="dropdown">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Teams</span></a>-->
                        <!--<ul class="dropdown-menu">-->
                            <!--<li>-->
                                <!--<a href="{{route('team.pc')}}">Programmimg Contest Teams</a>-->
                                <!--<a href="">Programmimg Contest Teams</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="{{route('team.sc')}}">Hackathon Teams</a>-->
                                <!--<a href="">Hackathon Teams</a>-->
                            <!--</li>-->
                            {{-- <li>
                                <a href="{{route('team.ps')}}">Project Showcasing Teams</a>
                            </li> --}}
                            <!--<li>-->
                                <!--<a href="{{route('team.rc')}}">Robotics Contest Teams</a>-->
                                <!--<a href="">Robotics Contest Teams</a>-->
                            <!--</li>-->

                            <!--<li class="dropdown dropdown-submenu">-->
                                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Project Showcasing Teams</a>-->
                                <!--<ul  class="dropdown-menu">-->
                                <!--    <a style="color: BLACK" href="{{route('team.gc')}} ">NFS/FIFA</a>-->
                                <!--    <a style="color: BLACK" href="{{route('team.gc.cs')}}">Call of Duty</a>-->
                                <!--</ul>-->
                            <!--</li>-->
                        <!--</ul>  -->
                        <!-- end of /.dropdown-menu -->
                    <!--</li>-->
                    {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Results</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('result.pc')}}">Programmimg Contest Result</a>
                            </li>
                            <li>
                                <a href="{{route('result.sc')}}">Hackathon Result</a>
                            </li>
                            <li>
                                <a href="{{route('result.ps')}}">Project Showcasing Result</a>
                            </li> 
                            <li>
                                <a href="{{route('result.gc')}}">Gaming Contest Result</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li> --}}
                    <!--<li class="dropdown registration">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Registration</span></a>-->
                        <!--<ul class="dropdown-menu">-->
                            <!--<li>-->
                                <!--<a href="{{route('reg.pc')}}">Programming Contest</a>-->
                                <!--<a href="">Programming Contest</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="{{route('reg.sc')}}">Hackathon</a>-->
                                <!--<a href="">Hackathon</a>-->
                            <!--</li>-->
                            {{-- <li>
                                <a href="{{route('reg.ps')}}">Project Showcasing</a>
                            </li> --}}
                            <!--<li>-->
                                <!--<a href="{{route('reg.rc')}}">Robotics Contest</a>-->
                                <!--<a href="">Robotics Contest</a>-->
                            <!--</li>-->
                             <!--<li class="dropdown dropdown-submenu">-->
                                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Project Showcasing</a>-->
                                <!--<ul  class="dropdown-menu">-->
                                <!--    <a style="color: BLACK" href="{{route('reg.gc')}} ">NFS/FIFA</a>-->
                                <!--    <a style="color: BLACK" href="{{route('reg.gc.cs')}}">Call of Duty</a>-->
                                <!--</ul>-->
                            <!--</li>-->
                        <!--</ul> -->
                        <!-- end of /.dropdown-menu -->
                    <!--</li>-->
                    <!-- end of /.dropdown -->
                    <!--<li>-->
                        <!--<a href="{{url('/sponsor')}}">Sponsors</a>-->
                        <!--<a href="">Sponsors</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="{{url('/contact')}}">Contact</a>-->
                        <!--<a href="">Contact</a>-->
                    <!--</li>-->
                    
                </ul>

            </div><!-- main navigation FINISH -->
           
        </div><!-- container FINISH -->

    </nav><!-- yamm navbar navbar-default FINISH -->
<!--@if(isset($scroll))-->
<!--<a href="{{url('/')}}/sust_cse_carnival_2017_teamslots_for_programming_contest.pdf" style="text-decoration: none;"><marquee behavior="scroll" direction="left" style="padding:5px; position: relative; background-color: #fff;  opacity: .9" onmouseover="this.stop();" onmouseout="this.start();"> SUST Inter University Programming Contest 2017 Team Slot has been published. Click to download.  </marquee></a>-->
<!--@endif-->

</div>