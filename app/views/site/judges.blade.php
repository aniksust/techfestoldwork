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
    </header> <!-- /.page-head (header end) -->




    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Honorable Problem Setters and Judges</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    @if(sizeof($datas)==0)
                    <h3 align=center>Full List Will Be Published Soon</h3>
                    @else
                    <h3 align=center>For SUST Inter University Programming Contest</h3>
                    
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Company</th>
                            <th>Role</th>
                        </tr>
                        @foreach($datas as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->designation}}</td>
                            <td>{{$data->company}}</td>
                            <td>{{$data->role}}</td>
                        </tr>
                        @endforeach   

                    </table>
                    @endif
                </div>
            </div>
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
    @stop