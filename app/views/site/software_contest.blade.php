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
    <?php
    $data = DB::table('pages')->where('slug', 'sc')->first();
    
                $date = explode("*", $data->dates);
    ?>

    <header>

        <div class="header-wrapper">
            <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <section class="event-section">
                
            {{$data->description}}

            </section>


            <section class="quick-registration-link" align=center>
            <a href="{{route('reg.sc')}}" class="btn btn-black">Register Now</a>
            </section>

            
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop
