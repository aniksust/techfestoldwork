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
<?php
$data = DB::table('pages')->where('slug', 'sp')->first();

?>

<header>

    <div class="header-wrapper">
        <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
    </div> <!-- /.header-wrapper -->


    <section id="events" class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="width: 0 auto;">
                    <h2>Thanks for Supporting us
                        <small></small>
                        <!-- <img  class="img-responsive center-block" src="/uploads/sponsors.jpg" alt="Sponsors"> -->
                    </h2>
                    <h2 align=center>Title Sponsor
                        <img style="height:180px"  class="img-responsive center-block" src="/uploads/sponsor/ipvision.jpg" alt="Sponsors">
                    </h2>
                {{-- <h2 align=center>Supported By
                <img style="height:200px"  class="img-responsive center-block" src="/uploads/sponsor/surecash.jpg" alt="Sponsors">
            </h2> --}}
                {{-- <h2 align=center>SIUSC Sponsor
                <img style="height:200px"  class="img-responsive center-block" src="/uploads/sponsor/x10.jpg" alt="Sponsors">
            </h2> --}}
            <h3 align=center>T-Shirt Sponsor
                <h4 align=center>SIUPC</h4>
                <img style="height:100px"  class="img-responsive center-block" src="/uploads/sponsor/therap.jpg" alt="Sponsors">
            </h3>
            {{-- <div class="col-md-12" style="width: 0 auto; position: center">
                <table >
                    <thead>
                        <tr class="col-md-2">
                            <th>
                                SIUPC
                            </th>
                        </tr>
                        <tr class="col-md-2">

                            <th>
                                Hackathon
                            </th>
                        </tr>
                        <tr class="col-md-2">

                            <th>
                                Project Showcasing
                            </th>
                        </tr>
                        <tr class="col-md-2">

                            <th>
                                Robotics Contest
                            </th>
                        </tr>
                        <tr class="col-md-2">

                            <th>
                                Gaming Contest
                            </th>
                        </tr>
                    </thead>
                </table>
            </div> --}}
            {{-- <h2 align=center>Bag and Surprise Dinner Sponsor
                <img style="height:200px"  class="img-responsive center-block" src="/uploads/sponsor/surecash.jpg" alt="Sponsors">
            </h2>
            <h2 align=center>Sponsors
                <img style="height:200px"  class="img-responsive center-block" src="/uploads/sponsor/all.jpg" alt="Sponsors">
            </h2> --}}
            <h2 align=center style="margin-top: 70px;">Media Partner
            <h4 align=center style="margin-top: 10px">Print Media</h4>
            <img style="width:300px ; margin-top: 30px"  class="img-responsive center-block" src="{{asset('carnival_assets/').'/'}}jug.png" alt="Sponsors">
            <h4 align=center style="margin-top: 30px">Online Media</h4>
            <img style="width:300px ; margin-top: 30px"  class="img-responsive center-block" src="{{asset('carnival_assets/').'/'}}bdnews.png" alt="Sponsors">
            <h4 align=center style="margin-top: 30px">Electronic Media</h4>
            <img style="height:150px ; margin-top: 30px"  class="img-responsive center-block" src="{{asset('carnival_assets/').'/'}}somoy.png" alt="Sponsors">

            </h2>
        </div>
    </div>

</div>
</section>


<!--  Necessary scripts  -->
<!--  Necessary scripts  -->

@include('site_includes.footer')
@stop




