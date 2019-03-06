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
$data = DB::table('pages')->where('slug', 'game')->first();

?>

<header>

    <div class="header-wrapper">
        <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
    </div> <!-- /.header-wrapper -->
</header> <!-- /.page-head (header end) -->




<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <a  class="btn pull-right" style="margin-right: 50px; margin-bottom: 70px; size: 100px" href="{{url('/')}}/bkash">Verify Payment </a>
        </div>
        {{-- <div class="col-md-12"> --}}
        <table class="table table-bordered" style="display: inline-table; min-width: 85%; margin: 0px auto; text-align:center; 
        vertical-align:middle;">
        <tr>
            <th>Team Number</th>
            <th>Team Name</th>
            <th>Institution</th>
            <th>Status</th>
        </tr>
        <?php $count=1; ?>
        @foreach($teams as $team)
        <tr align="center-block">
            <td>{{$count}}</td>
            <td>{{$team->team_name}}</td>
            <td>{{$team->university}}</td>
            @if($team->status == 0)
            <td style="color:red">Pending</td>
            @elseif($team->status == 1)
            <td style="color:green">Confirmed</td>
            @endif
        </tr>
        <?php $count++; ?>
        @endforeach
    </table>
    {{-- </div> --}}
    {{-- </div> --}}
</div>
</section>










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