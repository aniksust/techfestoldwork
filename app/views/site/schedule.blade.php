@extends('carnival')

@section('content')


<body id="schedulePage">

    <!--
    =============================================
      top navigation bar
    =============================================
-->

{{-- @include('site_includes.topbar') --}}
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
<?php
$data = DB::table('pages')->where('slug', 'ep')->first();

?>

<header>

    <!--<div class="header-wrapper">-->
        {{-- <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}"> --}}
    <!--</div>-->
    <!-- /.header-wrapper -->


    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>LICT SUST Tech Fest 2019</h2>
                </div>

            </div>
            @if(sizeof($dates)==0)
            <h3 class="col-md-12 text-center">Full Schedule Will Be Added Soon.</h3>
            @endif
            
            <div >

                <?php $day = 1; 
                

                ?>
                @foreach($dates as $date)
                <div style="width: 70%; margin: 0 auto; ">

                    <h3 align="center">Day {{$day++}} ({{(new DateTime($date->date))->format('d/m/Y - l')}})</h3>
                    <table class="table table-bordered">
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


    <!--  Necessary scripts  -->

    {{-- @include('site_includes.footer') --}}
    @stop
