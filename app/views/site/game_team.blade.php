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
    <?php
    $data = DB::table('pages')->where('slug', 'game')->first();
    
    ?>

    <header>

        <div class="header-wrapper">
            <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


        <div class="header-wrapper" >
                <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Teams</a></li>
                            <li class="active">Gaming Contest Parcipants</li>
                        </ol> 

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <div class="row">
            <a  class="btn pull-right" style="margin-right: 50px; margin-bottom: 70px; size: 100px" href="{{url('/')}}/bkash">Verify Payment </a>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table text-center table-bordered">
                        <tr>
                            <th>Serial</th>
                            {{-- <th>Participant Photo</th> --}}
                            <th>Participant Name</th>
                            <th>Institution</th>
                            <th>Game</th>
                            <th>Status</th>
                        </tr>
                        <?php $count=1; ?>
                        @foreach($teams as $team)
                        <tr>
                            <td>{{$count}}</td>
                            {{-- <td><img src="{{asset("uploads/registration/gc/$team->member_photo")}}" class="img-thumbnail img-responsive" style="width: 80px; height: 80px;"></td> --}}
                            <td>{{$team->member_name}}</td>
                            <td>{{$team->university}}</td>
                            <td>{{$team->contest}}</td>
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
                        </tr>
                        <?php $count++; ?>
                        @endforeach
                    </table>
                </div>
            </div>
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