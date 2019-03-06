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
                <div class="col-md-12">
                    <h2 align="center">Will be published</h2>
                    <!-- <table class="text-center table table-bordered">
                        <tr>
                            <th>Participate Number</th>
                            <th>Participant Photo</th>
                            <th>Participate Name</th>
                            <th>Educational Institution</th>
                            <th>Game Catagory</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td><img src="{{asset('carnival_assets/img/speaker2.jpg')}}" class="img-thumbnail img-responsive" style="width: 80px; height: 80px;"></td>
                            <td>rezaul karim shawon</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td>Need For Speed</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><img src="{{asset('carnival_assets/img/speaker2.jpg')}}" class="img-thumbnail img-responsive" style="width: 80px; height: 80px;"></td>
                            <td>rezaul karim shawon</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td>FIFA 15</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td><img src="{{asset('carnival_assets/img/speaker2.jpg')}}" class="img-thumbnail img-responsive" style="width: 80px; height: 80px;"></td>
                            <td>rezaul karim shawon</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td>Need For Speed</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td><img src="{{asset('carnival_assets/img/speaker2.jpg')}}" class="img-thumbnail img-responsive" style="width: 80px; height: 80px;"></td>
                            <td>rezaul karim shawon</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td>FIFA 15</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td><img src="{{asset('carnival_assets/img/speaker2.jpg')}}" class="img-thumbnail img-responsive" style="width: 80px; height: 80px;"></td>
                            <td>rezaul karim shawon</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td>Need For Speed</td>
                        </tr>
                    </table> -->
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