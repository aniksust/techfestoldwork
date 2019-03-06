@extends('carnival')

@section('content')


<body id="schedulePage">

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
<?php
    $data = DB::table('pages')->where('slug', 'ep')->first();
    
    ?>

    <header>

        <div class="header-wrapper">
            <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
        </div> <!-- /.header-wrapper -->


    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Seminar</h2>
                </div> 

                <h3 class="col-md-12 text-center">Full Schedule Will Be Added Soon.</h3>

            </div>
           
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
    @stop