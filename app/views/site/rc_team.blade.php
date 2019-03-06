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
$data = DB::table('pages')->where('slug', 'rc')->first();

?>

<header>

    <div class="header-wrapper">
        <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
    </div> <!-- /.header-wrapper -->

</header>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Team Number</th>
                            <th>Team Name</th>
                            <th>Number of Members</th>
                            <th>Status</th>
                            <th>Team Details</th>
                        </tr>
                        <?php $count=1; ?>
                        @foreach($teams as $team)
                        <tr>
                            <td>{{$count}}</td>
                            <td>{{$team->team_name}}</td>
                            <td>{{$team->number}}</td>
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
            </div>
        </div>
    </section>




    <!--  Team Details Pop up -->


    @foreach($teams as $team)
    <div id="programmingTeam{{$team->id}}" class="container text-center" style="display: none; ">
        <div >
            <h2 >
                {{$team->team_name}}
            </h2>

                <table class="table table-bordered" style="margin: 0 auto; width: 500px">
                    <tr>
                        <th>
                         Team Leader
                     </th>
                     <th>
                        Member1
                    </th>
                    <th>
                        Member2
                    </th>
                    <th>
                        Member3
                    </th>
                    <th>
                        Member4
                    </th>
                </tr>
                <tr>
                    <td>
                        {{$team->team_leader}}
                    </td>
                    <td>
                        {{$team->member1_name}}
                    </td>
                    <td>
                        {{$team->member2_name}}
                    </td>
                    <td>
                        {{$team->member3_name}}
                    </td>
                    <td>
                        {{$team->member4_name}}
                    </td>
                </tr>
            </table>
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
